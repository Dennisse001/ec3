<head>

    <meta charset="utf-8">
    <title>Sual Ku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Toner - eCommerce + Admin HTML Template Build with HTML, React, Laravel, Nodejs" name="description">
    <meta content="Themesbrand" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href={{ asset("assets/images/logo-l.png") }}  style="height: 30px">

    <!--Swiper slider css-->
    <link href={{ asset("assets/libs/swiper/swiper-bundle.min.css") }} rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href={{ asset("assets/css/bootstrap.min.css") }} rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href={{ asset("assets/css/icons.min.css") }} rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href={{ asset("assets/css/app.min.css") }} rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href={{ asset("assets/css/custom.min.css") }} rel="stylesheet" type="text/css">

</head>

<body>

    <div class="top-tagbar">
<div class="w-100">
    <div class="row justify-content-between align-items-center">
        <div class="col-md-4 col-9">
            <div class="fs-14 fw-medium">
                <i class="bi bi-geo-alt align-middle me-2"></i> Jawa Timur, Indonesia
            </div>
        </div>
        <div class="col-md-4 col-6 d-none d-xxl-block">
            <div class="d-flex align-items-center justify-content-center gap-3 fs-14 fw-medium">
                <div>
                    <i class="bi bi-envelope align-middle me-2"></i> Team 3 Bre
                </div>
            </div>
        </div>
        <div class="col-md-4 col-3">
            <div class="d-flex align-items-center justify-content-end gap-3 fs-14">
                <div class="text-reset fw-normal d-none d-lg-block">
                    <i class="bi bi-telephone-outbound align-middle me-2"></i> +(62) 8596 3176 010
                </div>
                <hr class="vr d-none d-lg-block">

            </div>
        </div>
    </div>
</div>
</div>
    <nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
        <div class="container">
            <a class="navbar-brand d-none d-lg-block" href="index-2.html">
                <div class="logo-dark">
                    <img src="../assets/images/logo-dark.png" alt="" height="35">
                </div>
                <div class="logo-light">
                    <img src="../assets/images/logo-light.png" alt="" height="35">
                </div>
            </a>
            <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-20"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                    <li class="nav-item d-block d-lg-none">
                        <a class="d-block p-3 h-auto text-center" href="index-2.html">
                            <img src="../assets/images/logo-dark.png" alt="" height="25" class="card-logo-dark mx-auto">
                            <img src="../assets/images/logo-light.png" alt="" height="25" class="card-logo-light mx-auto">
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-hover">
                        <a class="nav-link dropdown-toggle" data-key="t-demos" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </a>
                        <ul class="dropdown-menu dropdown-menu-md dropdown-menu-center dropdown-menu-list submenu">
                            <li class="nav-item">
                                <a href="/" class="nav-link" data-key="t-main-layout">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="watch-main-layout.html" class="nav-link" data-key="t-unique-watches">Unique Watches</a>
                            </li>
                            <li class="nav-item">
                                <a href="/fashion" class="nav-link" data-key="t-modern-fashion">Modern Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a href="trend-fashion.html" class="nav-link" data-key="t-trend-fashion">Trend Fashion</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/category" data-key="t-contact">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about" data-key="t-contact">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}" data-key="t-contact">Contact</a>
                    </li>

                </ul>
            </div>

            <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent.show"></div>

            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="modal" data-bs-target="#searchModal">
                    <i class="bx bx-search fs-22"></i>
                </button>
                <div class="topbar-head-dropdown ms-1 header-item">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="offcanvas" data-bs-target="#ecommerceCart" aria-controls="ecommerceCart">
                        <i class="ph-shopping-cart fs-18"></i>
                        <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-danger">4</span>
                    </button>
                </div>

                <div class="dropdown topbar-head-dropdown ms-2 header-item dropdown-hover-end">
                    <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bi bi-sun align-middle fs-20"></i>
                    </button>
                    <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                        <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                        <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                        <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                    </div>
                </div>
                @if (Auth::check())
                <div class="dropdown header-item dropdown-hover-end">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ (!empty(Auth::user()->foto)) ? asset('storage/userimg/' . Auth::user()->foto) : asset('upload/no_image.png') }}" alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Welcome</h6>
                        <a class="dropdown-item" href="track-order.html"><i class="bi bi-truck text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Track Orders</span></a>
                            <a class="dropdown-item" href="../backend/index.html"><i class="bi bi-speedometer2 text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Dashboard</span></a>
                            <a class="dropdown-item" href="ecommerce-faq.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>

                        {{-- <a class="dropdown-item" href ><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a> --}}
                        @if (Auth::user()->role === 'admin')
                        <a class="dropdown-item" href="{{ route('dash.admin') }}">
                            <i class="bi bi-gear text-muted fs-16 align-middle me-1"></i>
                            <span class="align-middle">Kelola Web</span>
                        </a>
                    @endif
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span>
                        </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                    @else
                <div class="dropdown header-item dropdown-hover-end">
                    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{ asset('upload/no_image.png') }}" alt="Header Avatar">
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <h6 class="dropdown-header">Guest?</h6>
                        <a class="dropdown-item" href="{{ route('login') }}"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Login</span></a>
                        <a class="dropdown-item" href="{{ route('register') }}"><i class="bi bi-box-arrow-right text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Register</span></a>
                    </div>
                </div>
            @endif


                </div>
            </div>
        </div>
    </nav>
    <script>
        // Ambil URL halaman saat ini
        var currentUrl = window.location.pathname;

        // Cari tautan yang sesuai dengan URL saat ini dan tambahkan kelas "active"
        var links = document.querySelectorAll(".nav-link");
        for (var i = 0; i < links.length; i++) {
            if (links[i].getAttribute("href") === currentUrl) {
                links[i].parentNode.classList.add("active");
            }
        }
    </script>

