<ul class="nav navbar-nav navbar-right collapse navbar-collapse">
    <!--
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">Account Information</a></li>
            <li><a href="#">Change Password</a></li>
        </ul>
    </li>
    -->
    <li>
        <a href="{{ route('home') }}">Site Home</a>
    </li>
    <li>
        <a href="{{ route('admin.testimonials') }}">Testimonials Manager</a>
    </li>
    <p class="navbar-text">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }} <span class="font-sm">(<a href="{{ route('logout') }}">Log Out</a>)</span></p>
</ul>
