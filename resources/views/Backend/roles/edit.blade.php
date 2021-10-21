@extends('layouts.backend')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Opps!</strong> Something went wrong, please check below errors.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">refresh</i>
                            </div>
                            <h4 class="card-title">Edit Roles</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <span class="float-right">
                                    <a class="btn btn-success" href="{{ route('roles.index') }}">
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

                                    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'PATCH']) !!}
                                    <div class="form-group">
                                        <h4>Name:</h4>
                                        {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control']) !!}
                                    </div>
                                    <div class="form-check">
                                        <h4>Permission:</h4>
                                        <br>
                                        @foreach ($permission as $value)
                                            <label class="form-check-label col-sm-6 col-lg-3">
                                                {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, ['class' => 'form-check-input']) }}
                                                <h6>{{ $value->name }} </h6>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                        @endforeach
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
