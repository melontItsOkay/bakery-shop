<div class="span3 bs-docs-sidebar">
    <ul class="nav nav-list bs-docs-sidenav">
        <li class="{{ (request()->segment(1) == 'my-account') ? 'active' : '' }}"><a href="{{ url('my-account') }}"><i class="icon-chevron-right"></i> My Profile</a>
        </li>
        <li class="{{ (request()->segment(1) == 'my-order') ? 'active' : '' }}"><a href="{{ url('my-order') }}"><i class="icon-chevron-right"></i> Order History</a></li>
        <li><a href="{{ url('logout') }}"><i class="icon-chevron-right"></i> Logout</a></li>
    </ul>
</div>