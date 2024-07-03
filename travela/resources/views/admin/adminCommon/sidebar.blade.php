<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item {{ Request::is('/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('/dashboard') }}">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/widgets/widgets.html">
          <i class="mdi mdi-book menu-icon"></i>
          <span class="menu-title">Widgets</span>
        </a>
      </li>
      <li class="nav-item nav-category {{ Request::is('/TourManage/*') ? 'active' : '' }}">Tour Managment</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <i class="menu-icon mdi mdi-floor-plan"></i>
          <span class="menu-title">Category Managment</span>
          <i class="menu-arrow"></i> 
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('/TourManage/addTourCategory')}}">Add Tour Category</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/TourManage/ViewCategories')}}">View Tour Categories</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
          <i class="menu-icon mdi mdi-arrow-down-drop-circle-outline"></i>
          <span class="menu-title">Package Managment</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-advanced">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('/TourManage/CreatePackage')}}">Add a Tour Package</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/TourManage/ViewPackages')}}">View All Packages</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category {{ Request::is('/TestimonialGuides/*') ? 'active' : '' }}">Testimonial &nbsp; and Guides</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
          <i class="menu-icon mdi mdi-card-text-outline"></i>
          <span class="menu-title">Testimonial</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="form-elements">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href="{{url('/TestimonialGuides/CreateTestimonail')}}">Add Testimonial</a></li>                
            <li class="nav-item"><a class="nav-link" href="{{url('/TestimonialGuides/ManageTestimonail')}}">Manage Testimonails</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon mdi mdi-account-circle-outline"></i>
          <span class="menu-title">Our Guides</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('/TestimonialGuides/CreateTravelGuide')}}">Add Travel Guide </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/TestimonialGuides/ManageTravelGuide')}}">Manage Travel Guides </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">pages</li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <i class="menu-icon mdi mdi-account-circle-outline"></i>
          <span class="menu-title">User Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
          <i class="menu-icon mdi mdi-stop-circle-outline"></i>
          <span class="menu-title">Error pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="error">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <i class="menu-icon mdi mdi-book-open"></i>
          <span class="menu-title">General Pages</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="general-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/profile.html"> Profile </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq.html"> FAQ </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/faq-2.html"> FAQ 2 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/news-grid.html"> News grid </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/timeline.html"> Timeline </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/search-results.html"> Search Results </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/portfolio.html"> Portfolio </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
          <i class="menu-icon mdi mdi-cart-arrow-down"></i>
          <span class="menu-title">E-commerce</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="e-commerce">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="pages/samples/invoice.html"> Invoice </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/pricing-table.html"> Pricing Table </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/orders.html"> Orders </a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item nav-category">Apps</li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/email.html">
          <i class="menu-icon mdi mdi-email-outline"></i>
          <span class="menu-title">E-mail</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/calendar.html">
          <i class="menu-icon mdi mdi-calendar"></i>
          <span class="menu-title">Calendar</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/todo.html">
          <i class="menu-icon mdi mdi-format-list-bulleted"></i>
          <span class="menu-title">Todo List</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pages/apps/gallery.html">
          <i class="menu-icon mdi mdi-file-image-outline"></i>
          <span class="menu-title">Gallery</span>
        </a>
      </li>
      <li class="nav-item nav-category">help</li>
      <li class="nav-item">
        <a class="nav-link" href="https://bootstrapdash.com/demo/star-admin2-pro/docs/documentation.html">
          <i class="menu-icon mdi mdi-file-document"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>
    </ul>
  </nav>