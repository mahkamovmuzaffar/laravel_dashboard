<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ApiController extends Controller
{
    // A simple example method
    private function addNumbers($a, $b)
    {
        return $a + $b;
    }


    public function handle(Request $request)
    {
        // Set up the base response headers
        $headers = ['Content-Type' => 'application/json'];

        // Get the JSON payload
        $payload = $request->json()->all();

        // Validate the basic JSON-RPC structure
        $validator = Validator::make($payload, [
            'jsonrpc' => 'required|string|in:2.0',
            'method' => 'required|string',
            'params' => 'nullable|array',
            'id' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return Response::json([
                'jsonrpc' => '2.0',
                'error' => [
                    'code' => -32600,
                    'message' => 'Invalid Request',
                    'data' => $validator->errors()->all(),
                ],
                'id' => null,
            ], 200, $headers);
        }

        $method = $payload['method'];
        $params = $payload['params'] ?? [];
        $id = $payload['id'] ?? null;

        try {
            // Check if the method exists in the controller
            if (!method_exists($this, $method)) {
                throw new \Exception('Method not found.', -32601);
            }

            // Dynamically call the method with the provided parameters
            $result = call_user_func_array([$this, $method], $params);

            return Response::json([
                'jsonrpc' => '2.0',
                'result' => $result,
                'id' => $id,
            ], 200, $headers);

        } catch (\Exception $e) {
            return Response::json([
                'jsonrpc' => '2.0',
                'error' => [
                    'code' => $e->getCode() ?: -32000,
                    'message' => $e->getMessage() ?: 'Server error',
                ],
                'id' => $id,
            ], 200, $headers);
        }
    }
}
