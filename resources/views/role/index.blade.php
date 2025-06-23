@extends('layouts.master')

@section('title') @lang('translation.Roles_List') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') @lang('translation.User_Management') @endslot
        @slot('title') @lang('translation.Roles_List') @endslot
    @endcomponent

    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-sm-6">
                <h4 class="page-title">@lang('translation.Roles_List')</h4>
            </div>
            <div class="col-sm-6 text-end">
                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#roleForm">
                    <i class="bx bx-plus me-1"></i> @lang('translation.Add_Role')
                </button>
            </div>
        </div>

        <!-- Roles Table -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>@lang('translation.Role_Name')</th>
                        <th>@lang('translation.Permissions')</th>
                        <th class="text-center">@lang('translation.Actions')</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($roles as $index => $role)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $role->name }}</td>
                            <td>
                                @foreach($role->permissions as $permission)
                                    <span class="badge bg-info m-1">{{ $permission->name }}</span>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info edit-role-btn"
                                        data-id="{{ $role->id }}"
                                        data-name="{{ $role->name }}"
                                        data-permissions="{{ $role->permissions->pluck('id') }}">
                                    <i class="bx bx-edit"></i>
                                </button>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this role?')">
                                        <i class="bx bx-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-center">@lang('translation.No_roles_found')</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Offcanvas Form -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="roleForm" aria-labelledby="roleFormLabel">
        <div class="offcanvas-header">
            <h5 id="roleFormLabel">@lang('translation.Create_Role')</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <form method="POST" action="{{ route('roles.store') }}">
                @csrf
                <input type="hidden" name="id" id="role_id">

                <div class="mb-3">
                    <label for="name" class="form-label">@lang('translation.Role_Name')</label>
                    <input type="text" class="form-control" name="name" id="role_name" required>
                </div>

                <div class="mb-3">
                    <label for="permissions">@lang('translation.Permissions')</label>
                    <div class="form-check">
                        @foreach($permissions as $permission)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox"
                                       name="permissions[]" value="{{ $permission->id }}"
                                       id="perm_{{ $permission->id }}">
                                <label class="form-check-label" for="perm_{{ $permission->id }}">
                                    {{ $permission->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-success">@lang('translation.Save')</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>
        document.querySelectorAll('.edit-role-btn').forEach(btn => {
            btn.addEventListener('click', function () {
                const id = this.dataset.id;
                const name = this.dataset.name;
                const permissions = JSON.parse(this.dataset.permissions.replaceAll('&quot;', '"'));

                document.getElementById('role_id').value = id;
                document.getElementById('role_name').value = name;

                // Clear all checkboxes first
                document.querySelectorAll('#roleForm input[type="checkbox"]').forEach(el => el.checked = false);

                // Check assigned permissions
                permissions.forEach(id => {
                    const checkbox = document.getElementById('perm_' + id);
                    if (checkbox) checkbox.checked = true;
                });

                const offcanvas = new bootstrap.Offcanvas(document.getElementById('roleForm'));
                offcanvas.show();
            });
        });
    </script>
@endsection
