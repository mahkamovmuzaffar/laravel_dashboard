@extends('layouts.master')

@section('title')
    Users
@endsection

@section('content')

    <div class="container-fluid">

        <!-- Page title -->
        <div class="row mb-3">
            <div class="col-sm-6">
                <h4 class="page-title">Users</h4>
            </div>
            <div class="col-sm-6 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#userForm">
                    <i class="bx bx-plus me-1"></i> Add User
                </button>
            </div>
        </div>

        <!-- Users Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $index => $user)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info" data-bs-toggle="offcanvas"
                                        data-bs-target="#userForm">
                                    <i class="bx bx-show"></i>
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    <i class="bx bx-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    @if ($users->isEmpty())
                        <tr>
                            <td colspan="6" class="text-center">No users found</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Offcanvas: Create / View User -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="userForm" aria-labelledby="userFormLabel">
        <div class="offcanvas-header">
            <h5 id="userFormLabel">Create User</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required/>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required/>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required/>
                </div>

                <div class="mb-3">
                    <label>Role</label>
                    <select name="role" class="form-select">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
