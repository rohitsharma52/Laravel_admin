<!DOCTYPE html>
<html lang="en">

  
<head>
    <title>Rohit admin</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective."
    />
    <meta name="author" content="RohitDeveloper" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="https://html.phoenixcoded.net/light-able/bootstrap/assets/images/favicon.svg" type="image/x-icon" />

    <!-- map-vector css -->
    <link rel="stylesheet" href="{{asset('admin/css/plugins/jsvectormap.min.css')}}">
    <!-- [Google Font : Public Sans] icon -->
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('admin/fonts/tabler-icons.min.css')}}" >
    <link rel="stylesheet" href="{{asset('admin/fonts/feather.css')}}" >
    <link rel="stylesheet" href="{{asset('admin/fonts/fontawesome.css')}}" >
    <link rel="stylesheet" href="{{asset('admin/fonts/material.css')}}" >
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}" >
    <link rel="stylesheet" href="{{asset('admin/css/style-preset.css')}}" >

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
  
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="{{asset('admin/images/user/logo_1.png')}}"width="130px"height="130px"class="rounded-circle">
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-gauge"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
            <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
          </a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="index.html">Analytics</a></li>
            
          </ul>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="/front/index" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-gauge"></i>  
              {{-- this is main icon --}}
            </span>
            <span class="pc-mtext">View site</span>
            <span class="pc-arrow"></span>
          </a>
          
        </li>
        <!-- ////////////////////////dyamic slider/////////////////////////////// -->
        @php use App\Models\Slider;
        $slider_data=Slider::get();
        @endphp
       @foreach($slider_data as $s_data)
       <li class="pc-item pc-hasmenu">
           <a href="#!" class="pc-link">
               <span class="pc-micon">
               </span>
               <span class="pc-mtext">{{ $s_data->name }}</span>
               <span class="pc-arrow"><i data-feather="chevron-right"></i></span>
           </a>
           <ul class="pc-submenu">
               @if(!empty($s_data->nav_1) && !empty($s_data->nav_1_link))
                   <li class="pc-item">
                       <a class="pc-link" href="{{route($s_data->nav_1_link) }}">{{ $s_data->nav_1 }}</a>
                   </li>
               @endif
               @if(!empty($s_data->nav_2) && !empty($s_data->nav_2_link))
                   <li class="pc-item">
                       <a class="pc-link" href="{{route($s_data->nav_2_link) }}">{{ $s_data->nav_2 }}</a>
                   </li>
               @endif
           </ul>
       </li>
   @endforeach
 {{-- ///////////////////////////dyanmic slider end here/////////////////////////////////    --}}
    
    </div>
    <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="/<%=currentUser.imagePath%>" alt="user-image" class="user-avtar wid-45 rounded-circle" />
            <span><span>
            
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0"></h6>
                    <small>Administrator</small>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="btn btn-icon btn-link-secondary avtar">
                      <i class="ph-duotone ph-windows-logo"></i>    
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li>
                    <a class="pc-user-links" href="{{route('add_view_slider')}}">
                      <i class="ph-duotone ph-user"></i>
                      <span>Add Slider</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-gear"></i>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links">
                      <i class="ph-duotone ph-lock-key"></i>
                      <span>Lock Screen</span>
                    </a>
                    </li>
                  <li>
                    <a class="pc-user-links"href="/logout">
                      <i class="ph-duotone ph-power"></i>
                      <span>Logout</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->
 <!-- [ Header Topbar ] start -->
<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
<div class="me-auto pc-mob-drp">
  <ul class="list-unstyled">
    <!-- ======= Menu collapse Icon ===== -->
    <li class="pc-h-item pc-sidebar-collapse">
      <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="pc-h-item pc-sidebar-popup">
      <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
        <i class="ti ti-menu-2"></i>
      </a>
    </li>
    <li class="dropdown pc-h-item d-inline-flex d-md-none">
      <a class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-magnifying-glass"></i>
      </a>
      <div class="dropdown-menu pc-h-dropdown drp-search">
        <form class="px-3">
          <div class="mb-0 d-flex align-items-center">
            <input type="search" class="form-control border-0 shadow-none" placeholder="Search..." />
            <button class="btn btn-light-secondary btn-search">Search</button>
          </div>
        </form>
      </div>
    </li>
    <li class="pc-h-item d-none d-md-inline-flex">
      <form class="form-search">
        <i class="ph-duotone ph-magnifying-glass icon-search"></i>
        <input type="search" class="form-control" placeholder="Search..." />

        <button class="btn btn-search" style="padding: 0"><kbd>ctrl+k</kbd></button>
      </form>
    </li>
  </ul>
</div>
<!-- [Mobile Media Block end] -->
<div class="ms-auto">
  <ul class="list-unstyled">
    
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i class="ph-duotone ph-sun-dim"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i class="ph-duotone ph-moon"></i>
          <span>Dark</span>
        </a>
       
       
      </div>
    </li>
  </ul>
</div> </div>
</header>