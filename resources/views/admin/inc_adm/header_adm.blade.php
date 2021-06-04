<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars" style="display: block;"></a>
            <a class="navbar-brand" href="{{ asset('admin/index') }}">Food Delivery Management</a>
            <a class="navbar-brand" href="{{ asset('index') }}">Public</a>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                
                <div class="email">{{ Auth::user()->email }}</div>
                <div class="name">{{ Auth::user()->name }}</div>
                
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}<i class="material-icons">input</i></a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="">
                    <a href="{{ asset('/admin/index') }}">
                        <i class="material-icons">home</i>
                        <span>Home</span>
                    </a>
                    <a href="{{ asset('/admin/categories') }}">
                        <i class="material-icons">list</i>
                        <span>Categories</span>
                    </a>
                    <a href="{{ asset('/admin/products') }}">
                        <i class="material-icons">book</i>
                        <span>Products</span>
                    </a>
                    <a href="{{ asset('/admin/orders') }}">
                        <i class="material-icons">check</i>
                        <span>Orders</span>
                    </a>
                    
                </li>

            </ul>
        </div>
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2021 <a href="{{ asset('index') }}">Food delivery</a>
            </div>

        </div>
        <!-- #Footer -->
    </aside>

</section>