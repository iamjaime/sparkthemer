<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Laravel Spark Theme by iamjaime">
    <meta name="author" content="iamjaime">
    <title>@yield('title', config('app.name'))</title>
    <!-- Favicon -->
    <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css"><!-- Page CSS -->
    <link rel="stylesheet" href="assets/libs/swiper/dist/css/swiper.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="css/purpose.css" id="stylesheet">
    {{--<link rel="stylesheet" href="css/app.css" id="stylesheet">--}}
</head>

<body>
<header class="header header-transparent" id="header-main">
    <!-- Topbar -->
    <div id="navbar-top-main" class="navbar-top  navbar-dark bg-dark border-bottom">
        <div class="container px-0">
            <div class="navbar-nav align-items-center">
                <div class="d-none d-lg-inline-block">
                    <span class="navbar-text mr-3">Spark Purpose - Website UI Kit</span>
                </div>
                <div>
                    <ul class="nav">
                        <li class="nav-item dropdown ml-lg-2">
                            <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                                <img alt="Image placeholder" src="assets/img/icons/flags/us.svg">
                                <span class="d-none d-lg-inline-block">United States</span>
                                <span class="d-lg-none">EN</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm">
                                <a href="#" class="dropdown-item"><img alt="Image placeholder" src="assets/img/icons/flags/es.svg">Spanish</a>
                                <a href="#" class="dropdown-item"><img alt="Image placeholder" src="assets/img/icons/flags/ro.svg">Romanian</a>
                                <a href="#" class="dropdown-item"><img alt="Image placeholder" src="assets/img/icons/flags/gr.svg">Greek</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Support</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-action="omnisearch-open" data-target="#omnisearch"><i class="fas fa-search"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">{{__('Login')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">{{__('Register')}}</a>
                        </li>
                        {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link pr-0" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--<i class="fas fa-user-circle"></i>--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">--}}
                        {{--<h6 class="dropdown-header">User menu</h6>--}}
                        {{--<a class="dropdown-item" href="#">--}}
                        {{--<i class="fas fa-user"></i>Account--}}
                        {{--</a>--}}
                        {{--<a class="dropdown-item" href="#">--}}
                        {{--<span class="float-right badge badge-primary">4</span>--}}
                        {{--<i class="fas fa-envelope"></i>Messages--}}
                        {{--</a>--}}
                        {{--<a class="dropdown-item" href="#">--}}
                        {{--<i class="fas fa-cog"></i>Settings--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-divider" role="presentation"></div>--}}
                        {{--<a class="dropdown-item" href="#">--}}
                        {{--<i class="fas fa-sign-out-alt"></i>Sign out--}}
                        {{--</a>--}}
                        {{--</div>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main navbar -->
    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
        <div class="container px-lg-0">
            <!-- Logo -->
            <a class="navbar-brand mr-lg-5" href="index.html">
                {{--<img alt="Image placeholder" src="assets/img/brand/white.png" id="navbar-logo" style="height: 50px;">--}}
                <img alt="Image placeholder" src="/img/white-logo.png" id="navbar-logo" style="height: 50px;">
            </a>
            <!-- Navbar collapse trigger -->
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar nav -->
            <div class="collapse navbar-collapse" id="navbar-main-collapse">
                <ul class="navbar-nav align-items-lg-center">
                    <!-- Home - Overview  -->
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Overview</a>
                    </li>
                    <!-- Pages menu -->
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-arrow p-0">
                            <ul class="list-group list-group-flush">
                                <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Code_2.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <!-- Media body -->
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Landing</h6>
                                                <p class="mb-0">A great point to start from.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/agency.html">
                                                Agency
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/app.html">
                                                App
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/blog.html">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/classic.html">
                                                Classic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/cloud-hosting.html">
                                                Cloud hosting
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/digital.html">
                                                Digital
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/event-music.html">
                                                Event music
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/features.html">
                                                Features
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/portfolio.html">
                                                Portfolio
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/presentation.html">
                                                Presentation
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/saas.html">
                                                Saas
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/services.html">
                                                Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/landing/software.html">
                                                Software
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Code.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <!-- Media body -->
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Secondary</h6>
                                                <p class="mb-0">Examples for any scenario.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/about-classic.html">
                                                About classic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/about.html">
                                                About
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/blog.html">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/blog-article.html">
                                                Blog article
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/blog-masonry.html">
                                                Blog masonry
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/careers.html">
                                                Careers
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/careers-single.html">
                                                Careers single
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/contact.html">
                                                Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/contact-simple.html">
                                                Contact simple
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/get-started.html">
                                                Get started
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/portfolio.html">
                                                Portfolio
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/portfolio-fullscreen.html">
                                                Portfolio fullscreen
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/pricing-charts.html">
                                                Pricing charts
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/pricing-comparison.html">
                                                Pricing comparison
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/pricing-simple.html">
                                                Pricing simple
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/services.html">
                                                Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/secondary/team.html">
                                                Team
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Secure_Files.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <!-- Media body -->
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Authentication</h6>
                                                <p class="mb-0">Examples for any scenario.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="text-sm text-muted dropdown-header px-0">Basic</li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/basic-login.html">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/basic-register.html">
                                                Register
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/basic-recover.html">
                                                Recover
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="text-sm text-muted dropdown-header px-0">Cover</li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/cover-login.html">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/cover-register.html">
                                                Register
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/cover-recover.html">
                                                Recover
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="text-sm text-muted dropdown-header px-0">Simple</li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/simple-login.html">
                                                Login
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/simple-register.html">
                                                Register
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/authentication/simple-recover.html">
                                                Recover
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Task.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <!-- Media body -->
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Account</h6>
                                                <p class="mb-0">Account management made cool.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="text-sm text-muted dropdown-header px-0">Account</li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/account-billing.html">
                                                Billing
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/account-notifications.html">
                                                Notifications
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/account-profile.html">
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/account-profile-public.html">
                                                Profile public
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/account-settings.html">
                                                Settings
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="text-sm text-muted dropdown-header px-0">Board</li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/board-connections.html">
                                                Connections
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/board-overview.html">
                                                Overview
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/board-projects.html">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/board-tasks.html">
                                                Tasks
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="text-sm text-muted dropdown-header px-0">Listing</li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/listing-orders.html">
                                                Orders
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/listing-projects.html">
                                                Projects
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/account/listing-users.html">
                                                Users
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Cart_Add_2.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <!-- Media body -->
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Shop</h6>
                                                <p class="mb-0">Complete flow for online shops.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="text-sm text-muted dropdown-header px-0">Shop</li>
                                        <li>
                                            <a class="dropdown-item" href="pages/shop/shop-landing.html">
                                                Landing
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/shop/shop-products.html">
                                                Products
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/shop/shop-product.html">
                                                Product
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="text-sm text-muted dropdown-header px-0">Checkout</li>
                                        <li>
                                            <a class="dropdown-item" href="pages/shop/checkout-cart.html">
                                                Cart
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/shop/checkout-cart-empty.html">
                                                Cart empty
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/shop/checkout-customer.html">
                                                Customer
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/shop/checkout-payment.html">
                                                Payment
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/shop/checkout-shipping.html">
                                                Shipping
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-animate dropdown-submenu" data-toggle="hover">
                                    <a href="#" class="list-group-item list-group-item-action dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Cog_Wheels.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <!-- Media body -->
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Utility</h6>
                                                <p class="mb-0">Error pages and everything else.</p>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="dropdown-item" href="pages/utility/coming-soon.html">
                                                Coming soon
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/utility/error-404.html">
                                                Error 404
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/utility/faq.html">
                                                Faq
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/utility/support.html">
                                                Support
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/utility/topic.html">
                                                Topic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="pages/utility/topic-simple.html">
                                                Topic simple
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Sections menu -->
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sections</a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-arrow p-0">
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="sections.html" class="list-group-item list-group-item-action" role="button">
                                        <div class="media d-flex align-items-center">
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Apps.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Explore all sections</h6>
                                                <p class="mb-0">Awesome section examples for any scenario.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a href="sections.html#headers" class="dropdown-item">Headers</a>
                                        <a href="sections.html#footers" class="dropdown-item">Footers</a>
                                        <a href="sections.html#blog" class="dropdown-item">Blog</a>
                                        <a href="sections.html#call-to-action" class="dropdown-item">Call to action</a>
                                        <a href="sections.html#clients" class="dropdown-item">Clients</a>
                                        <a href="sections.html#collapse" class="dropdown-item">Collapse</a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="sections.html#covers" class="dropdown-item">Covers</a>
                                        <a href="sections.html#features" class="dropdown-item">Features</a>
                                        <a href="sections.html#milestone" class="dropdown-item">Milestone</a>
                                        <a href="sections.html#pricing" class="dropdown-item">Pricing</a>
                                        <a href="sections.html#projects" class="dropdown-item">Projects</a>
                                        <a href="sections.html#subscribe" class="dropdown-item">Subscribe</a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="sections.html#swiper" class="dropdown-item">Swiper</a>
                                        <a href="sections.html#tables" class="dropdown-item">Tables</a>
                                        <a href="sections.html#team" class="dropdown-item">Team</a>
                                        <a href="sections.html#testimonials" class="dropdown-item">Testimonials</a>
                                        <a href="sections.html#video" class="dropdown-item">Video</a>
                                    </div>
                                </div>
                            </div>
                            <div class="delimiter-top py-3 px-4">
                                <span class="badge badge-soft-success">Yaass!</span>
                                <p class="mt-2 mb-0">
                                    Explore, switch, customize any component, section or page and make your website rich its full potential.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg dropdown-menu-arrow p-0">
                            <ul class="list-group list-group-flush">
                                <li>
                                    <a href="docs/index.html" class="list-group-item list-group-item-action" role="button">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/DOC_File.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <!-- Media body -->
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Documentation</h6>
                                                <p class="mb-0">Awesome section examples for any scenario.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="docs/components/index.html" class="list-group-item list-group-item-action" role="button">
                                        <div class="media d-flex align-items-center">
                                            <!-- SVG icon -->
                                            <figure style="width: 50px;">
                                                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Mobile_UI.svg" class="svg-inject img-fluid" style="height: 50px;">
                                            </figure>
                                            <!-- Media body -->
                                            <div class="media-body ml-3">
                                                <h6 class="mb-1">Components</h6>
                                                <p class="mb-0">Awesome section examples for any scenario.</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-menu-links rounded-bottom delimiter-top p-4">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <a href="docs/getting-started/installation.html" class="dropdown-item">Installation</a>
                                        <a href="docs/getting-started/file-structure.html" class="dropdown-item">File structure</a>
                                        <a href="docs/getting-started/build-tools.html" class="dropdown-item">Build tools</a>
                                        <a href="docs/getting-started/customization.html" class="dropdown-item">Customization</a>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="docs/getting-started/plugins.html" class="dropdown-item">Using plugins</a>
                                        <a href="docs/components/index.html" class="dropdown-item">Components</a>
                                        <a href="docs/plugins/animate.html" class="dropdown-item">Plugins</a>
                                        <a href="docs/support.html" class="dropdown-item">Support</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item d-lg-none d-xl-block">
                        <a class="nav-link" href="docs/changelog.html" target="_blank">What's new</a>
                    </li>
                    <li class="nav-item mr-0">
                        <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="nav-link d-lg-none">Purchase now</a>
                        <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" target="_blank" class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Go to Bootstrap Themes">
                            <span class="btn-inner--icon"><i class="fas fa-shopping-cart"></i></span>
                            <span class="btn-inner--text">Purchase now</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Omnisearch -->
<div id="omnisearch" class="omnisearch">
    <div class="container">
        <!-- Search form -->
        <form class="omnisearch-form">
            <div class="form-group">
                <div class="input-group input-group-merge input-group-flush">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Type and hit enter ...">
                </div>
            </div>
        </form>
        <div class="omnisearch-suggestions">
            <h6 class="heading">Search Suggestions</h6>
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a class="list-link" href="#">
                                <i class="fas fa-search"></i>
                                <span>macbook pro</span> in Laptops
                            </a>
                        </li>
                        <li>
                            <a class="list-link" href="#">
                                <i class="fas fa-search"></i>
                                <span>iphone 8</span> in Smartphones
                            </a>
                        </li>
                        <li>
                            <a class="list-link" href="#">
                                <i class="fas fa-search"></i>
                                <span>macbook pro</span> in Laptops
                            </a>
                        </li>
                        <li>
                            <a class="list-link" href="#">
                                <i class="fas fa-search"></i>
                                <span>beats pro solo 3</span> in Headphones
                            </a>
                        </li>
                        <li>
                            <a class="list-link" href="#">
                                <i class="fas fa-search"></i>
                                <span>smasung galaxy 10</span> in Phones
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-content">
    <!-- Header (v1) -->
    <section class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
        <div class="section-inner bg-gradient-primary"></div>
        <!-- SVG illustration -->
        <div class="pt-7 position-absolute middle right-0 col-lg-7 col-xl-6 d-none d-lg-block">
            <figure class="w-100" style="max-width: 1000px;">
                <img alt="Image placeholder" src="assets/img/svg/illustrations/work-chat.svg" class="svg-inject img-fluid" style="height: 1000px;">
            </figure>
        </div>
        <!-- SVG background -->
        <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
            <figure class="w-100 d-none d-lg-block">
                <img alt="Image placeholder" src="assets/img/svg/backgrounds/bg-4.svg" class="svg-inject" style="height: 1000px;">
            </figure>
        </div>
        <!-- Hero container -->
        <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
            <div class="col">
                <div class="row">
                    <div class="col-lg-5 col-xl-6 text-center text-lg-left">
                        <div class="d-none d-lg-block mb-4">
                            <div class="alert alert-modern alert-dark">
                  <span class="badge badge-danger badge-pill">
                    Hot
                  </span>
                                <span class="alert-content">Dark mode, awesome shortcode library and more.</span>
                            </div>
                        </div>
                        <div>
                            <h2 class="text-white mb-4">
                                <span class="display-4 font-weight-light">See it. Love it</span>
                                <span class="d-block">Purpose <strong class="font-weight-light">Website UI Kit</strong></span>
                            </h2>
                            <p class="lead text-white">A unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                            <div class="mt-5">
                                <a href="#sct-page-examples" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                                    <span class="btn-inner--text">Page Examples</span>
                                    <span class="btn-inner--icon"><i class="fas fa-angle-right"></i></span>
                                </a>
                                <a href="#sct-features" class="btn btn-outline-white rounded-pill hover-translate-y-n3 btn-icon d-none d-xl-inline-block scroll-me">
                                    <span class="btn-inner--icon"><i class="fas fa-file-alt"></i></span>
                                    <span class="btn-inner--text">More Features</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v1) -->
    <section id="sct-page-examples" class="slice bg-section-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Code_2.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Landing Pages</h5>
                            <p class="text-muted">Impress with these beautiful landing pages.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Code.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Secondary Pages</h5>
                            <p class="text-muted">Awesome collection of pages for any scenario.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Secure_Files.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Authentication</h5>
                            <p class="text-muted">Provide users good looking forms that inspire trust.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Task.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Account Pages</h5>
                            <p class="text-muted">Profile and account managemend made cool.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Cart_Add_2.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Shop Pages</h5>
                            <p class="text-muted">Complete front-end flow for e-commerce website.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="card text-center hover-shadow-lg hover-translate-y-n10">
                        <div class="px-4 py-5">
                            <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Cog_Wheels.svg" class="svg-inject" style="height: 70px;">
                        </div>
                        <div class="px-4 pb-5">
                            <h5>Utility Pages</h5>
                            <p class="text-muted">Error pages and everything else can be found here.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fluid-paragraph text-center mt-5">
            <p>
                <strong class="text-primary">*Good to know!</strong> You are not limited to the examples we've built. We have the liberty to choose any of the page layouts and components from the package and create your own version.
            </p>
        </div>
    </section>
    <!-- Features (v2) -->
    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-5 order-lg-2">
                    <div class=" pr-lg-4">
                        <h5 class=" h3">Change the way you build wesites. Forever.</h5>
                        <p class="lead mt-4 mb-5">With Purpose you get components and examples, including tons of variables that will help you customize this theme with ease.</p><a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="link link-underline-primary">Purchase now</a>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <img alt="Image placeholder" src="assets/img/theme/light/presentation-1.png" class="img-fluid img-center">
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v3) -->
    <section class="slice slice-lg">
        <div class="container">
            <div class="row row-grid justify-content-around align-items-center">
                <div class="col-lg-5">
                    <div class="">
                        <h5 class=" h3">A complete solution for developers &amp; designers</h5>
                        <p class="lead my-4">With Purpose you get components and examples, including tons of variables that will help you customize this theme with ease.</p>
                        <ul class="list-unstyled">
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                                            <i class="fas fa-store-alt"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Perfect for modern startups</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                                            <i class="fas fa-palette"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Built with customization and ease-of-use at its core</span>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                                            <i class="fas fa-cog"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="h6 mb-0">Quality design and thoughfully crafted code</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img alt="Image placeholder" src="assets/img/theme/light/presentation-2.png" class="img-fluid img-center">
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v4) -->
    <section class="slice slice-lg bg-section-secondary overflow-hidden">
        <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
            <figure class="w-100">
                <img alt="Image placeholder" src="assets/img/svg/backgrounds/bg-2.svg" class="svg-inject" style="height: 1000px;">
            </figure>
        </div>
        <div class="container position-relative zindex-100">
            <div class="mb-5 px-3 text-center">
          <span class="badge badge-soft-success badge-pill badge-lg">
            Build tools
          </span>
                <h3 class=" mt-4">Built for awesomeness</h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card px-3">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-center">
                                <div class="icon bg-gradient-primary text-white rounded-circle icon-shape shadow-primary">
                                    <i class="fab fa-html5"></i>
                                </div>
                                <div class="icon-text pl-4">
                                    <h5 class="mb-0">Created with the latest technologies</h5>
                                </div>
                            </div>
                            <p class="mt-4 mb-0">We use the latest technologies and tools in order to create a better code that not only works great, but it is easy easy to work with too.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card px-3">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-center">
                                <div class="icon bg-gradient-warning text-white rounded-circle icon-shape shadow-warning">
                                    <i class="fab fa-node-js"></i>
                                </div>
                                <div class="icon-text pl-4">
                                    <h5 class="mb-0">Built by developers for developers</h5>
                                </div>
                            </div>
                            <p class="mt-4 mb-0">You don't only need a theme, but also great tools in order to ease the process or building and customizing. And this is exactly what we offer you.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card px-3">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-center">
                                <div class="icon bg-gradient-info text-white rounded-circle icon-shape shadow-info">
                                    <i class="fas fa-thumbs-up"></i>
                                </div>
                                <div class="icon-text pl-4">
                                    <h5 class="mb-0">Made for great first impressions</h5>
                                </div>
                            </div>
                            <p class="mt-4 mb-0">is lighter and faster than most of the themes out there which means you get more for less. Check out the components and examples pages.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v5) -->
    <section class="slice slice-xl has-floating-items bg-gradient-primary" id=sct-call-to-action><a href="#sct-call-to-action" class="tongue tongue-up tongue-section-secondary" data-scroll-to>
            <i class="fas fa-angle-up"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-white">Complete features at your hand</h1>
                    <div class="row justify-content-center mt-4">
                        <div class="col-lg-8">
                            <p class="lead text-white">
                                Purpose is a great premium UI package including all the important and needed features so you can jumpstart the hard work and get right to the website creation fast and easy with more than 100 customized Bootstrap components and 15+ integrated plugins.
                            </p>
                            <div class="btn-container mt-5">
                                <a href="https://themes.getbootstrap.com/product/purpose-website-ui-kit/" class="btn btn-dark rounded-pill btn-icon hover-translate-y-n3 mb-4 mb-md-0">
                    <span class="btn-inner--icon">
                      <i class="fas fa-shopping-basket"></i>
                    </span>
                                    <span class="btn-inner--text">Purchase now</span>
                                </a>
                                <a href="docs/index.html" class="btn btn-white rounded-pill btn-icon hover-translate-y-n3">
                    <span class="btn-inner--icon">
                      <i class="fas fa-book"></i>
                    </span>
                                    <span class="btn-inner--text">Read the Docs</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container floating-items">
            <div class="icon-floating bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Apps.svg" class="svg-inject">
            </div>
            <div class="icon-floating icon-lg bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Apple.svg" class="svg-inject">
            </div>
            <div class="icon-floating icon-sm bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Ballance.svg" class="svg-inject">
            </div>
            <div class="icon-floating icon-lg bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Book.svg" class="svg-inject">
            </div>
            <div class="icon-floating bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Chat.svg" class="svg-inject">
            </div>
            <div class="icon-floating icon-sm bg-white floating">
                <span></span>
                <img alt="Image placeholder" src="assets/img/icons/essential/detailed/Coffee.svg" class="svg-inject">
            </div>
        </div>
    </section>
    <!-- Testimonials (v1) -->
    <section class="slice slice-lg bg-section-secondary">
        <div class="container">
            <div class="mb-5 text-center">
                <h3 class=" mt-4">What our customers say</h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">Start building fast, beautiful and modern looking websites in no time using our theme.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="swiper-js-container overflow-hidden">
                        <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide p-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image placeholder" src="assets/img/theme/light/team-1-800x800.jpg" class="avatar  rounded-circle">
                                                </div>
                                                <div class="pl-3">
                                                    <h5 class="h6 mb-0">Heather Wright</h5>
                                                    <small class="d-block text-muted">Google</small>
                                                </div>
                                            </div>
                                            <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                            <span class="static-rating static-rating-sm">
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide p-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image placeholder" src="assets/img/theme/light/team-2-800x800.jpg" class="avatar  rounded-circle">
                                                </div>
                                                <div class="pl-3">
                                                    <h5 class="h6 mb-0">Monroe Parker</h5>
                                                    <small class="d-block text-muted">Apple</small>
                                                </div>
                                            </div>
                                            <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                            <span class="static-rating static-rating-sm">
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide p-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image placeholder" src="assets/img/theme/light/team-3-800x800.jpg" class="avatar  rounded-circle">
                                                </div>
                                                <div class="pl-3">
                                                    <h5 class="h6 mb-0">John Sullivan</h5>
                                                    <small class="d-block text-muted">Amazon</small>
                                                </div>
                                            </div>
                                            <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                            <span class="static-rating static-rating-sm">
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide p-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image placeholder" src="assets/img/theme/light/team-4-800x800.jpg" class="avatar  rounded-circle">
                                                </div>
                                                <div class="pl-3">
                                                    <h5 class="h6 mb-0">James Lewis</h5>
                                                    <small class="d-block text-muted">Google</small>
                                                </div>
                                            </div>
                                            <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                            <span class="static-rating static-rating-sm">
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide p-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <img alt="Image placeholder" src="assets/img/theme/light/team-5-800x800.jpg" class="avatar  rounded-circle">
                                                </div>
                                                <div class="pl-3">
                                                    <h5 class="h6 mb-0">Julia Howe</h5>
                                                    <small class="d-block text-muted">Google</small>
                                                </div>
                                            </div>
                                            <p class="mt-4 lh-180">Amazing template! All-in-one, clean code, beautiful design, and really not hard to work with.Highly recommended for any kind on website.</p>
                                            <span class="static-rating static-rating-sm">
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features (v7) -->
    <section class="slice slice-lg">
        <div class="container">
            <div class="mb-5 text-center">
                <h3 class=" mt-4">Really useful features</h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180">You get all Bootstrap components fully customized. Besides, you receive another numerous plugins out of the box and ready to use.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                        <h5 class="">Latest Bootstrap</h5>
                        <p class=" mt-2 mb-0">A responsive and mobile-first theme built with the world's most popular component library.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fab fa-sass"></i>
                            </div>
                        </div>
                        <h5 class="">Built with Sass</h5>
                        <p class=" mt-2 mb-0">Change one variable and the theme adapts. Colors, fonts, sizes ... you name it.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fas fa-layer-group"></i>
                            </div>
                        </div>
                        <h5 class="">700+ Components</h5>
                        <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                        </div>
                        <h5 class="">Everything is modular</h5>
                        <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fas fa-tint"></i>
                            </div>
                        </div>
                        <h5 class="">Extended color palette</h5>
                        <p class=" mt-2 mb-0">A beautiful color palette that can be easily modified with our nicely coded Sass files.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fas fa-code"></i>
                            </div>
                        </div>
                        <h5 class="">15+ integrated plugins</h5>
                        <p class=" mt-2 mb-0">More functionality with the ready to use plugins we have integrated in this theme for you.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fas fa-font"></i>
                            </div>
                        </div>
                        <h5 class="">1500 vector icons</h5>
                        <p class=" mt-2 mb-0">One nice collection of icons so you can add a more intuitive and playful touch to your website.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fas fa-grimace"></i>
                            </div>
                        </div>
                        <h5 class="">SVG illustrations</h5>
                        <p class=" mt-2 mb-0">One nice collection of icons so you can add a more intuitive and playful touch to your website.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </div>
                        <h5 class="">Latest Bootstrap</h5>
                        <p class=" mt-2 mb-0">A responsive and mobile-first theme built with the world's most popular component library.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fab fa-sass"></i>
                            </div>
                        </div>
                        <h5 class="">Built with Sass</h5>
                        <p class=" mt-2 mb-0">Change one variable and the theme adapts. Colors, fonts, sizes ... you name it.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fas fa-layer-group"></i>
                            </div>
                        </div>
                        <h5 class="">700+ Components</h5>
                        <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-4">
                        <div class="py-5">
                            <div class="icon text-primary">
                                <i class="fas fa-puzzle-piece"></i>
                            </div>
                        </div>
                        <h5 class="">Everything is modular</h5>
                        <p class=" mt-2 mb-0">Nicely customized components that can be reused anytime and anywhere in your project.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action (v10) -->
    <section class="slice slice-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card bg-gradient-dark shadow hover-shadow-lg border-0 position-relative zindex-100">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-start">
                                <div class="icon">
                                    <i class="fas fa-file-alt text-white"></i>
                                </div>
                                <div class="icon-text">
                                    <h3 class="text-white h4">70+ example pages</h3>
                                    <p class="text-white mb-0">You get 70+ pre-built pages for a variety of purposes that makes it the ideal point to start building websites of any kind.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-primary shadow hover-shadow-lg border-0 position-relative zindex-100">
                        <div class="card-body py-5">
                            <div class="d-flex align-items-start">
                                <div class="icon text-white">
                                    <i class="fas fa-question-circle"></i>
                                </div>
                                <div class="icon-text">
                                    <h5 class="h4 text-white">6 months technical support</h5>
                                    <p class="mb-0 text-white">Use our dedicated support email to send your issues or suggestions. We are here to help anytime: <strong>support@webpixels.io</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<footer id="footer-main">
    <div class="footer footer-dark bg-gradient-primary footer-rotate">
        <div class="container">
            <div class="row pt-md">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <a href="index.html">
                        <img src="assets/img/brand/white.png" alt="Footer logo" style="height: 70px;">
                    </a>
                    <p>Purpose is a unique and beautiful collection of UI elements that are all flexible and modular. A complete and customizable solution to building the website of your dreams.</p>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Account</h6>
                    <ul class="list-unstyled">
                        <li><a href="pages/account-profile.html">Profile</a></li>
                        <li><a href="pages/account-settings.html">Settings</a></li>
                        <li><a href="pages/account-billing.html">Billing</a></li>
                        <li><a href="pages/account-notifications.html">Notifications</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">About</h6>
                    <ul class="list-unstyled text-small">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-4 mb-5 mb-lg-0">
                    <h6 class="heading mb-3">Company</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Support</a></li>
                    </ul>
                </div>
            </div>
            <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        &copy; 2018-2019 <a href="https://webpixels.io" class="font-weight-bold" target="_blank">{{ config('app.name') }}</a>. All rights reserved.
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Core JS - includes jquery, bootstrap, popper, in-view and sticky-kit -->
<script src="js/purpose.core.js"></script>
<!-- Purpose JS -->
<script src="js/purpose.js"></script>
</body>

</html>