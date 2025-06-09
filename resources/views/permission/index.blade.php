@extends('layouts.master')

@section('title')
    @lang('translation.Permissions_List')
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') @lang('translation.User_Management') @endslot
        @slot('title') @lang('translation.Permissions_List') @endslot
    @endcomponent

    <div class="container-fluid">

        <!-- Top Button -->
        <div class="row mb-3">
            <div class="col-sm-6">
                <h4 class="page-title">@lang('translation.Permissions_List')</h4>
            </div>
            <div class="col-sm-6 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#permissionForm">
                    <i class="bx bx-plus me-1"></i> @lang('translation.Add_Permission')
                </button>
            </div>
        </div>

        <!-- Permissions Table -->
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>@lang('translation.Permission_Name')</th>
                            <th>@lang('translation.Description')</th>
                            <th>@lang('translation.Created_At')</th>
                            <th class="text-center">@lang('translation.Actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($permissions as $index => $permission)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->description ?? '-' }}</td>
                                <td>{{ $permission->created_at->format('Y-m-d') }}</td>
                                <td class="text-center">
                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" onsubmit="return confirm('Are you sure?')" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @if ($permissions->isEmpty())
                            <tr>
                                <td colspan="5" class="text-center">@lang('translation.No_permissions_found')</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Offcanvas: Create / Edit Permission -->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="permissionForm" aria-labelledby="permissionFormLabel">
            <div class="offcanvas-header">
                <h5 id="permissionFormLabel">@lang('translation.Create_Permission')</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <form action="{{ route('permissions.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label>@lang('translation.Permission_Name')</label>
                        <input type="text" name="name" class="form-control" required/>
                    </div>

                    <div class="mb-3">
                        <label>@lang('translation.Description')</label>
                        <textarea name="description" class="form-control" rows="3" placeholder="Optional description"></textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">@lang('translation.Save')</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
