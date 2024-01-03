<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>Ikonic Solution</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
    <!--begin::Theme mode setup on page load-->
    <script>var defaultThemeMode = "light"; var themeMode; if (ument.documentElement) { i(doumntdocumentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (loclStrag.getItem("data-bs-theme") !== null) { hemeode  localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <!--begin::Wrapper-->
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg"
                style="background-image: url({{ asset('assets/media/svg/illustrations/landing.svg') }})">
                <!--begin::Header-->
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-center justify-content-between">
                            <!--begin::Logo-->
                            <div class="d-flex align-items-center flex-equal">
                                <!--begin::Mobile menu toggle-->
                                <button class="btn btn-icon btn-active-color-primary me-3 d-flex d-lg-none"
                                    id="kt_landing_menu_toggle">
                                    <i class="ki-duotone ki-abstract-14 fs-2hx">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </button>
                                <!--end::Mobile menu toggle-->
                                <!--begin::Logo image-->
                                <h1 href="../../demo1/dist/landing.html" class="text-white text-lg">
                                    Feedback
                                </h1>
                                <!--end::Logo image-->
                            </div>
                            <!--end::Logo-->
                            <!--begin::Menu wrapper-->
                            <div class="d-lg-block" id="kt_header_nav_wrapper">
                                <div class="d-lg-block p-5 p-lg-0" data-kt-drawer="true"
                                    data-kt-drawer-name="landing-menu"
                                    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                                    data-kt-drawer-width="200px" data-kt-drawer-direction="start"
                                    data-kt-drawer-toggle="#kt_landing_menu_toggle" data-kt-swapper="true"
                                    data-kt-swapper-mode="prepend"
                                    data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav_wrapper'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-column flex-nowrap menu-rounded menu-lg-row menu-title-gray-500 menu-state-title-primary nav nav-flush fs-5 fw-semibold"
                                        id="kt_landing_menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link active py-3 px-4 px-xxl-6" href="#kt_body"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Home</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#how-it-works"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Register</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#achievements"
                                                data-kt-scroll-toggle="true"
                                                data-kt-drawer-dismiss="true">Give feedback</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <!--begin::Menu link-->
                                            <a class="menu-link nav-link py-3 px-4 px-xxl-6" href="#team"
                                                data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true">Products</a>
                                            <!--end::Menu link-->
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <!--end::Menu wrapper-->
                            <!--begin::Toolbar-->
                            <div class="flex-equal text-end ms-1">
                                <a href="../../demo1/dist/authentication/layouts/basic/sign-in.html"
                                    class="btn btn-success">Sign In</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                    <!--begin::Heading-->
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <!--begin::Title-->
                        <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">Product
                            <span
                                style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                <span id="kt_landing_hero_text">Feedback Tool</span>
                            </span>
                        </h1>
                        <!--end::Title-->

                    </div>
                    <!--end::Heading-->
                    <!--begin::Clients-->
                    <div class="d-flex flex-center flex-wrap position-relative px-5">
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Fujifilm">
                            <img src="https://img.freepik.com/free-photo/arrangement-black-friday-shopping-carts-with-copy-space_23-2148667047.jpg?w=996&t=st=1704297804~exp=1704298404~hmac=2041f8a37a5c9c30f47a03ef8d019a754da9a920e812e2e852fb8b821ef02584" class="mh-80px mh-lg-80px rounded" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Vodafone">
                            <img src="https://img.freepik.com/free-photo/shop-clothing-clothes-shop-hanger-modern-shop-boutique_1150-8886.jpg?size=626&ext=jpg&ga=GA1.1.1546980028.1704240000&semt=ais" class="mh-80px mh-lg-80px rounded" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="KPMG International">
                            <img src="https://img.freepik.com/premium-photo/women-s-fashion-store-shopping-mall_1112-8147.jpg?w=996" class="mh-80px mh-lg-80px rounded" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Nasa">
                            <img src="https://img.freepik.com/free-photo/woman-black-trousers-purple-blouse-laughs-leaning-stand-with-elegant-clothes-pink-background_197531-17614.jpg?w=996&t=st=1704298148~exp=1704298748~hmac=3c3e0624f0bdeaf2a5d92225282a1b54dee9a5b040f6cbe17c02dc83e6ad7e17" class="mh-80px mh-lg-80px rounded" alt="" />
                        </div>
                        <!--end::Client-->
                        <!--begin::Client-->
                        <div class="d-flex flex-center m-3 m-md-6" data-bs-toggle="tooltip" title="Aspnetzero">
                            <img src="https://img.freepik.com/free-photo/young-teen-woman-sunglasses-hat-holding-shopping-bags-her-hands-feeling-so-happiness-isolated-green-wall_231208-2681.jpg?w=996&t=st=1704298202~exp=1704298802~hmac=fd4aa2157cedb0b8de0b492854e28746373b922121604c79f67a942bd51c97da" class="mh-80px mh-lg-80px rounded" alt="" />
                        </div>
                        <!--end::Client-->
                    </div>
                    <!--end::Clients-->
                </div>
                <!--end::Landing hero-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Header Section-->
        <!--begin::How It Works Section-->
        <div id="kt_app_content" class="app-content  flex-column-fluid ">
            <!--begin::Content container-->
            <div id="kt_app_content_container" class="app-container  container-xxl ">
                <h1>Feeds</h1>
                <!--begin::Row-->
                <div class="row g-5 g-xl-8">
                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Feeds Widget 1-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://plus.unsplash.com/premium_photo-1683121366070-5ceb7e007a97?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Grace
                                                Green</a>

                                            <span class="text-gray-500 fw-bold">PHP, SQLite, Artisan CLI</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Menu-->
                                    <div class="my-0">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>

                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Form-->
                                <form id="kt_forms_widget_1_form" class="ql-quil ql-quil-plain pb-3">
                                    <!--begin::Editor-->
                                    <div id="kt_forms_widget_1_editor" class="py-6"></div>
                                    <!--end::Editor-->

                                    <div class="separator"></div>

                                    <!--begin::Toolbar-->
                                    <div id="kt_forms_widget_1_editor_toolbar"
                                        class="ql-toolbar d-flex flex-stack py-2">
                                        <div class="me-2">
                                            <span class="">
                                                <button class="me-2 border-0"><i class="fa fa-bold"></i></button>
                                                <button class="me-2 border-0"><i class="fa fa-italic"></i></button>
                                                <button class="me-2 border-0"><i class="fa fa-underline"></i></button>
                                                <button class="me-2 border-0"><i
                                                        class="fa fa-strikethrough"></i></button>
                                                <button class="me-2 border-0"><i class="fa fa-image"></i></button>
                                                <button class="me-2 border-0"><i class="fa fa-link"></i></button>
                                                <button class="me-2 border-0"><i class="fa fa-eraser"></i></button>
                                            </span>
                                        </div>

                                        <div class="me-n3">
                                            <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                <i class="ki-duotone ki-paper-clip fs-2"></i> </span>

                                            <span class="btn btn-icon btn-sm btn-active-color-primary">
                                                <i class="ki-duotone ki-geolocation fs-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Toolbar-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feeds Widget 1-->

                        <!--begin::Feeds Widget 2-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Nick
                                                Logan</a>

                                            <span class="text-gray-500 fw-bold">PHP, SQLite, Artisan CLI</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Menu-->
                                    <div class="my-0">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>

                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Post-->
                                <div class="mb-5">
                                    <!--begin::Text-->
                                    <p class="text-gray-800 fw-normal mb-5">
                                        Outlines keep you honest. They stop you from indulging in poorly thought-out
                                        metaphors about driving and keep you focused on the overall structure of your
                                        post
                                    </p>
                                    <!--end::Text-->

                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center mb-5">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                            <i class="ki-duotone ki-message-text-2 fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> 120
                                        </a>

                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                            <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> 15
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Post-->

                                <!--begin::Separator-->
                                <div class="separator mb-4"></div>
                                <!--end::Separator-->

                                <!--begin::Reply input-->
                                <form class="position-relative mb-6">
                                    <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px"
                                        data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>

                                    <div class="position-absolute top-0 end-0 me-n5">
                                        <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                            <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i> </span>

                                        <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                            <i class="ki-duotone ki-geolocation fs-2 mb-3"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                </form>
                                <!--edit::Reply input-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feeds Widget 2-->

                        <!--begin::Feeds Widget 3-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center mb-3">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles
                                                Nilson</a>
                                            <span class="text-gray-500 fw-bold">Yestarday at 5:06 PM</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Menu-->
                                    <div class="my-0">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>

                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Post-->
                                <div class="mb-7">
                                    <!--begin::Text-->
                                    <div class="text-gray-800 mb-5">
                                        Outlines keep you honest. They stop you from indulging in poorly thought-out
                                        metaphors about driving and keep you focused on the overall structure of your
                                        post
                                    </div>
                                    <!--end::Text-->

                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center mb-5">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                            <i class="ki-duotone ki-message-text-2 fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> 12
                                        </a>

                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                            <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> 150
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Post-->

                                <!--begin::Replies-->
                                <div class="mb-7">
                                    <!--begin::Reply-->
                                    <div class="d-flex mb-5">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column flex-row-fluid">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center flex-wrap mb-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Alice
                                                    Danchik</a>

                                                <span class="text-gray-500 fw-semibold fs-7">1 day</span>

                                                <a href="#"
                                                    class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Post-->
                                            <span class="text-gray-800 fs-7 fw-normal pt-1">
                                                Long before you sit dow to put digital pen to
                                                paper you need to make sure you have to sit down and write.
                                            </span>
                                            <!--end::Post-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Reply-->

                                    <!--begin::Reply-->
                                    <div class="d-flex">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column flex-row-fluid">
                                            <!--begin::Info-->
                                            <div class="d-flex align-items-center flex-wrap mb-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">Harris
                                                    Bold</a>

                                                <span class="text-gray-500 fw-semibold fs-7">2 days</span>

                                                <a href="#"
                                                    class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                            </div>
                                            <!--end::Info-->

                                            <!--begin::Post-->
                                            <span class="text-gray-800 fs-7 fw-normal pt-1">
                                                Outlines keep you honest. They stop you from indulging in poorly
                                            </span>
                                            <!--end::Post-->
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Reply-->
                                </div>
                                <!--end::Replies-->

                                <!--begin::Separator-->
                                <div class="separator mb-4"></div>
                                <!--end::Separator-->

                                <!--begin::Reply input-->
                                <form class="position-relative mb-6">
                                    <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px"
                                        data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>

                                    <div class="position-absolute top-0 end-0 me-n5">
                                        <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                            <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i> </span>

                                        <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                            <i class="ki-duotone ki-geolocation fs-2 mb-3"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                </form>
                                <!--edit::Reply input-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feeds Widget 3-->


                        <!--begin::Feeds Widget 4-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles
                                                Nilson</a>
                                            <span class="text-gray-500 fw-bold">Last week at 10:00 PM</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Menu-->
                                    <div class="my-0">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>

                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments
                                                </div>
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Create Invoice
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">
                                                    Create Payment

                                                    <span class="ms-2" data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference">
                                                        <i class="ki-duotone ki-information fs-6"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i> </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Generate Bill
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Plans
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Billing
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Statements
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="1" checked="checked"
                                                                    name="notifications" />
                                                                <!--end::Input-->

                                                                <!--end::Label-->
                                                                <span class="form-check-label text-muted fs-6">
                                                                    Recuring
                                                                </span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">
                                                    Settings
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Post-->
                                <div class="mb-7">
                                    <!--begin::Text-->
                                    <div class="text-gray-800 mb-5">
                                        Outlines keep you honest. They stop you from indulging in poorly thought-out
                                        metaphors about driving and keep you focused on the overall structure of your
                                        post
                                    </div>
                                    <!--end::Text-->

                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center mb-5">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                            <i class="ki-duotone ki-message-text-2 fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> 22
                                        </a>

                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                            <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> 59
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Post-->

                                <!--begin::Separator-->
                                <div class="separator mb-4"></div>
                                <!--end::Separator-->

                                <!--begin::Reply input-->
                                <form class="position-relative mb-6">
                                    <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px"
                                        data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>

                                    <div class="position-absolute top-0 end-0 me-n5">
                                        <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                            <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i> </span>

                                        <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                            <i class="ki-duotone ki-geolocation fs-2 mb-3"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                </form>
                                <!--edit::Reply input-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feeds Widget 4-->

                        <!--begin::Feeds widget 5-->
                        <div class="card d-none" id="kt_widget_5">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Carles
                                                Nilson</a>
                                            <span class="text-gray-500 fw-bold">Last week at 10:00 PM</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Menu-->
                                    <div class="my-0">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>

                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Post-->
                                <div class="mb-7">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5"
                                        style="background-image:url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.supermarketnews.com%2Fcenter-store%2F17-natural-products-feed-companies-missions&psig=AOvVaw0DIfF4FYh4j0bWICJASIIY&ust=1704382901468000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCKi1hZ_HwYMDFQAAAAAdAAAAABAD');">
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Text-->
                                    <div class="text-gray-800 mb-5">
                                        Outlines keep you honest. They stop you from indulging in poorly thought-out
                                        metaphors about driving and keep you focused on the overall structure of your
                                        post
                                    </div>
                                    <!--end::Text-->

                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center mb-5">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                            <i class="ki-duotone ki-message-text-2 fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> 20
                                        </a>

                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                            <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> 50
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Post-->

                                <!--begin::Separator-->
                                <div class="separator mb-4"></div>
                                <!--end::Separator-->

                                <!--begin::Reply input-->
                                <form class="position-relative mb-6">
                                    <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px"
                                        data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>

                                    <div class="position-absolute top-0 end-0 me-n5">
                                        <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                            <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i> </span>

                                        <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                            <i class="ki-duotone ki-geolocation fs-2 mb-3"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                </form>
                                <!--edit::Reply input-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feeds widget 5-->

                        <!--begin::Feeds widget 4, 5 load more-->
                        <button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
                            <span class="indicator-label">
                                More Feeds
                            </span>
                            <span class="indicator-progress">
                                Loading... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        <!--end::Feeds widget 4, 5 load more-->
                    </div>
                    <!--end::Col-->

                    <!--begin::Col-->
                    <div class="col-xl-6">
                        <!--begin::Feeds Widget 5-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Sam
                                                Logan</a>

                                            <span class="text-gray-500 fw-bold">Mango, Java, Python</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Menu-->
                                    <div class="my-0">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>


                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick
                                                    Actions</div>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Ticket
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Customer
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Admin Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Staff Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Member Group
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    New Contact
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                                        Generate Reports
                                                    </a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Post-->
                                <div class="mb-5">
                                    <!--begin::Image-->
                                    <div class="bgi-no-repeat bgi-size-cover rounded min-h-250px mb-5"
                                        style="background-image:url('https://www.supermarketnews.com/sites/supermarketnews.com/files/styles/article_featured_retina/public/mission-products-promo_1.png?itok=iUn8QV_W');">
                                    </div>
                                    <!--end::Image-->

                                    <!--begin::Text-->
                                    <div class="text-gray-800 mb-5">
                                        Outlines keep you honest. They stop you from indulging in poorly thought-out
                                        metaphors about driving and keep you focused on the overall structure of your
                                        post
                                    </div>
                                    <!--end::Text-->

                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center mb-5">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                            <i class="ki-duotone ki-message-text-2 fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> 89
                                        </a>

                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                            <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> 29
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Post-->

                                <!--begin::Separator-->
                                <div class="separator mb-4"></div>
                                <!--end::Separator-->

                                <!--begin::Reply input-->
                                <form class="position-relative mb-6">
                                    <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px"
                                        data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>

                                    <div class="position-absolute top-0 end-0 me-n5">
                                        <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                            <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i> </span>

                                        <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                            <i class="ki-duotone ki-geolocation fs-2 mb-3"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                </form>
                                <!--edit::Reply input-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Feeds Widget 5-->




                        <!--begin::Forms Widget 6-->
                        <div class="card mb-5 mb-xl-8">
                            <!--begin::Body-->
                            <div class="card-body pb-0">
                                <!--begin::Header-->
                                <div class="d-flex align-items-center mb-5">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center flex-grow-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?q=80&w=1780&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">Mat
                                                Dillon</a>
                                            <span class="text-gray-500 fw-bold">Last month</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Menu-->
                                    <div class="my-0">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>

                                        <!--begin::Menu 3-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                            data-kt-menu="true">
                                            <!--begin::Heading-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                    Payments
                                                </div>
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Create Invoice
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link flex-stack px-3">
                                                    Create Payment

                                                    <span class="ms-2" data-bs-toggle="tooltip"
                                                        title="Specify a target name for future usage and reference">
                                                        <i class="ki-duotone ki-information fs-6"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i> </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Generate Bill
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-end">
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>

                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Plans
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Billing
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Statements
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <!--begin::Switch-->
                                                            <label
                                                                class="form-check form-switch form-check-custom form-check-solid">
                                                                <!--begin::Input-->
                                                                <input class="form-check-input w-30px h-20px"
                                                                    type="checkbox" value="1" checked="checked"
                                                                    name="notifications" />
                                                                <!--end::Input-->

                                                                <!--end::Label-->
                                                                <span class="form-check-label text-muted fs-6">
                                                                    Recuring
                                                                </span>
                                                                <!--end::Label-->
                                                            </label>
                                                            <!--end::Switch-->
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-1">
                                                <a href="#" class="menu-link px-3">
                                                    Settings
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 3-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Header-->

                                <!--begin::Post-->
                                <div class="mb-6">
                                    <!--begin::Text-->
                                    <div class="text-gray-800 fs-6 fw-normal mb-5">
                                        Outlines keep you honest. They stop you from indulging in poorly thought-out
                                        metaphors
                                    </div>
                                    <!--end::Text-->

                                    <!--begin::Video-->
                                    <div class="mb-5">
                                        <iframe class="embed-responsive-item rounded h-300px w-100"
                                            src="https://www.pepperidgefarm.com/wp-content/uploads/2017/03/products-goldfish-packs-1.jpg" allowfullscreen=""></iframe>
                                    </div>
                                    <!--end::Video-->

                                    <!--begin::Toolbar-->
                                    <div class="d-flex align-items-center mb-5">
                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                                            <i class="ki-duotone ki-message-text-2 fs-2"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> 189
                                        </a>

                                        <a href="#"
                                            class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                                            <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span
                                                    class="path2"></span></i> 229
                                        </a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Bottom-->

                                <!--begin::Separator-->
                                <div class="separator mb-4"></div>
                                <!--end::Separator-->

                                <!--begin::Reply input-->
                                <form class="position-relative mb-6">
                                    <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px"
                                        data-kt-autosize="true" rows="1" placeholder="Reply.."></textarea>

                                    <div class="position-absolute top-0 end-0 me-n5">
                                        <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                            <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i> </span>

                                        <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                            <i class="ki-duotone ki-geolocation fs-2 mb-3"><span
                                                    class="path1"></span><span class="path2"></span></i>
                                        </span>
                                    </div>
                                </form>
                                <!--edit::Reply input-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Forms Widget 6-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::How It Works Section-->
        <!--begin::Statistics Section-->
        <div class="mt-sm-n10">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="pb-15 pt-18 landing-dark-bg">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Heading-->
                    <div class="text-center mt-15 mb-18" id="achievements"
                        data-kt-scroll-offset="{default: 100, lg: 150}">
                        <!--begin::Title-->
                        <h3 class="fs-2hx text-white fw-bold mb-5">We Make Things Better</h3>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fs-5 text-gray-700 fw-bold">Save thousands to millions of bucks by using single tool
                            <br />for different amazing and great useful admin
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Statistics-->
                    <div class="d-flex flex-center">
                        <!--begin::Items-->
                        <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-element-11 fs-2tx text-white mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="700"
                                            data-kt-countup-suffix="+">0</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">Known Companies</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-chart-pie-4 fs-2tx text-white mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="80"
                                            data-kt-countup-suffix="K+">0</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">Statistic Reports</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain"
                                style="background-image: url('assets/media/svg/misc/octagon.svg')">
                                <!--begin::Symbol-->
                                <i class="ki-duotone ki-basket fs-2tx text-white mb-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                </i>
                                <!--end::Symbol-->
                                <!--begin::Info-->
                                <div class="mb-0">
                                    <!--begin::Value-->
                                    <div class="fs-lg-2hx fs-2x fw-bold text-white d-flex flex-center">
                                        <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="35"
                                            data-kt-countup-suffix="M+">0</div>
                                    </div>
                                    <!--end::Value-->
                                    <!--begin::Label-->
                                    <span class="text-gray-600 fw-semibold fs-5 lh-0">Secure Payments</span>
                                    <!--end::Label-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Statistics-->
                    <!--begin::Testimonial-->
                    <div class="fs-2 fw-semibold text-muted text-center mb-3">
                        <span class="fs-1 lh-1 text-gray-700">“</span>When you care about your topic, you’ll write about
                        it in a
                        <br />
                        <span class="text-gray-700 me-1">more powerful</span>, emotionally expressive way
                        <span class="fs-1 lh-1 text-gray-700">“</span>
                    </div>
                    <!--end::Testimonial-->
                    <!--begin::Author-->
                    <div class="fs-2 fw-semibold text-muted text-center">
                        <a href="../../demo1/dist/account/security.html" class="link-primary fs-4 fw-bold">Marcus
                            Levy,</a>
                        <span class="fs-4 fw-bold text-gray-600">KeenThemes CEO</span>
                    </div>
                    <!--end::Author-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Statistics Section-->
        <!--begin::Team Section-->
        <div class="py-10 py-lg-20">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-12">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Our
                        Great Team</h3>
                    <!--end::Title-->
                    <!--begin::Sub-title-->
                    <div class="fs-5 text-muted fw-bold">It’s no doubt that when a development takes longer to complete,
                        additional costs to
                        <br />integrate and test each extra feature creeps up and haunts most of us.
                    </div>
                    <!--end::Sub-title=-->
                </div>
                <!--end::Heading-->
                <!--begin::Slider-->
                <div class="tns tns-default" style="direction: ltr">
                    <!--begin::Wrapper-->
                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000"
                        data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true"
                        data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false"
                        data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next"
                        data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-1.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Paul Miles</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Development Lead</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-2.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Melisa Marcus</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Creative Director</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-5.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">David Nilson</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Python Expert</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-20.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Anne Clarc</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Project Manager</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-23.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Ricky Hunt</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Art Director</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-12.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Alice Wayde</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">Marketing Manager</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <div class="text-center">
                            <!--begin::Photo-->
                            <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center"
                                style="background-image:url('assets/media/avatars/300-9.jpg')"></div>
                            <!--end::Photo-->
                            <!--begin::Person-->
                            <div class="mb-0">
                                <!--begin::Name-->
                                <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Carles Puyol</a>
                                <!--end::Name-->
                                <!--begin::Position-->
                                <div class="text-muted fs-6 fw-semibold mt-1">QA Managers</div>
                                <!--begin::Position-->
                            </div>
                            <!--end::Person-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                        <i class="ki-duotone ki-left fs-2x"></i>
                    </button>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                        <i class="ki-duotone ki-right fs-2x"></i>
                    </button>
                    <!--end::Button-->
                </div>
                <!--end::Slider-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Team Section-->

        <!--begin::Pricing Section-->
        <div class="mt-sm-n20">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->

            <!--begin::Curve bottom-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve bottom-->
        </div>
        <!--end::Pricing Section-->
        <!--begin::Testimonials Section-->
        <div class="mt-20 mb-n20 position-relative z-index-2">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Heading-->
                <div class="text-center mb-17">
                    <!--begin::Title-->
                    <h3 class="fs-2hx text-dark mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">What
                        Our Clients Say</h3>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <div class="fs-5 text-muted fw-bold">Save thousands to millions of bucks by using single tool
                        <br />for different amazing and great useful admin
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->
                <!--begin::Row-->
                <div class="row g-lg-10 mb-10 mb-lg-20">
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-1.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Paul Miles</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-2.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Janya Clebert</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                    <!--begin::Col-->
                    <div class="col-lg-4">
                        <!--begin::Testimonial-->
                        <div
                            class="d-flex flex-column justify-content-between h-lg-100 px-10 px-lg-0 pe-lg-10 mb-15 mb-lg-0">
                            <!--begin::Wrapper-->
                            <div class="mb-7">
                                <!--begin::Rating-->
                                <div class="rating mb-6">
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                    <div class="rating-label me-2 checked">
                                        <i class="ki-duotone ki-star fs-5"></i>
                                    </div>
                                </div>
                                <!--end::Rating-->
                                <!--begin::Title-->
                                <div class="fs-2 fw-bold text-dark mb-3">This is by far the cleanest template
                                    <br />and the most well structured
                                </div>
                                <!--end::Title-->
                                <!--begin::Feedback-->
                                <div class="text-gray-500 fw-semibold fs-4">The most well thought out design theme I
                                    have ever used. The codes are up to tandard. The css styles are very clean. In fact
                                    the cleanest and the most up to standard I have ever seen.</div>
                                <!--end::Feedback-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-50px me-5">
                                    <img src="assets/media/avatars/300-16.jpg" class="" alt="" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Name-->
                                <div class="flex-grow-1">
                                    <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Steave Brown</a>
                                    <span class="text-muted d-block fw-bold">Development Lead</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                        </div>
                        <!--end::Testimonial-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->

            </div>
            <!--end::Container-->
        </div>
        <!--end::Testimonials Section-->
        <!--begin::Footer Section-->
        <div class="mb-0">
            <!--begin::Curve top-->
            <div class="landing-curve landing-dark-color">
                <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z"
                        fill="currentColor"></path>
                </svg>
            </div>
            <!--end::Curve top-->
            <!--begin::Wrapper-->
            <div class="landing-dark-bg pt-20">
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Row-->
                    <div class="row py-10 py-lg-20">
                        <!--begin::Col-->
                        <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9 mb-10">
                                <!--begin::Title-->
                                <h2 class="text-white">Would you need a Custom License?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Email us to
                                    <a href="https://keenthemes.com/support"
                                        class="text-white opacity-50 text-hover-primary">support@keenthemes.com</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                            <!--begin::Block-->
                            <div class="rounded landing-dark-border p-9">
                                <!--begin::Title-->
                                <h2 class="text-white">How About a Custom Project?</h2>
                                <!--end::Title-->
                                <!--begin::Text-->
                                <span class="fw-normal fs-4 text-gray-700">Use Our Custom Development Service.
                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                        class="text-white opacity-50 text-hover-primary">Click to Get a Quote</a></span>
                                <!--end::Text-->
                            </div>
                            <!--end::Block-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-6 ps-lg-16">
                            <!--begin::Navs-->
                            <div class="d-flex justify-content-center">
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column me-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-400 mb-6">More for Metronic</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/faqs"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">FAQ</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Documentaions</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.youtube.com/c/KeenThemesTuts/videos"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Video Tuts</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Changelog</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://devs.keenthemes.com/"
                                        class="text-white opacity-50 text-hover-primary fs-5 mb-6">Support Forum</a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://keenthemes.com/blog"
                                        class="text-white opacity-50 text-hover-primary fs-5">Blog</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                                <!--begin::Links-->
                                <div class="d-flex fw-semibold flex-column ms-lg-20">
                                    <!--begin::Subtitle-->
                                    <h4 class="fw-bold text-gray-400 mb-6">Stay Connected</h4>
                                    <!--end::Subtitle-->
                                    <!--begin::Link-->
                                    <a href="https://www.facebook.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-2"
                                            alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Facebook</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://github.com/KeenthemesHub" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/github.svg" class="h-20px me-2" alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Github</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://twitter.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/twitter.svg" class="h-20px me-2"
                                            alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Twitter</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://dribbble.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg" class="h-20px me-2"
                                            alt="" />
                                        <span class="text-white opacity-50 text-hover-primary fs-5 mb-6">Dribbble</span>
                                    </a>
                                    <!--end::Link-->
                                    <!--begin::Link-->
                                    <a href="https://www.instagram.com/keenthemes" class="mb-6">
                                        <img src="assets/media/svg/brand-logos/instagram-2-1.svg" class="h-20px me-2"
                                            alt="" />
                                        <span
                                            class="text-white opacity-50 text-hover-primary fs-5 mb-6">Instagram</span>
                                    </a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Links-->
                            </div>
                            <!--end::Navs-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Container-->
                <!--begin::Separator-->
                <div class="landing-dark-separator"></div>
                <!--end::Separator-->
                <!--begin::Container-->
                <div class="container">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <!--begin::Copyright-->
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <!--begin::Logo-->
                            <a href="../../demo1/dist/landing.html">
                                <img alt="Logo" src="assets/media/logos/landing.svg" class="h-15px h-md-20px" />
                            </a>
                            <!--end::Logo image-->
                            <!--begin::Logo image-->
                            <span class="mx-5 fs-6 fw-semibold text-gray-600 pt-1" href="https://keenthemes.com">&copy;
                                2023 Keenthemes Inc.</span>
                            <!--end::Logo image-->
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                            </li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Footer Section-->
        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-duotone ki-arrow-up">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Scrolltop-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>
    <!--end::Scrolltop-->
    <!--begin::Javascript-->
    <script>var ssets/";</script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/custom/landing.js') }}"></script>
    <script src="{{ asset('assets/js/custom/pages/pricing/general.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
