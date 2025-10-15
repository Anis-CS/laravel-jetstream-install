@php $user = Auth::guard('web')->user(); @endphp
<section class="sidebar position-relative">
    <div class="multinav">
        <div class="multinav-scroll" style="height: 99%;">
            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
                
                <li class="@yield('dashboard')">
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="treeview">
                    <a href="#">
                        <i data-feather="users"></i>
                        <span>User Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        
                            <li class="">
                                <a href="{{ route('roles') }}">
                                    <i class="icon-Commit">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Role
                                </a>
                            </li>
                        
                            <li class="">
                                <a href="{{ route('permissions') }}">
                                    <i class="icon-Commit">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>Permission
                                </a>
                            </li>
                        
                            <li class="@yield('admin')">
                                <a href="{{ route('admin.index') }}">
                                    <i class="icon-Commit">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>All Admin
                                </a>
                            </li>
                        
                    </ul>
                </li>
            
                <li class="treeview">
                    <a href="#">
                        <i data-feather="calendar"></i>
                        <span>Booking Management</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    
                </li>
            
                <li class="treeview">
                    <a href="#">
                        <i data-feather="settings"></i>
                        <span>Settings</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @if ($user->can('settings.smtp_config'))
                            <li class="@yield('settings.message-service')">
                                <a href="{{ route('settings.message-service') }}">
                                    <i class="icon-Settings"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    Message Service
                                </a>
                            </li>
                        @endif
                        
                            <li class="">
                                <a href="{{ route('settings.smtp-config') }}">
                                    <i class="icon-Settings"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    SMTP Configuration
                                </a>
                            </li>
                        
                    
                            <li class="">
                                <a href="{{ route('settings.vts-config') }}">
                                    <i class="icon-Settings"><span class="path1"></span><span
                                            class="path2"></span></i>
                                    VTS Configuration
                                </a>
                            </li>
                    
                            {{-- <li class="@yield('settings.log-viewer')">
                                <a href="{{ route('log-viewer.index') }}">
                                    <i class="icon-Settings"><span class="path1"></span><span class="path2"></span></i>
                                    Log Viewer
                                </a>
                            </li> --}}
                        
                    </ul>
                </li>
               
            </ul>
        </div>
    </div>
</section>
