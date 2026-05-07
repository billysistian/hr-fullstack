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
