<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="{{ url('/') }}">
			<h3 class="text-muted">Bakery Shop</h3>
			</a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown {{ (request()->segment(1) == 'shop') ? 'active' : '' }}">
                  <a href="{{ url('shop/all') }}">Shop</a>
                </li>
                <li class="dropdown {{ (request()->segment(1) == 'about-us') ? 'active' : '' }}">
                  <a href="{{ url('about-us') }}">About Us</a>
                </li>
                <li class="dropdown {{ (request()->segment(1) == 'store-locations') ? 'active' : '' }}">
                  <a href="#">Store Locations</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>