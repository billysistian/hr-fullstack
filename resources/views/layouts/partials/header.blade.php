<div class="main-header">

    <div class="main-header-logo"></div>

    <nav class="navbar navbar-header navbar-expand-lg border-bottom">

        <div class="container-fluid">

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

            <li class="nav-item topbar-user dropdown hidden-caret">
            <a
                class="dropdown-toggle profile-pic"
                data-bs-toggle="dropdown"
                href="#"
                aria-expanded="false"
            >
                <div class="avatar-sm">
                <img
                    src="./assets/img/logo-rs-urip.jpg"
                    alt="..."
                    class="avatar-img rounded-circle"
                />
                </div>
                <span class="profile-username">
                    <span class="op-7">Hi,</span>
                    <span class="fw-bold" id="userName">Loading...</span>
                </span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                    <div class="user-box">
                    <div class="avatar-lg">
                        <img
                        src="./assets/img/logo-rs-urip.jpg"
                        alt="image profile"
                        class="avatar-img rounded"
                        />
                    </div>
                    <div class="u-text">
                        <h4 id="profileName">Loading...</h4>
                        <p class="text-muted" id="profileEmail">Loading...</p>
                    </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" onclick="logout()">Logout</a>
                </li>
                </div>
            </ul>
            </li>
        </ul>

        </div>

    </nav>

</div>
