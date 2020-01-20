@extends('core')

@section('content')
    <section>
        <div class="container">
        @if (session('status'))
            <div class="alert alert-success text-center" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h4 class="font-weight-bold mt-4 dark-grey-text text-center"><strong>ALL PRODUCTS</strong></h4>
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
                            <!--Card footer-->
                            <div class="card-footer pb-0">
                                <div class="row mb-0">
                                    <span class="float-left"><strong>${{ $product->price }}</strong></span>
                                </div>
                            </div>

                        </div>
                        <!--Card content-->

                        <!--Buttons-->
                        <div class="d-inline-flex">
                            <!--Edit button-->
                            <a class="btn btn-warning" href="/products/{{$product->slug}}/edit">Edit</a>
                            <!--Delete button-->
                            <form action="/products/{{$product->slug}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->
            @endforeach
        </div>
        <!--Grid row-->
        </div>
    </section>
@endsection
