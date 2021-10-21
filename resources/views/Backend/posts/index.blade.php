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
                            <h4 class="card-title">{{ __('Posts') }}</h4>
                        </div>
                        <div class="card-body">
                            <div class="toolbar">
                                <a href="{{ route('posts.create') }}" class="btn btn-info">
                                    Add New Posts
                                </a>
                            </div>
                            <div class="material-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover"
                                    cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="50px">ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Date Create</th>
                                            <th>Time Create</th>
                                            <th class="disabled-sorting text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->body }}</td>
                                                <td>{{ \Carbon\Carbon::parse($post->created_at)->format('D, d F Y') }}
                                                </td>
                                                <td>{{ \Carbon\Carbon::parse($post->created_at)->format('H:i:s') }}
                                                    WIB
                                                </td>
                                                <td class="text-right">
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('posts.show', $post->id) }}">Show</a>
                                                    @can('post-edit')
                                                        <a class="btn btn-sm btn-warning"
                                                            href="{{ route('posts.edit', $post->id) }}">Edit</a>
                                                    @endcan
                                                    @can('post-delete')
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id], 'style' => 'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                                                        {!! Form::close() !!}
                                                    @endcan
                                                </td>
                                                {{-- <td class="text-right">
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
                                                </td> --}}
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
