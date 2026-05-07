<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["./assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/kaiadmin.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">

</head>
<body>

<div class="wrapper">

    <div class="sidebar" data-background-color="white">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="white">
            <a href="" class="logo">
              <img
                src="../assets/img/logo-rs-urip.jpg"
                alt="navbar brand"
                class="navbar-brand"
                height="40"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">

                <li class="nav-item active">
                    <a href="/dashboard">
                        <i class="fas fa-users"></i>
                        <p>Data Karyawan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/tlog">
                        <i class="fas fa-history"></i>
                        <p>Audit Log</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="javascript:void(0);" onclick="exportPdf()">
                        <i class="fas fa-file-pdf"></i>
                        <p>Laporan PDF</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="javascript:void(0);" onclick="logout()">
                        <i class="fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>

            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->


    <!-- Main Panel -->
    <div class="main-panel">

        <!-- Header -->
        <div class="main-header">

            <div class="main-header-logo"></div>

            <nav class="navbar navbar-header navbar-expand-lg border-bottom">

                <div class="container-fluid">

                    <div class="ms-auto">

                        <button
                            class="btn btn-danger btn-sm"
                            onclick="logout()"
                        >
                            Logout
                        </button>

                    </div>

                </div>

            </nav>

        </div>

        <!-- Content -->
        <div class="container">

            <div class="page-inner">

                @yield('content')

            </div>

        </div>

    </div>

</div>

<script src="{{ asset('assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/kaiadmin.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/datatables/datatables.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>

@stack('scripts')

</body>
</html>
