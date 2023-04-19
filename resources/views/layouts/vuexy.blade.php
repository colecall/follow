<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('assets/') }}" data-template="horizontal-menu-template-no-customizer">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>User Profile - Profile | Vuexy - Bootstrap Admin Template</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/tabler-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/core.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/rtl/theme-default.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}" />


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
    <!-- Swiper -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/cards-advance.css') }}" />
    <!-- end -->
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}" />
    <!-- Helpers -->
    <script src="{{ asset('assets/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
        <div class="layout-container">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-xxl">
                    <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                        <a href="index.html" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo">
                                <svg width="32" height="22" viewBox="0 0 32 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.00172773 0V6.85398C0.00172773 6.85398 -0.133178 9.01207 1.98092 10.8388L13.6912 21.9964L19.7809 21.9181L18.8042 9.88248L16.4951 7.17289L9.23799 0H0.00172773Z"
                                        fill="#7367F0" />
                                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.69824 16.4364L12.5199 3.23696L16.5541 7.25596L7.69824 16.4364Z"
                                        fill="#161616" />
                                    <path opacity="0.06" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.07751 15.9175L13.9419 4.63989L16.5849 7.28475L8.07751 15.9175Z"
                                        fill="#161616" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.77295 16.3566L23.6563 0H32V6.88383C32 6.88383 31.8262 9.17836 30.6591 10.4057L19.7824 22H13.6938L7.77295 16.3566Z"
                                        fill="#7367F0" />
                                </svg>
                            </span>
                            <span class="app-brand-text demo menu-text fw-bold">COLECALL MEDIA</span>
                        </a>

                        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-xl-none">
                            <i class="ti ti-x ti-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="ti ti-menu-2 ti-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="ti ti-bell ti-md"></i>
                                    <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Notification</h5>
                                            <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Mark all as read"><i class="ti ti-mail-opened fs-4"></i></a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                                class="h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Follback! 🎉</h6>
                                                        <p class="mb-0">heroku.id di follback steviansyah_vian dengan
                                                            akun fake utyansyah <br> ayo
                                                            check!</p>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                                class="h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">New Followers 🎉</h6>
                                                        <p class="mb-0">steviansyah_vian di follow heroku. <br> ayo
                                                            follback!</p>
                                                        <small class="text-muted">1h ago</small>
                                                    </div>
                                                    <div class="flex-shrink-0 dropdown-notifications-actions">
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-read"><span
                                                                class="badge badge-dot"></span></a>
                                                        <a href="javascript:void(0)"
                                                            class="dropdown-notifications-archive"><span
                                                                class="ti ti-x"></span></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-menu-footer border-top">
                                        <a href="javascript:void(0);"
                                            class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">
                                            View all notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->

                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                            class="h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                            class="h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ auth()->user()->name}}</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-profile-user.html">
                                            <i class="ti ti-user-check me-2 ti-sm"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <i class="ti ti-settings me-2 ti-sm"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-billing.html">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span
                                                    class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20">2</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-help-center-landing.html">
                                            <i class="ti ti-lifebuoy me-2 ti-sm"></i>
                                            <span class="align-middle">Help</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-faq.html">
                                            <i class="ti ti-help me-2 ti-sm"></i>
                                            <span class="align-middle">FAQ</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="pages-pricing.html">
                                            <i class="ti ti-currency-dollar me-2 ti-sm"></i>
                                            <span class="align-middle">Pricing</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
                                            <i class="ti ti-logout me-2 ti-sm"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                        <input type="text" class="form-control search-input border-0" placeholder="Search..."
                            aria-label="Search..." />
                        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
                    </div>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Menu -->
                    <aside id="layout-menu"
                        class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                        <div class="container-xxl d-flex h-100">
                            <ul class="menu-inner">
                                <!-- Dashboards -->
                                <li class="menu-item active" style="margin-right: 1mm">
                                    <a href="{{ route('home') }}" class="menu-link">
                                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                        <div data-i18n="Account"><b>Dashboard</b></div>
                                    </a>
                                </li>
                                <li class="menu-item active" style="margin-right: 1mm">
                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                        <div data-i18n="Dashboards">Fake Account</div>
                                    </a>
                                    <ul class="menu-sub">
                                        <li class="menu-item">
                                            <a href="{{ route('fake.account') }}" class="menu-link">
                                                <i class="menu-icon fa-brands fa-instagram fa-fade"
                                                    style="color: #ff0000;"></i>
                                                <div data-i18n="User">Instagram
                                                </div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('fake.youtube') }}" class="menu-link">
                                                <i class="menu-icon fa-brands fa-youtube fa-fade"
                                                    style="color: #ff0000;"></i>
                                                <div data-i18n="Admin">Youtube
                                                </div>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('fake.tiktok') }}" class="menu-link">
                                                <i class="menu-icon fa-brands fa-tiktok fa-fade"></i>
                                                <div data-i18n="Admin">Tiktok</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item active" style="margin-right: 1mm">
                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                        <div data-i18n="Dashboards">Promote</div>
                                    </a>
                                    <ul class="menu-sub">
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                <i class="menu-icon fa-brands fa-instagram fa-fade"
                                                    style="color: #ff0000;"></i>
                                                <div data-i18n="Account Settings">Instagram</div>
                                            </a>
                                            <ul class="menu-sub">
                                                <li class="menu-item">
                                                    <a href="{{ route('real.account') }}" class="menu-link">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                        <div data-i18n="Account" style="margin-left: 2mm">Follow
                                                            Account</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('likes.instagram') }}" class="menu-link">
                                                        <i class="fa-solid fa-heart"></i>
                                                        <div data-i18n="Security" style="margin-left: 2mm">Like Post
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('comments.instagram') }}" class="menu-link">
                                                        <i class="fa-solid fa-comment"></i>
                                                        <div data-i18n="Billing & Plans" style="margin-left: 2mm">
                                                            Comment Post</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                <i class="menu-icon fa-brands fa-youtube fa-fade"
                                                    style="color: #ff0000;"></i>
                                                <div data-i18n="Account Settings">Youtube</div>
                                            </a>
                                            <ul class="menu-sub">
                                                <li class="menu-item">
                                                    <a href="{{ route('real.youtube') }}" class="menu-link">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                        <div data-i18n="Account" style="margin-left: 2mm">Subscribe
                                                            Chanel</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('youtube.likes') }}" class="menu-link">
                                                        <i class="fa-solid fa-heart"></i>
                                                        <div data-i18n="Security" style="margin-left: 2mm">Like Video
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('youtube.comment') }}" class="menu-link">
                                                        <i class="fa-solid fa-comment"></i>
                                                        <div data-i18n="Billing & Plans" style="margin-left: 2mm">
                                                            Comment Video</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                                <i class="menu-icon fa-brands fa-tiktok fa-fade"></i>
                                                <div data-i18n="Account Settings">Tiktok</div>
                                            </a>
                                            <ul class="menu-sub">
                                                <li class="menu-item">
                                                    <a href="{{ route('real.tiktok') }}" class="menu-link">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                        <div data-i18n="Account" style="margin-left: 2mm">Follow
                                                            Account</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('tiktok.likes') }}" class="menu-link">
                                                        <i class="fa-solid fa-heart"></i>
                                                        <div data-i18n="Security" style="margin-left: 2mm">Like Post
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('tiktok.comment') }}" class="menu-link">
                                                        <i class="fa-solid fa-comment"></i>
                                                        <div data-i18n="Billing & Plans" style="margin-left: 2mm">
                                                            Comment Post</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item active" style="margin-right: 1mm">
                                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                                        <i class="menu-icon tf-icons ti ti-smart-home"></i>
                                        <div data-i18n="Dashboards">Listing</div>
                                    </a>
                                    <ul class="menu-sub">
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">

                                                <i class="menu-icon fa-brands fa-instagram fa-fade"
                                                    style="color: #ff0000;"></i>
                                                <div data-i18n="Account Settings">Instagram</div>
                                            </a>
                                            <ul class="menu-sub">
                                                <li class="menu-item">
                                                    <a href="{{ route('follow.instagram') }}" class="menu-link">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                        <div data-i18n="Account" style="margin-left: 2mm">Follow
                                                            Me</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('like.instagram') }}" class="menu-link">
                                                        <i class="fa-solid fa-heart"></i>
                                                        <div data-i18n="Security" style="margin-left: 2mm">Like My
                                                            Post
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('comment.instagram') }}" class="menu-link">
                                                        <i class="fa-solid fa-comment"></i>
                                                        <div data-i18n="Billing & Plans" style="margin-left: 2mm">
                                                            Comment My Post</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">

                                                <i class="menu-icon fa-brands fa-youtube fa-fade"
                                                    style="color: #ff0000;"></i>
                                                <div data-i18n="Account Settings">Youtube</div>
                                            </a>
                                            <ul class="menu-sub">
                                                <li class="menu-item">
                                                    <a href="{{ route('subs.youtube') }}" class="menu-link">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                        <div data-i18n="Account" style="margin-left: 2mm">Subscribe
                                                            My Chanel</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('like.youtube') }}" class="menu-link">
                                                        <i class="fa-solid fa-heart"></i>
                                                        <div data-i18n="Security" style="margin-left: 2mm">Like My
                                                            Video
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('comment.youtube') }}" class="menu-link">
                                                        <i class="fa-solid fa-comment"></i>
                                                        <div data-i18n="Billing & Plans" style="margin-left: 2mm">
                                                            Comment My Video</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="javascript:void(0);" class="menu-link menu-toggle">

                                                <i class="menu-icon fa-brands fa-tiktok fa-fade"></i>
                                                <div data-i18n="Account Settings">Tiktok</div>
                                            </a>
                                            <ul class="menu-sub">
                                                <li class="menu-item">
                                                    <a href="{{ route('follow.tiktok') }}" class="menu-link">
                                                        <i class="fa-solid fa-user-plus"></i>
                                                        <div data-i18n="Account" style="margin-left: 2mm">Follow
                                                            Me</div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('like.tiktok') }}" class="menu-link">
                                                        <i class="fa-solid fa-heart"></i>
                                                        <div data-i18n="Security" style="margin-left: 2mm">Like My
                                                            Post
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{ route('comment.tiktok') }}" class="menu-link">
                                                        <i class="fa-solid fa-comment"></i>
                                                        <div data-i18n="Billing & Plans" style="margin-left: 2mm">
                                                            Comment My Post</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <!-- / Menu -->

                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="content-backdrop fade"></div>
                        @yield('content')
                    </div>
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-xxl">
                            <div
                                class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                                <div>
                                    © 2016
                                    , made with ❤️
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->
                    <!--/ Content wrapper -->
                </div>
                <!--/ Layout container -->
            </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
        <!-- build:js assets/vendor/js/core.js -->
        <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/popper/popper.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/bootstrap.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/node-waves/node-waves.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/hammer/hammer.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/i18n/i18n.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/typeahead-js/typeahead.js') }}"></script>
        <script src="{{ asset('assets/vendor/js/menu.js') }}"></script>
        <!-- endbuild -->
        <!-- SWIPER -->
        <script src="{{ asset('assets/vendor/libs/swiper/swiper.js') }}"></script>
        <!-- END SWIPER -->
        <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <!-- Page JS -->
        <script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
        <script src="{{ asset('assets/js/pages-profile.js') }}"></script>
</body>

</html>
