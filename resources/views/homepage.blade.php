@extends('core')
@section('content')
    <!-- /.Main Container -->
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <!-- Grid row -->
        <div class="row pt-4">

            <!-- Content -->
            <div class="col-lg-12">

                <!-- Section: Intro -->
                <section class="section pt-4">

                    <!-- Grid row -->
                    <div class="row">
                        @if(isset($pages['about_us']))
                        <!--Grid column-->
                        <div class="col-lg-8 col-md-12 mb-3 pb-lg-2">
                            <!--Image -->
                            <div class="view zoom  z-depth-1">

                                <img src="https://mdbootstrap.com/img/Photos/Others/product2.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-white-light">
                                    <div class="dark-grey-text d-flex align-items-center pt-3 pl-4">
                                        <div>
                                            <h2 class="card-title font-weight-bold pt-2"><strong>{{$pages['about_us']['title']}}</strong></h2>
                                            <p class="">{{$pages['about_us']['intro']}}</p>
                                            <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block" href="/pages/about_us">Read more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->
                        @endif

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <!-- Section: Categories -->
                            <section class="section">
                                <ul class="list-group z-depth-1">
                                    @foreach($categories as $category)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a class="dark-grey-text font-small" href="/categories/{{$category->name}}"><i class="{{$category->icon}} dark-grey-text mr-2" aria-hidden="true"></i> {{$category->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </section>
                            <!-- Section: Categories -->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </section>
                <!-- Section: Intro -->

                <!--Section: Products-->
                <section>

                    <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>TOP SELLERS</strong></h4>
                    <hr class="mb-5">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        @foreach($topSellerProducts as $topSellerProduct)
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="{{$topSellerProduct->image}}" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="/products/{{$topSellerProduct->slug}}" class="dark-grey-text">{{$topSellerProduct->title}}</a></strong></h5><span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>${{$topSellerProduct->price}}</strong></span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart" href="/cart/{{$topSellerProduct->slug}}"><i class="fas fa-shopping-cart ml-3"></i></a>
                                                </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        @endforeach
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->
                </section>
                <!--Section: Products-->

                <!--Section: Advertising-->
                <section>

                    @if(isset($pages['sale_10_on_every_smartphone']))
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-12">
                            <!--Image -->
                            <div class="view  z-depth-1">
                                <img src="img/sale.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-stylish-slight">
                                    <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">
                                        <div>
                                            <a>
                                                <span class="badge badge-primary">SALE</span>
                                            </a>
                                            <h2 class="card-title font-weight-bold pt-md-3 pt-1">
                                                <strong>{{$pages['sale_10_on_every_smartphone']['title']}}</strong>
                                            </h2>
                                            <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">{{$pages['sale_10_on_every_smartphone']['intro']}}</p>
                                            <a class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block" href="/pages/sale_10_on_every_smartphone">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                    @endif

                    <!-- Grid row -->
                    <div class="row mt-4 pt-1">
                        @if(isset($pages['order_returns']))
                        <!--Grid column-->
                        <div class="col-lg-8 col-md-12 mb-3 mb-md-4 pb-lg-2">
                            <!--Image -->
                            <div class="view zoom z-depth-1">
                                <img src="https://mdbootstrap.com/img/Photos/Others/product1.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-white-light">
                                    <div class="dark-grey-text d-flex align-items-center pt-4 ml-lg-3 pl-lg-3 pl-md-5">
                                        <div>
                                            <h2 class="card-title font-weight-bold pt-2"><strong>{{$pages['order_returns']['title']}}</strong></h2>
                                            <p class="hidden show-ud-up">{{$pages['order_returns']['intro']}}</p>
                                            <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block" href="/pages/order_returns"></i> Read more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->
                        @endif

                        @if(isset($pages['iphone_11']))
                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">
                            <!--Image -->
                            <div class="view zoom z-depth-1 photo">
                                <img src="/img/iphone11.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-stylish-strong">
                                    <div class="white-text center-elem text-center w-75">
                                        <div class="">
                                            <h2 class="card-title font-weight-bold pt-2"><strong>{{$pages['iphone_11']['title']}}</strong></h2>
                                            <p class="">{{$pages['iphone_11']['intro']}}</p>
                                            <a class="btn btn-info btn-sm btn-rounded" href="/pages/iphone_11"></i> Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->
                        @endif
                    </div>
                    <!--Grid row-->

                </section>
                <!--Section: Advertising-->



                <!-- Section: All items -->
                <section>

                    <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>OUR PRODUCTS</strong></h4>
                    <hr class="mb-5">

                    <!-- Grid row -->
                    <div class="row">
                        @foreach($products as $product)
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="{{$product->image}}" class="img-fluid" alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="/products/{{$product->slug}}" class="dark-grey-text">{{ $product->title }}</a></strong></h5>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                        <li><i class="fas fa-star blue-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>${{ $product->price }}</strong></span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart" href="/cart/{{$product->slug}}"><i class="fas fa-shopping-cart ml-3"></i></a>
                                                </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->
                        @endforeach
                    </div>
                    <!--Grid row-->

                </section>
                <!-- /.Section: All items -->

            </div>
            <!-- /.Content -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- /.Main Container -->
@endsection
