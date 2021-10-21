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
                            <h4 class="card-title">Create New User</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <span class="float-right">
                                    <a class="btn btn-default" href="{{ route('users.index') }}">
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
                                    
                                    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        {!! Form::text('email', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>Password:</strong>
                                        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>Confirm Password:</strong>
                                        {!! Form::password('password_confirmation', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-group">
                                        <strong>Role:</strong>
                                        {!! Form::select('roles[]', $roles, [], ['class' => 'form-control']) !!}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    {!! Form::close() !!}
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
