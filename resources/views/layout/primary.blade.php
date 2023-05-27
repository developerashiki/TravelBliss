<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>TravelBliss International</title>

  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

  <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet" />

  <link href="{{ asset('assets/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet" />
</head>

<body id="section_1">
  <header class="site-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-12 d-flex flex-wrap">
          <p class="d-flex me-4 mb-0">
            <i class="bi-envelope me-2"></i>
            ceo@travelblissinternational.com
          </p>

          <p class="d-flex mb-0">
            <i class="bi bi-telephone-inbound"></i>

            <a href="#" class="phone"> +8801873171717</a> 
          </p>

          <p class="d-flex mb-0 ml-2">
            <span class="bi bi-alarm"></span>
            <a href="#" class="clock"> 10am-6pm </a>
          </p>
        </div>

        <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
          <ul class="social-icon">
            <li class="social-icon-item">
              <a href="#" class="social-icon-link bi-twitter"></a>
            </li>

            <li class="social-icon-item">
              <a href="#" class="social-icon-link bi-facebook"></a>
            </li>

            <li class="social-icon-item">
              <a href="#" class="social-icon-link bi-instagram"></a>
            </li>

            <li class="social-icon-item">
              <a href="#" class="social-icon-link bi-youtube"></a>
            </li>

            <li class="social-icon-item">
              <a href="#" class="social-icon-link bi-whatsapp"></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('assets/images/travelbliss.png') }}" class="logo img-fluid" alt="Kind Heart Charity" />
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link click-scroll" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us
            </a>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('ceo') }}">Founder & CEO</a></li>

              <li><a class="dropdown-item" href="{{ route('refund') }}">Refund & Return Policy</a></li>
              <li><a class="dropdown-item" href="{{ route('condition') }}">Terms & Condition</a></li>
              <li><a class="dropdown-item" href="{{ route('pay') }}">Pay Us</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link click-scroll dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services
            </a>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
              <li><a class="dropdown-item" href="{{ route('air_ticket') }}">Air Ticket</a></li>
              <li><a class="dropdown-item" href="{{ route('rail_ticket') }}">Indian Rail Ticket</a></li>
              <li><a class="dropdown-item" href="{{ route('visa_processing') }}">Visa Processing</a></li>
              <li><a class="dropdown-item" href="{{ route('student_visa') }}">Student Visa</a></li>
              <li><a class="dropdown-item" href="{{ route('schooling_visa') }}">Schooling visa</a></li>
              <li><a class="dropdown-item" href="{{ route('umrah_visa') }}">Hajj & Umrah</a></li>
              <li><a class="dropdown-item" href="{{ route('hotel_booking') }}">Hotel Booking</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link click-scroll" href="{{ route('gallary') }}">Gallary</a>
          </li>
          <li class="nav-item">
            <a class="nav-link click-scroll" href="{{ route('blog') }}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link click-scroll" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  @yield('page_body')
  <!-- Footer -->

  <footer class="text-center text-lg-start text-gray">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 63px">
            <img src="{{ asset('assets/images/travelbliss.png') }}" height="60" alt="" loading="lazy" />
          </div>

          <p class="text-center">The company provides direct access to one of the broadest selections of travel products services through its user friendly Web site and serving many different consumer segments.
          </p>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="px-2" href="#!">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="px-2" href="#!">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="ps-2" href="#!">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="mb-3">Services</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="{{ route('student_visa') }}">Student Visa</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('schooling_visa') }}">Schooling Visa</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('visa_processing') }}">Visa Processing</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('umrah_visa') }}">Hajj & Umrah Visa</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('rail_ticket') }}">Air Ticket</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('hotel_booking') }}">Hotel Booking</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="mb-3">Quick Link</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('gallary') }}">Gallary</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('umrah_visa') }}">Umrah Visa</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('student_visa') }}">Student Visa</a>
            </li>
            <li class="mb-2">
              <a href="{{ route('contact') }}">Contact</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="mb-3">Contact</h5>

          <ul class="list-unstyled">
            <li>
              <p class="d-flex mb-2">
                <i class="bi-geo-alt me-2"></i>
                TravelBliss International, M M Complex(4th Floor), Mirpur Saree Egaro Bus Stand, Pallabi, Dhaka-1216.
                
              </p>
            </li>
            <li>
              <p class="d-flex mb-2">
                <i class="bi bi-telephone-inbound me-2"></i>
                +880258051136
              </p>
            </li>
            <p class="d-flex mb-2">
              <i class="bi-telephone me-2"></i>
              +8801617220000
            </p>
            <p class="d-flex mb-2">
              <i class="bi-envelope me-2"></i>
              ceo@travelblissinternational.com
            </p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © Copyright - 2023 TravelBliss International. Powered by Ashik
    </div>
    <!-- Copyright -->
  </footer>
  <!-- End of .container -->
  <!-- Footer -->
  <!-- JAVASCRIPT FILES -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/js/click-scroll.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>