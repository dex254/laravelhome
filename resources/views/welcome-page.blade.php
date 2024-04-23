<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{URL::to('img/k-housing-favicon.png')}}">
  <link rel="icon" type="image/png" href="{{URL::to('img/k-housing-favicon.png')}}">
  <title>
    @yield('headTitle') K-HOUSING
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{URL::to('css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{URL::to('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Bootstrap Carousel -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/0378161b2b.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/e4f36ce664.js" crossorigin="anonymous"></script>
  <link href="{{URL::to('css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{URL::to('css/soft-ui-dashboard.css?v=1.0.6')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{URL::to('css/custom.css')}}">
  <link rel="stylesheet" href="{{URL::to('css/welcome.css')}}">
  @livewireStyles
</head>

<body class="g-sidenav-show  bg-gray-100">
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg bg-white px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">K-HOUSING</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Home</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">@yield('pageTitle')</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">

          </div>
          <ul class="navbar-nav  justify-content-end">

            <li class="nav-item d-flex align-items-center">


              <span class="d-sm-inline d-none">Welcome @yield('user')</span>

            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
    <div class="section" id="sec">
      <div class="section" id="section1" background="C:\xampp\htdocs\K-HOUSING\source\K-Housing\public\img\home-decor-1">
        <h1 class="text-center">K-HOUSING</h1>
        <p class="text-center text-dark">Our Real Estate Application serves as a comprehensive platform designed to streamline the process of property rental, lease, and search for both landlords and home seekers. With intuitive features and user-friendly interfaces, our application aims to facilitate seamless interactions between landlords offering properties and individuals or families seeking their ideal homes.</p>
      </div>
      <div class="section" id="section2">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <p class="text-center text-dark">Landlords can create detailed listings for their properties, including descriptions, amenities, rental terms, and high-quality images.
                Home seekers can explore a wide range of properties based on their preferences, location, budget, and specific requirements.</p>
            </div>
            <div class="carousel-item">
              <p class="text-center text-dark">Users can refine their property search using filters such as location, price range, property type, number of bedrooms, and amenities.
                Advanced search options enable users to find properties that match their exact criteria and preferences.</p>
            </div>
            <div class="carousel-item">
              <p class="text-center text-dark">Integrated maps provide users with a visual representation of available properties in their desired locations.
                Users can explore neighborhoods, view nearby amenities, schools, transportation links, and assess the surrounding environment.</p>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="false"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="section" id="section3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

        </div>
      </div>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        @yield('content')
        {{$slot ?? ''}}
        <footer class="footer pt-3  ">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                  K-HOUSING © <script>
                    document.write(new Date().getFullYear())
                  </script>
                </div>
              </div>
              <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">K-HOUSING Configurator</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>

      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{URL::to('/js/core/popper.min.js')}}"></script>
  <script src="{{URL::to('js/core/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{URL::to('js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{URL::to('js/plugins/chartjs.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{URL::to('js/soft-ui-dashboard.min.js?v=1.0.6')}}"></script>
  <script src="{{URL::to('js/app.js')}}"></script>
  @yield('scripts')
  @livewireScripts
</body>

</html>