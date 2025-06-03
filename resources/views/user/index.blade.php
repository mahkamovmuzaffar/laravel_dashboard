@extends('layouts.master')

@section('title')
    @lang('translation.User_List')
@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') @lang('translation.User_Management') @endslot
        @slot('title') @lang('translation.User_List') @endslot
    @endcomponent

    <div class="container-fluid">

        <!-- Page Header -->
        <div class="row mb-3">
            <div class="col-sm-6">
                <h4 class="page-title">@lang('translation.User_List')</h4>
            </div>
            <div class="col-sm-6 text-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#userForm">
                    <i class="bx bx-plus me-1"></i> @lang('translation.Add_User')
                </button>
            </div>
        </div>


        <!-- Users Table -->
        <div class="card">
            <div class="card-body">
                <form method="GET" action="{{ route('users.index') }}" class="row g-3 mb-3">
                    <div class="col-md-3">
                        <input type="text" name="name" value="{{ request('name') }}" class="form-control" placeholder="@lang('translation.Name')">
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="email" value="{{ request('email') }}" class="form-control" placeholder="@lang('translation.Email')">
                    </div>
                    <div class="col-md-3">
                        <select name="sort" class="form-select">
                            <option value="">@lang('translation.Sort_By')</option>
                            <option value="role" {{ request('sort') == 'role' ? 'selected' : '' }}>@lang('translation.Role')</option>
                            <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>@lang('translation.Created_At')</option>
                        </select>
                    </div>
                    <div class="col-md-3 text-end">
                        <button class="btn btn-primary" type="submit"><i class="bx bx-search"></i> @lang('translation.Search')</button>
                        <a href="{{ route('users.index') }}" class="btn btn-light"><i class="bx bx-reset"></i> @lang('translation.Reset')</a>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0">

                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>@lang('translation.Name')</th>
                            <th>@lang('translation.Email')</th>
                            <th>@lang('translation.Role')</th>
                            <th>@lang('translation.Created_At')</th>
                            <th class="text-center">@lang('translation.Actions')</th>
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
                                    <button class="btn btn-sm btn-info" data-bs-toggle="offcanvas" data-bs-target="#userForm">
                                        <i class="bx bx-show"></i>
                                    </button>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                            <i class="bx bx-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @if ($users->isEmpty())
                            <tr>
                                <td colspan="6" class="text-center">@lang('translation.No_users_found')</td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Offcanvas: Create / View User -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="userForm" aria-labelledby="userFormLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="userFormLabel">@lang('translation.Create_User')</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>@lang('translation.Name')</label>
                    <input type="text" name="name" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label>@lang('translation.Email')</label>
                    <input type="email" name="email" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label>@lang('translation.Password')</label>
                    <input type="password" name="password" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label>@lang('translation.Role')</label>
                    <select name="role" class="form-select">
                        @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">@lang('translation.Save')</button>
                </div>
            </form>
        </div>
    </div>

@endsection
