<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>
  <link rel="stylesheet" href="{{ asset('css/styles.min.css')}}" />
  <script src="https://unpkg.com/feather-icons"></script>\
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
      </div>
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
                  <img src="images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="My-profile.html" class="d-flex align-items-center gap-2 dropdown-item">
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
                    <a href="{{ url('/admin-login')}}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="card w-100 h-100 position-relative overflow-hidden">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Akademi</h5>
            <a  href="{{ url('/admin-akademi.create')}}" class="btn btn-primary"><i data-feather="plus"></i>Tambah akademi</a>
            <a href="{{ url('/admin-akademi.edit')}}" class="btn btn-warning">Edit akademis <i  data-feather="edit"></i></a>
              <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusModal" data-bs-whatever="@hapus">Hapus <i style="color: white;" data-feather="trash"></i></a>
              <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="hapusModallabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="hapusModallabel">Hapus akademi </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="mb-3">
                          <p> apakah anda yakin ingin menghapus akademi ini ? </p>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">batalkan</button>
                      <button type="button" class="btn btn-danger">yakin</button>
                    </div>
                  </div>
                </div>
              </div>
            <div class="card">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">title</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">Video</th>
                    <th scope="col">Category</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Loremipsum</td>
                    <td>sunday ,13 august 2020</td>
                    <td>Tax</td>
                  </tr>
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
  <script>
    feather.replace();
  </script>
</body>

</html>