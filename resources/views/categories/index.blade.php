@extends('core')

@section('content')
<!-- /.Main Container -->
<div class="container">
    <!-- Grid row -->
    <div class="row pt-4">

        <!-- Content -->
        <div class="col-lg-12">

            <!-- Section: Intro -->
            <section class="section pt-4">
                <!-- Grid row -->
                <div class="row">
                @if(isset($aboutUsArticle))
                    <!--Grid column-->
                        <div class="col-lg-8 col-md-12 mb-3 pb-lg-2">
                            <!--Image -->
                            <div class="view zoom  z-depth-1">

                                <img src="https://mdbootstrap.com/img/Photos/Others/product2.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-white-light">
                                    <div class="dark-grey-text d-flex align-items-center pt-3 pl-4">
                                        <div>
                                            <h2 class="card-title font-weight-bold pt-2"><strong>{{$aboutUsArticle->title}}</strong></h2>
                                            <p class="">{{$aboutUsArticle->intro}}</p>
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
                                @foreach($categories as $categoryForList)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small" href="/categories/{{$categoryForList->name}}"><i class="{{$categoryForList->icon}} dark-grey-text mr-2" aria-hidden="true"></i> {{$categoryForList->name}}</a>
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
                <div class="container">
                <h4 class="font-weight-bold mt-4 dark-grey-text text-center"><strong>{{ $category->name }}</strong></h4>
                <hr class="mb-5">

                <!-- Grid row -->
                <div class="row justify-content-center">

                    <!--Grid column-->
                    @foreach($category->products as $product)
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

                                    <h5 class="card-title mb-1"><strong><a href="/products/{{$product->slug}}" class="dark-grey-text">{{$product->title}}</a></strong></h5>
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
                                            <span class="float-left"><strong>${{$product->price}}</strong></span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fas fa-shopping-cart ml-3"></i></a>
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
                </div>
            </section>
            <!--Section: Products-->
@endsection
