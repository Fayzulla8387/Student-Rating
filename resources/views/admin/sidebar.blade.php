<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Student</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('dashboard') }}" class="d-block">Admin</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{ route('leaderboard') }}"
                       class="nav-link @if(request()->routeIs('leaderboard')) active @endif ">
                        <i class="fa fa-users nav-icon"></i>
                        <p>Leaderboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile.edit') }}"
                       class="nav-link @if(request()->routeIs('profile.edit')) active @endif ">
                        <i class="fa fa-users nav-icon"></i>
                        <p>Profile</p>
                    </a>
                </li>
                @if(\Illuminate\Support\Facades\Auth::user()->role == 'student')
                    <li class="nav-item">
                        <a href="{{ route('stipendiya.index') }}"
                           class="nav-link @if(request()->routeIs('stipendiya.index')) active @endif ">
                            <i class="fa fa-users nav-icon"></i>
                            <p>Stipendiya</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('maqola.index') }}"
                           class="nav-link @if(request()->routeIs('maqola.index')) active @endif ">
                            <i class="fa fa-users nav-icon"></i>
                            <p>Maqolalar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('projects.index') }}"
                           class="nav-link @if(request()->routeIs('projects.index')) active @endif ">
                            <i class="fa fa-users nav-icon"></i>
                            <p>Proyektlar</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('certificate.index') }}"
                           class="nav-link @if(request()->routeIs('certificate.index')) active @endif ">
                            <i class="fa fa-users nav-icon"></i>
                            <p>Sertifikatlar</p>
                        </a>
                    </li>
                @endif
                @if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a href="{{ route('groups.index') }}"
                           class="nav-link @if(request()->routeIs('groups.index')) active @endif ">
                            <i class="fa fa-users nav-icon"></i>
                            <p>Guruhlar</p>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a href="{{ route('logout') }}"
                           class="nav-link" onclick="event.preventDefault();
                           this.closest('form').submit();">
                            <i class="fa fa-sign-out-alt nav-icon"></i>
                            <p>Log Out</p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
