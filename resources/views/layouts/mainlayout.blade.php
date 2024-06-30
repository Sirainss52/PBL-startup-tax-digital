<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="@yield('title')">
  <meta name="description" content="">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="css/nicepage.css" media="screen">
  <link rel="stylesheet" href="css/@yield('title').css" media="screen">
  <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
  <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
  <script class="u-script" type="text/javascript" src="{{ asset('js/detail.js') }}" defer=""></script>
  <script src="https://unpkg.com/feather-icons"></script>
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "logo": "/images/second.png",
      "sameAs": []
    }
  </script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="@yield('title')">
  <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>


<body data-path-to-root="/" data-include-products="true" class="u-body u-xl-mode" data-lang="en">
  <header class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-header u-section-row-container" id="sec-e1e5" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="">
    <div class="u-section-rows">
      <div class="u-custom-color-2 u-section-row u-section-row-1" id="sec-aa01">
        <div class="u-clearfix u-sheet u-sheet-1">
          <form action="#" method="get" class="u-align-center-sm u-align-center-xs u-border-1 u-border-grey-30 u-search u-search-left u-white u-search-1">
            <button class="u-search-button" type="submit">
              <span class="u-search-icon u-spacing-10">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966">
                  <use xlink:href="#svg-338b"></use>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-338b" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background: new 0 0 56.966 56.966" xml:space="preserve" class="u-svg-content">
                  <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                </svg>
              </span>
            </button>
            <input class="u-search-input" type="search" name="search" value="" placeholder="Search" />
          </form>
          <a href="{{ url('/login') }}" class="u-btn u-btn-round u-button-style u-custom-color-4 u-hover-custom-color-1 u-radius u-btn-1">Login
          </a>
          <a href="{{ url('/register') }}" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-4 u-hover-white u-radius u-btn-2">register
          </a>
        </div>
      </div>
      <div class="u-box-shadow u-section-row u-section-row-2" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-5a4a">
        <div class="u-clearfix u-sheet u-valign-middle-sm u-valign-middle-xs u-sheet-2">
          <a href="#" class="u-image u-logo u-image-1" data-image-width="616" data-image-height="405">
            <img src="/images/second.png" class="u-logo-image u-logo-image-1" data-image-width="80" />
          </a>
          <nav data-position="" class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700">
              <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 6px 0px; font-size: calc(1em + 12px)">
                <svg class="u-svg-link" viewBox="0 0 24 24">
                  <use xlink:href="#menu-hamburger"></use>
                </svg>
                <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                  <g>
                    <rect y="1" width="16" height="2"></rect>
                    <rect y="7" width="16" height="2"></rect>
                    <rect y="13" width="16" height="2"></rect>
                  </g>
                </svg>
              </a>
            </div>
            <div class="u-custom-menu u-nav-container">
              <ul class="u-nav u-unstyled u-nav-1">
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/') }}" style="padding: 10px 14px">Home</a>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/About') }}" style="padding: 10px 14px">About</a>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Contact') }}" style="padding: 10px 14px">Contact</a>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Konsultasi') }}" style="padding: 10px 14px">Konsultasi</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2">
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Riset') }}" style="padding: 10px 14px">Riset</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Publikasi') }}" style="padding: 10px 14px">Publikasi</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-4">
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Akademi') }}" style="padding: 10px 14px">Akademi</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5">
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="u-nav-item">
                  <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Berita') }}" style="padding: 10px 30px 10px 14px">Berita</a>
                  <div class="u-nav-popup">
                    <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6">
                      <li class="u-nav-item">
                        <a href="{{ url ('Tag')}}" class="u-button-style u-nav-link u-white">categori/tag</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                      <li class="u-nav-item">
                        <a class="u-button-style u-nav-link u-white">new page</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
              <div class="u-white u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                <div class="u-inner-container-layout u-sidenav-overflow">
                  <div class="u-menu-close"></div>
                  <ul class="u-align-left u-nav u-popupmenu-items u-unstyled u-nav-7">
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/About') }}">About</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Contact') }}">Contact</a>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Konsultasi') }}">Konsultasi</a>
                      <div class="u-nav-popup">
                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-8">
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Riset') }}">Riset</a>
                      <div class="u-nav-popup">
                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-9">
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Publikasi') }}">Publikasi</a>
                      <div class="u-nav-popup">
                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-10">
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Akademi') }}">Akademi</a>
                      <div class="u-nav-popup">
                        <ul class="u-h-spacing-10 u-nav u-unstyled u-v-spacing-10 u-nav-11">
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="u-nav-item">
                      <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="{{ url('/Berita') }}">Berita</a>
                      <div class="u-nav-popup">
                        <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-12">
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                          <li class="u-nav-item">
                            <a class="u-button-style u-nav-link">new page</a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  @yield('content')
  <footer class="u-align-center-sm u-align-center-xs u-border-3 u-border-black u-border-no-bottom u-border-no-left u-border-no-right u-clearfix u-custom-color-2 u-footer" id="sec-05d2">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-container-align-left u-container-style u-layout-cell u-size-18 u-layout-cell-1">
              <div class="u-container-layout u-valign-top u-container-layout-1">
                <h3 class="u-align-left u-text u-text-default u-text-1">
                  Layanan
                </h3>
                <a href="#" class="u-active-none u-border-2 u-border-active-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-1">Tentang kami
                </a>
                <a href="#" class="u-active-none u-border-2 u-border-active-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-2">Konsultasi
                </a>
                <a href="#" class="u-active-none u-border-2 u-border-active-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-3">Riset
                </a>
                <a href="#" class="u-active-none u-border-2 u-border-active-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-4">Publikasi
                </a>
                <a href="#" class="u-active-none u-border-2 u-border-active-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-5">Akademi
                </a>
                <a href="#" class="u-active-none u-border-2 u-border-active-custom-color-4 u-border-hover-custom-color-4 u-border-no-left u-border-no-right u-border-no-top u-border-white u-btn u-btn-rectangle u-button-style u-hover-none u-none u-btn-6">Berita
                </a>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-24 u-layout-cell-2">
              <div class="u-border-2 u-border-no-bottom u-border-no-top u-border-white u-container-layout u-container-layout-2">
                <h3 class="u-align-center u-text u-text-default u-text-2">
                  Hubungi kami&nbsp;
                </h3>
                <p class="u-align-left u-text u-text-3">
                  Nomor&nbsp; telepon :08-xx-xx
                </p>
                <p class="u-align-left u-small-text u-text u-text-variant u-text-4">
                  Alamat : ​Jl. Ahmad Yani Batam Kota.<br />Kota Batam,
                  Kepulauan Riau, Indonesia.290461.
                </p>
              </div>
            </div>
            <div class="u-container-style u-layout-cell u-size-18 u-layout-cell-3">
              <div class="u-container-layout u-container-layout-3">
                <img class="u-align-center-sm u-align-center-xs u-image u-image-contain u-image-round u-radius u-image-1" src="/images/logos/image.ico" alt="" data-image-width="616" data-image-height="405" />
                <div class="u-align-center u-social-icons u-spacing-20 u-social-icons-1">
                  <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                        <use xlink:href="#svg-e6ca"></use>
                      </svg>
                      <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-e6ca">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
      c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path>
                      </svg>
                    </span>
                  </a>
                  <a class="u-social-url" title="twitter" target="_blank" href="">
                    <span class="u-icon u-social-icon u-social-twitter u-icon-2">
                      <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                        <use xlink:href="#svg-925a"></use>
                      </svg>
                      <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-925a">
                        <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2 c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1 c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14 c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4 c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path>
                      </svg>
                    </span>
                  </a>
                  <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                        <use xlink:href="#svg-dbc4"></use>
                      </svg>
                      <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-dbc4">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
      z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path>
                        <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
                        <path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
      C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
      c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path>
                      </svg>
                    </span>
                  </a>
                  <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4">
                      <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112">
                        <use xlink:href="#svg-4b88"></use>
                      </svg>
                      <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-4b88">
                        <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                        <path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
      C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
      H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path>
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="u-align-center-xl u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xs u-border-3 u-border-white u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-line u-line-horizontal u-line-1"></div>
      <p class="u-align-center u-text u-text-default u-text-5">
        © COPYRIGHT 2024 Startup tax digital. All rights reserved. Not for
        further distribution without the permission of&nbsp;Startup tax
        digital
      </p>
      <a href="mailto:info@site.com" class="u-active-none u-align-center u-btn u-btn-rectangle u-button-style u-hover-none u-none u-text-white u-btn-7"><span class="u-icon u-icon-5"><svg class="u-svg-content" viewBox="0 0 24 16" x="0px" y="0px" style="width: 1em; height: 1em">
            <path fill="currentColor" d="M23.8,1.1l-7.3,6.8l7.3,6.8c0.1-0.2,0.2-0.6,0.2-0.9V2C24,1.7,23.9,1.4,23.8,1.1z M21.8,0H2.2
	c-0.4,0-0.7,0.1-1,0.2L10.6,9c0.8,0.8,2.2,0.8,3,0l9.2-8.7C22.6,0.1,22.2,0,21.8,0z M0.2,1.1C0.1,1.4,0,1.7,0,2V14
	c0,0.3,0.1,0.6,0.2,0.9l7.3-6.8L0.2,1.1z M15.5,9l-1.1,1c-1.3,1.2-3.6,1.2-4.9,0l-1-1l-7.3,6.8c0.2,0.1,0.6,0.2,1,0.2H22
	c0.4,0,0.6-0.1,1-0.2L15.5,9z"></path>
          </svg></span>&nbsp;info@site.com
      </a>
    </div>
  </footer>
  <script>
    feather.replace();
  </script>
</body>

</html>