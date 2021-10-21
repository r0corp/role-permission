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
                            <h4 class="card-title">{{ __('Users') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <a href="{{ route('users.create') }}" class="btn bg-info">Add New User</a>
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="50px">ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>Date Create</th>
                                            <th>Time Create</th>
                                            <th class="disabled-sorting text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if (!empty($user->getRoleNames()))
                                                        @foreach ($user->getRoleNames() as $val)
                                                            <div class="bootstrap-tagsinput info-badge">
                                                                <span class="tag badge">{{ $val }}</span>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('D, d F Y') }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($user->created_at)->format('H:i:s') }}
                                                    WIB
                                                </td>
                                                <td class="text-right">
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('users.show', $user->id) }}">Show</a>
                                                    @can('user-edit')
                                                        <a class="btn btn-sm btn-warning"
                                                            href="{{ route('users.edit', $user->id) }}">Edit</a>
                                                    @endcan
                                                    @can('user-delete')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                                        {!! Form::close() !!}
                                                    @endcan
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $data->render() }}
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
