{{-- @extends('frontend.layouts.master') --}}

<header class="header-main-wrap">
    <div id="header-section" class="header-desktop header-v1" data-sticky="1">
        <div class="container">
            <div class="header-inner-wrap">
                <div class="navbar d-flex align-items-center">
                    <div class="logo logo-desktop">
                        <a href="index.html">
                            <img src="" height="" width="80%" alt="{{"Home Rent Logo"}}" />
                        </a>
                    </div>

                    <nav class="main-nav on-hover-menu navbar-expand-lg flex-grow-1">
                        <ul id="main-nav" class="navbar-nav justify-content-end">
                            <li id="menu-item-252" class="nav-item menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-79 current_page_item">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li id="menu-item-256" class="nav-item menu-item menu-item-type-post_type menu-item-object-page"><a class="nav-link" href="{{url('all-apartment')}}">All Apartment</a></li>
                            <li id="menu-item-601" class="nav-item menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home">
                                <a class="nav-link" href="index.html#rental-inquiry">Rental Inquiry</a>
                            </li>
                            <li id="menu-item-253" class="nav-item menu-item menu-item-type-post_type menu-item-object-page"><a class="nav-link" href="blog/index.html">Blog</a></li>

                            @if (Route::has('login')) @auth
                            <li class="nav-item menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a></li>
                            @else
                            <li class="nav-item menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                            @if (Route::has('register'))
                            <li class="nav-item menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                            @endif @endauth @endif
                        </ul>
                    </nav>
                    <!-- main-nav -->

                    <div class="login-register">
                        <ul class="login-register-nav">
                            <li>
                                <a href="{{route('rent.cart')}}" class="btn btn-secondary btn-sm" style="padding: 2px 10px;"><i class="houzez-icon icon-building-cloudy mr-1"></i>Cart</a>
                            </li>

                            {{-- <li>
                                <a href="add-property/index.html" class="btn btn-create-listing hidden-xs hidden-sm">Create a Listing</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <!-- navbar -->
            </div>
            <!-- header-inner-wrap -->
        </div>
        <!-- .container -->
    </div>
    <!-- .header-v1 -->
    <div id="header-mobile" class="header-mobile d-flex align-items-center" data-sticky="">
        <div class="header-mobile-left">
            <button class="btn toggle-button-left">
                <i class="houzez-icon icon-navigation-menu"></i>
            </button>
            <!-- toggle-button-left -->
        </div>
        <!-- .header-mobile-left -->
        <div class="header-mobile-center flex-grow-1">
            <div class="logo logo-mobile">
                <a href="index.html">
                    <img src="{{asset('frontend/ui')}}/wp-content/uploads/2022/06/54.png" height="" width="15%" alt="Mobile logo" />
                </a>
            </div>
        </div>

        <div class="header-mobile-right">
            <button class="btn toggle-button-right">
                <i class="houzez-icon icon-single-neutral-circle ml-1"></i>
            </button>
            <!-- toggle-button-right -->
        </div>
        <!-- .header-mobile-right -->
    </div>
    <!-- header-mobile -->
</header>
<!-- .header-main-wrap -->
