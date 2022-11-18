<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Rumah Sehat</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="tex t/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="{{ route('landingpage') }}">
            <img src="images/logo.png" alt="">
            <span>
              Rumah Sehat
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('aboutpage')}}"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('obatpage') }}"> Medicine </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('buy') }}"> Online Buy </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('news') }}"> News </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
                </li>
              </ul>
              <div class="login_btn ml-0 ml-lg-4">
                {{-- <a href="login">Login</a> --}}
                    
                    <style>

                      .dropbtn {
                          color: white;
                          border: none;
                      }
                      
                      .dropdown {
                          position: relative;
                          display: inline-block;
                      }
                      
                      .dropdown-content {
                          display: none;
                          position: absolute;
                          background-color: #ffffff;
                          min-width: 78px;
                          border-radius: 5px;
                          z-index: 10;
                      }
                      
                      .dropdown-content a {
                          color: rgb(0, 0, 0);
                          padding: 12px 16px;
                          text-decoration: none;
                          display: block;
                      }
                      
                      .dropdown:hover .dropdown-content {display: block;}
                      
                      </style>
                      </head>
                      
                      <div class="dropdown">

                        <div class="dropbtn">
                          @can('isAdmin')
                        <div>
                            <button type="button" onclick="location.href='http://127.0.0.1:8000/';" class="btn btn-success btn-lg"> Admin </button>
                        </div>
                        @elsecan('isManager')
                        <div >
                            <button type="button" onclick="location.href='http://127.0.0.1:8000/';" class="btn btn-primary btn-lg"> Manager </button>
                        </div>
                        @else
                        <div >
                            <button type="button" onclick="location.href='http://127.0.0.1:8000/';" class="btn btn-info btn-lg"> User </button>
                        </div>
                        @endcan
                        </div>
                        
                      <div class="dropdown-content">
                      @if ('isUser')
                        <a href="http://127.0.0.1:8000/login">Login</a>
                      @else
                        <a href="http://127.0.0.1:8000/login">Logout</a>
                      @endif
                      </div>
                      </div>

              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <div class="img-box">
                    <img src="images/medicine.png" alt="">
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="detail-box">
                    <h1>
                      Selamat datang di <br>
                      <span>
                        Website Rumah Sehat
                      </span>

                    </h1>
                    <p>
                    </p>
                    
                    <div>
                      <a href="{{ route('buy') }}">
                        Buy Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>
  </div>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contact
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  (+0298)-1488-5347
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="images/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  rumah-Sehat@help.com
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('aboutpage') }}"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('obatpage') }}"> Medicine </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('obatpage') }}"> Online Buy </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_news">
            <h4>
              newsletter
            </h4>
            <form action="">
              <input type="text" placeholder="Enter Your email">
              <div class="d-flex justify-content-center justify-content-end mt-3">
                <button>
                  Subscribe
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info section -->

  <!-- footer section -->
  {{-- <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section> --}}
  <!-- footer section -->

  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>