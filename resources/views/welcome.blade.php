

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technical-Unit</title>

    <!-- Primary Meta Tags -->
<meta name="title" content="Play - Free Open Source HTML Bootstrap Template by UIdeck">
<meta name="description" content="Play - Free Open Source HTML Bootstrap Template by UIdeck Team">


    <!--====== Favicon Icon ======-->
    <link
      rel="shortcut icon"
      href="{{ URL::asset('frontend-assets/images/favicon.svg') }}"
      type="image/svg"
    />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="{{ URL::asset('frontend-assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend-assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend-assets/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('frontend-assets/css/ud-styles.css') }}" />
  </head>
  <body>
    <!-- ====== Header Start ====== -->
    <header class="ud-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="index.html">
                <img src="{{ URL::asset('frontend-assets/images/logo/logo.png') }}" alt="Logo" />
              </a>
              <button class="navbar-toggler">
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
                <span class="toggler-icon"> </span>
              </button>

              <div class="navbar-collapse">
                <ul id="nav" class="navbar-nav mx-auto">
                  <!-- <li class="nav-item">
                    <a class="ud-menu-scroll" href="#home">Home</a>
                  </li>

                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#pricing">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#team">Team</a>
                  </li>
                  <li class="nav-item">
                    <a class="ud-menu-scroll" href="#contact">Contact</a>
                  </li>
                  <li class="nav-item nav-item-has-children">
                    <a href="javascript:void(0)"> Pages </a>
                    <ul class="ud-submenu">
                      <li class="ud-submenu-item">
                        <a href="about.html" class="ud-submenu-link">
                          About Page
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="pricing.html" class="ud-submenu-link">
                          Pricing Page
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="contact.html" class="ud-submenu-link">
                          Contact Page
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="blog.html" class="ud-submenu-link">
                          Blog Grid Page
                        </a>
                      </li>
                      <li class="ud-submenu-item">
                        <a href="blog-details.html" class="ud-submenu-link">
                          Blog Details Page
                        </a>
                      </li> -->
                      <li class="ud-submenu-item">
                        <a href="{{ route('login') }}" class="ud-submenu-link">
                         Admin-Login
                        </a>
                      </li>
                      <!-- <li class="ud-submenu-item">
                        <a href="404.html" class="ud-submenu-link">404 Page</a>
                      </li> -->
                    </ul>
                  </li>
                </ul>
              </div>

              <!-- <div class="navbar-btn d-none d-sm-inline-block">
                <a href="login.html" class="ud-main-btn ud-login-btn">
                  Sign In
                </a>
                <a class="ud-main-btn ud-white-btn" href="javascript:void(0)">
                  Sign Up
                </a>
              </div> -->
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ====== Header End ====== -->

    <!-- ====== Hero Start ====== -->
    <section class="ud-hero" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="ud-hero-content wow fadeInUp" data-wow-delay=".2s">
              <h1 class="ud-hero-title">
                Welcome to Technical Unit 
              </h1>
              <p class="ud-hero-desc">
               
              </p>
         
            </div>
            <div
              class="ud-hero-brands-wrapper wow fadeInUp"
              data-wow-delay=".3s"
            >
              
            </div>
            <div class="ud-hero-image wow fadeInUp" data-wow-delay=".25s">
              <img src="{{ URL::asset('frontend-assets/images/hero/hero-image.svg') }}" alt="hero-image" />
              <img
                src="{{ URL::asset('frontend-assets/images/hero/dotted-shape.svg') }}"
                alt="shape"
                class="shape shape-1"
              />
              <img
                src="{{ URL::asset('frontend-assets/images/hero/dotted-shape.svg') }}"
                alt="shape"
                class="shape shape-2"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ====== Hero End ====== -->


    <!-- ====== Back To Top Start ====== -->
    <!-- <a href="javascript:void(0)" class="back-to-top">
      <i class="lni lni-chevron-up"> </i>
    </a> -->
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="{{ URL::asset('frontend-assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('frontend-assets/js/wow.min.js') }}"></script>
    <script src="{{ URL::asset('frontend-assets/js/main.js') }}"></script>
    <script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".ud-menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".ud-menu-scroll");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".ud-menu-scroll")
              .classList.remove("active");
            currLink.classList.add("active");
          } else {
            currLink.classList.remove("active");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);
    </script>
  </body>
</html>
