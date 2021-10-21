@extends('layouts.backend')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">person</i>
                            </div>
                            <h4 class="card-title">Show User</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <span class="float-right">
                                    <a class="btn btn-success" href="{{ route('users.index') }}">
                                        <span class="btn-label">
                                            <i class="material-icons">arrow_back</i>
                                        </span>
                                        Back
                                        <div class="ripple-container"></div>
                                    </a>
                                </span>
                            </div>
                            <div class="card">
                                <div class="card-body ">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="nav nav-pills nav-pills-info flex-column" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active show" data-toggle="tab" href="#names"
                                                        role="tablist">
                                                        Name
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#emails"
                                                        role="tablist">
                                                        Email
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#passwords"
                                                        role="tablist">
                                                        Password
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
                                                    {{ $user->name }}
                                                </div>
                                                <div class="tab-pane" id="emails">
                                                    {{ $user->email }}
                                                </div>
                                                <div class="tab-pane" id="passwords">
                                                    ********
                                                </div>
                                                <div class="tab-pane" id="created">
                                                    {{ \Carbon\Carbon::parse($user->created_at)->format('D, d F Y H:i:s') }}
                                                </div>
                                                <div class="tab-pane" id="updated">
                                                    {{ \Carbon\Carbon::parse($user->updated_at)->format('D, d F Y H:i:s') }}
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
