<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="#" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ url('/aboutus') }}" class="nav-item nav-link {{ Request::is('aboutus') ? 'active' : '' }}">About</a>
                <a href="{{ url('/packages') }}" class="nav-item nav-link {{ Request::is('packages') ? 'active' : '' }}">Packages</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('tour/*') ? 'active' : '' }}" data-bs-toggle="dropdown">Tour</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ url('tour/explore') }}" class="dropdown-item">Explore Tour</a>
                        <a href="{{ url('tour/booking') }}" class="dropdown-item">Travel Booking</a>
                        <a href="{{ url('tour/travelGuide') }}" class="dropdown-item">Travel Guides</a>
                        <a href="{{ url('tour/testimonial') }}" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="{{ url('/contactus') }}" class="nav-item nav-link {{ Request::is('contactus') ? 'active' : '' }}">Contact</a>
            </div>
            <a href="{{ url('tour/booking') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a>
        </div>
    </nav>
</div>