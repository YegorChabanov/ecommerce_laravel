<!--Navigation-->
<header>
    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav custom-scrollbar">


        <!-- Side navigation links -->

        <li>
            <ul class="collapsible collapsible-accordion">
                <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-shopping-cart"></i>Products<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/products/create" class="waves-effect">Add new product</a>
                            </li>
                            <li>
                                <a href="/products" class="waves-effect">All products</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i>Pages<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/pages/create" class="waves-effect">Add new page</a>
                            </li>
                            <li>
                                <a href="/pages" class="waves-effect">All pages</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-camera-retro"></i>Categories<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/categories/create" class="waves-effect">Add new category</a>
                            </li>
                            <li>
                                <a href="/categories" class="waves-effect">All categories</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li><a class="collapsible-header waves-effect arrow-r"><i class="fab fa-cc-visa"></i>Orders<i class="fas fa-angle-down rotate-icon"></i></a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <a href="/orders" class="waves-effect">All orders</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </li>

        <!--/. Side navigation links -->
        <div class="sidenav-bg mask-strong"></div>
    </ul>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg  navbar-light scrolling-navbar white">
        <div class="container">
            @if(Auth::check())
            <!-- SideNav slide-out button -->
            <div class="float-left mr-2">
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
            </div>
            @endif
            <a class="navbar-brand font-weight-bold" href="/"><strong>eSHOP</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link dark-grey-text font-weight-bold" href="/contacts"><i class="fas fa-envelope blue-text"></i> Contact Us </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dark-grey-text font-weight-bold waves-effect waves-light" href="/cart">
                            @if(count($cartArray) > 0)
                                <span class="badge danger-color">{{count($cartArray)}}</span>
                            @endif
                            <i class="fas fa-shopping-cart blue-text" aria-hidden="true"></i>
                            <span class="clearfix d-none d-sm-inline-block">Cart</span>
                        </a>
                    </li>
                    @if(Auth::check())
                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"><i class="fas fa-user blue-text"></i> {{Auth::user()->name}} </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <form method="post" action="/logout">
                                    @csrf
                                    <button class="dropdown-item waves-effect waves-light">Log out</button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle dark-grey-text font-weight-bold" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"><i class="fas fa-user blue-text"></i> Your Profile </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-cyan" aria-labelledby="navbarDropdownMenuLink-4">
                                <a class="dropdown-item waves-effect waves-light" href="/login">Log in</a>
                                <a class="dropdown-item waves-effect waves-light" href="/register">Register</a>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.Navbar -->

</header>
<!-- /.Navigation -->

<!-- Mega menu -->
<div class="container mt-5 pt-3">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5">

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link" href="/pages/shipping_policy">Shipping Policy</a>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link" href="/pages/warranty_terms">Warranty Terms</a>
                </li>


            </ul>
            <!-- Links -->

            <!-- Search form -->
            <form class="search-form" role="search">
                <div class="form-group md-form my-0 waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->

</div>
<!-- Mega menu -->
