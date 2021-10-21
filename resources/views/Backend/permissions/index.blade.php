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
                            <h4 class="card-title">{{ __('Permissions') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <a href="{{ route('permissions.create') }}" class="btn btn-info">
                                    Add New Permission
                                </a>
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="50px">ID</th>
                                            <th>Permissions Name</th>
                                            <th>Date Create</th>
                                            <th>Time Create</th>
                                            <th class="disabled-sorting text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $permission)
                                            <tr>
                                                <td>{{ $permission->id }}</td>
                                                <td>{{ $permission->name }}</td>
                                                <td>{{ \Carbon\Carbon::parse($permission->created_at)->format('D, d F Y') }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($permission->created_at)->format('H:i:s') }}
                                                    WIB
                                                </td>
                                                <td class="text-right">
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('permissions.show', $permission->id) }}">Show
                                                    </a>
                                                    @can('role-edit')
                                                        <a class="btn btn-sm btn-warning"
                                                            href="{{ route('permissions.edit', $permission->id) }}">Edit
                                                        </a>
                                                    @endcan
                                                    @can('role-delete')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                                        {!! Form::close() !!}
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $data->appends($_GET)->links() }}
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
