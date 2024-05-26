<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin</title>
  <link rel="shortcut icon" href="images/logos/logo-rounded.png" />
  <link rel="stylesheet" href="{{ asset('css/styles.min.css')}}" />
  <script class="u-script" type="text/javascript" src="{{ asset('js/admin.js') }}" defer=""></script>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{ url('/admin-index') }}" class="text-nowrap logo-img">
            <img src="images/logos/logo.png" width="220" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <a id="homeToggle" class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span style="color: black;" class="hide-menu">Home</span>
              </a>
            </li>
            <ul id="homeMenu" class="collapse first-level show" aria-expanded="true">
              <li class="sidebar-item">
                <a href="{{ url('/admin-index') }}" class="sidebar-link">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ url('/admin-company-profile') }}" class="sidebar-link">
                  <span>
                    <i class="ti ti-user"></i>
                  </span>
                  <span class="hide-menu">Profile Company</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a href="{{ url('/admin-user') }}" class="sidebar-link">
                  <span>
                    <i class="ti ti-user"></i>
                  </span>
                  <span class="hide-menu">User</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-subscribe') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-cards"></i>
                  </span>
                  <span class="hide-menu">Subcriber</span>
                </a>
              </li>
            </ul>
            <li class="nav-small-cap">
              <a id="pageToggle" class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span style="color: black;" class="hide-menu">Page</span>
              </a>
            </li>
            <ul id="pageMenu" class="collapse second-level show" aria-expanded="true">
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-news') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-news"></i>
                  </span>
                  <span class="hide-menu">News</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-publikasi') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-book"></i>
                  </span>
                  <span class="hide-menu">publikasi</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-question') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-question-mark"></i>
                  </span>
                  <span class="hide-menu">Question</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-akademi') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-typography"></i>
                  </span>
                  <span class="hide-menu">Akademi</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-riset') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-search"></i>
                  </span>
                  <span class="hide-menu">Riset</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-konsultasi') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-heart-handshake"></i>
                  </span>
                  <span class="hide-menu">Konsultasi</span>
                </a>
              </li>
            </ul>
            <!-- collapse level 3 -->
            <li class="nav-small-cap">
              <a id="lastpageToggle" class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="true">
                <span style="color: black;" class="hide-menu">last page</span>
              </a>
            </li>
            <ul id="lastpageMenu" class="collapse third-level show" aria-expanded="true">
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-pelatihan') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-notebook"></i>
                  </span>
                  <span class="hide-menu">Pelatihan</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-kegiatan') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-trekking"></i>
                  </span>
                  <span class="hide-menu">kegiatan</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{ url('/admin-login') }}" aria-expanded="false">
                  <span>
                    <i class="ti ti-logout"></i>
                  </span>
                  <span class="hide-menu">Logout</span>
                </a>
              </li>
            </ul> 
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>s
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item">
                <p class="mb-0">admin</p>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle" />
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="{{ url('/admin-login') }}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="mb-4">
                  <h5 class="card-title fw-semibold">Recent user</h5>
                </div>
                <ul class="timeline-widget mb-0 position-relative mb-n5">
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">
                      09:30
                    </div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-primary flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">
                      new user join in the system.
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">
                      10:00 am
                    </div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-info flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">
                      New user subscribe
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">
                      12:00 am
                    </div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">
                      new user join in the system.
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">
                      09:30 am
                    </div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-warning flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">
                      New sale recorded
                      <a href="javascript:void(0)" class="text-primary d-block fw-normal">#ML-3467</a>
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">
                      09:30 am
                    </div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-danger flex-shrink-0 my-8"></span>
                      <span class="timeline-badge-border d-block flex-shrink-0"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1 fw-semibold">
                      New arrival recorded
                    </div>
                  </li>
                  <li class="timeline-item d-flex position-relative overflow-hidden">
                    <div class="timeline-time text-dark flex-shrink-0 text-end">
                      12:00 am
                    </div>
                    <div class="timeline-badge-wrap d-flex flex-column align-items-center">
                      <span class="timeline-badge border-2 border border-success flex-shrink-0 my-8"></span>
                    </div>
                    <div class="timeline-desc fs-3 text-dark mt-n1">
                      Payment Done
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Subscribe</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Name</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Assigned</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">long subs</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">information</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">1</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">premium package</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">1 month</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">-</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">2</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">premium package</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-secondary rounded-3 fw-semibold">3 month</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">-</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">3</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">premium package</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-danger rounded-3 fw-semibold">1 years</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0 fs-4">-</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">4</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">joshua</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">premium package</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">3 years</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-normal">
                            about to expired on 20 days
                          </h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">4</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">jhon</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">premium package</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-3 fw-semibold">2 month</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-normal">cool so many course</h6>
                        </td>
                      </tr>
                      <tr>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">4</h6>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-semibold mb-1">brian</h6>
                        </td>
                        <td class="border-bottom-0">
                          <p class="mb-0 fw-normal">premium package</p>
                        </td>
                        <td class="border-bottom-0">
                          <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-warning rounded-3 fw-semibold">3 years</span>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <h6 class="fw-normal">
                            thanks this course are good
                          </h6>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/sidebarmenu.js') }}"></script>
  <script src="{{ asset('js/app.min.js') }}"></script>
  <script src="{{ asset('libs/apexcharts/dist/apexcharts.min.js') }}"></script>
  <script src="{{ asset('libs/simplebar/dist/simplebar.js') }}"></script>
  <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>