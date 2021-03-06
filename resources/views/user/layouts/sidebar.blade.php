<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile"
             style="background: url({{ asset('assets/admin/images/background/user-info.jpg')}}">
            <!-- User profile image -->
            <div class="profile-img"><img src="{{ asset('images/'.Auth::user()->image) }}" alt="user" />
            </div>
            <!-- User profile text-->
            <div class="profile-text"><a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown"
                                         role="button" aria-haspopup="true"
                                         aria-expanded="true">{{ Auth::user()->first_name . " " . Auth::user()->last_name }}</a>
                <div class="dropdown-menu animated flipInY">
                    <a href="{{ route('profile') }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <a href="{{ route('inbox') }}" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('password.request') }}" class="dropdown-item"><i class="ti-settings"></i> Reset
                        Password</a>
                    <div class="dropdown-divider"></div>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"
                       class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>

                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">PERSONAL</li>
                <li><a class="waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false"><i
                            class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a></li>
                <li><a class="waves-effect waves-dark" href="{{ route('order.index') }}" aria-expanded="false"><i
                            class="mdi mdi-gift"></i><span class="hide-menu">My Orders </span></a></li>
                @if(\Illuminate\Support\Facades\Auth::user()->role->nickname == 'jobseeker')
                    <li><a class="waves-effect waves-dark" href="{{ route('microjob.index') }}" aria-expanded="false"><i
                                class="mdi mdi-gift"></i><span class="hide-menu">Micro Jobs</span></a>
                    </li>
                @endif

            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->
    <div class="sidebar-footer">
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item--><a href="" class="link" data-toggle="tooltip" title="Logout"><i class="mdi mdi-power"></i></a>
    </div>
    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
