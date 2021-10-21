<div class="sidebar" data-color="azure" data-background-color="black"
    data-image="{{ asset('backend/assets/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="#" class="simple-text logo-mini">RH</a>
        <a href="#" class="simple-text logo-normal">{{ config('app.name', 'Laravel') }} Panel</a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('backend/assets/img/faces/avatar.jpg') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{ Auth::user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li> --}}
                        <li class="nav-item">

                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="sidebar-mini"> L </span>
                                <span class="sidebar-normal"> {{ __('Logout') }} </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href=" ">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            @guest
                @can('post-list')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">
                            <i class="material-icons">attach_file</i>
                            <p> Posts </p>
                        </a>
                    </li>
                @endcan
                @can('about-list')
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('abouts.index') }}">
                            <i class="material-icons">notes</i>
                            <p> About Us </p>
                        </a>
                    </li>
                @endcan
            @else
                <li class="nav-item ">
                    @can('user-list')
                    <a class="nav-link" data-toggle="collapse" href="#User">
                        <i class="material-icons">image</i>
                        <p>User Management<b class="caret"></b></p>
                    </a>
                    @endcan
                    <div class="collapse" id="User">
                        <ul class="nav">
                            @can('user-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('users.index') }}">
                                        <span class="sidebar-mini"> U </span>
                                        <span class="sidebar-normal"> Users </span>
                                    </a>
                                </li>
                            @endcan
                            @can('role-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('roles.index') }}">
                                        <span class="sidebar-mini"> R </span>
                                        <span class="sidebar-normal"> Roles </span>
                                    </a>
                                </li>
                            @endcan
                            @can('permission-list')
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('permissions.index') }}">
                                        <span class="sidebar-mini"> P </span>
                                        <span class="sidebar-normal"> Permissions </span>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </div>
                </li>
                @can('post-list')
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">
                            <i class="material-icons">attach_file</i>
                            <p> Posts </p>
                        </a>
                    </li>
                @endcan
                @can('about-list')
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('abouts.index') }}">
                            <i class="material-icons">notes</i>
                            <p> About Us </p>
                        </a>
                    </li>
                @endcan
            @endguest
        </ul>
    </div>
</div>



{{-- <ul class="navbar-nav ml-auto">
@guest
@if (Route::has('login'))
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@endif
@if (Route::has('register'))
<li class="nav-item">
<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
</li>
@endif
@else
@can('user-list')
<li><a class="nav-link" href="{{ route('users.index') }}">Users</a></li>
@endcan
@can('role-list')
<li><a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
@endcan
@can('permission-list')
<li><a class="nav-link" href="{{ route('permissions.index') }}">Permission</a></li>
@endcan
@can('post-list')
<li><a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
@endcan


<li class="nav-item dropdown">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
aria-haspopup="true" aria-expanded="false" v-pre>
{{ Auth::user()->name }}
</a>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
{{ __('Logout') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
@csrf
</form>
</div>
</li>
@endguest
</ul> --}}
