@extends('layouts.backend')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">refresh</i>
                            </div>
                            <h4 class="card-title">Show Roles</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                @can('role-create')
                                    <span class="float-right">
                                        <a class="btn btn-success" href="{{ route('roles.index') }}">
                                            <span class="btn-label">
                                                <i class="material-icons">keyboard_arrow_left</i>
                                            </span>
                                            Back
                                            <div class="ripple-container"></div>
                                        </a>
                                    </span>
                                @endcan
                            </div>
                            <div class="card">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="nav nav-pills nav-pills-info flex-column" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="tab" href="#names"
                                                        role="tablist">
                                                        Name Roles
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#roles"
                                                        role="tablist">
                                                        Permissions
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#created"
                                                        role="tablist">
                                                        Created At
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#updated"
                                                        role="tablist">
                                                        Updated At
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="tab-content">
                                                <div class="tab-pane active show" id="names">
                                                    {{ $role->name }}
                                                </div>
                                                <div class="tab-pane" id="roles">
                                                    @if (!empty($rolePermissions))
                                                        @foreach ($rolePermissions as $permission)
                                                            <label
                                                                class="badge badge-success">{{ $permission->name }}</label>
                                                        @endforeach
                                                    @endif
                                                </div>
                                                <div class="tab-pane" id="created">
                                                    {{ \Carbon\Carbon::parse($role->created_at)->format('D, d F Y H:i:s') }}
                                                </div>
                                                <div class="tab-pane" id="updated">
                                                    {{ \Carbon\Carbon::parse($role->updated_at)->format('D, d F Y H:i:s') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end content-->
                    </div>
                    <!--  end card  -->
                </div>
            </div>
        </div>
    </div>
@endsection
