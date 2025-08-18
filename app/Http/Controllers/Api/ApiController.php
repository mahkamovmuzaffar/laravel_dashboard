<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{

    private function dispatch($req)
    {
        if (!is_array($req) || ($req['jsonrpc'] ?? null) !== '2.0' || !array_key_exists('method', $req)) {
            return $this->error($req['id'] ?? null, -32600, 'Invalid Request');
        }

        $id = $req['id'] ?? null;
        $method = (string)$req['method'];   // e.g. "transfer.create"
        $params = $req['params'] ?? [];

        try {
            [$class, $func] = $this->resolveMethod($method);

            if (!class_exists($class) || !method_exists($class, $func)) {
                return $this->error($id, -32601, 'Method not found');
            }

            $handler = [app($class), $func];

            if (is_array($params) && !\Illuminate\Support\Arr::isList($params)) {
                $result = call_user_func($handler, $params);      // named params
            } else {
                $result = call_user_func_array($handler, (array)$params); // positional
            }

            if ($id === null) return null; // notification

            return [
                'jsonrpc' => '2.0',
                'result' => $result,
                'id' => $id,
            ];
        } catch (\Exception $e) {
            report($e);
            return $this->error($id, -32603, 'Internal error');
        }
    }

    private function resolveMethod(string $rpcMethod): array
    {
        // "transfer.create" => TransferMethods@create
        $parts = explode('.', $rpcMethod);
        $classPart = ucfirst(array_shift($parts)) . 'Methods';   // TransferMethods
        $methodPart = array_shift($parts) ?? 'index';            // create

        $class = "App\\Http\\Controllers\\Api\\v1\\{$classPart}";
        return [$class, $methodPart];
    }
}
