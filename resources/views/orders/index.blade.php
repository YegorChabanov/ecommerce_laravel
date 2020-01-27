@extends('core')

@section('content')
    <section class="p-2">
        @if (session('status'))
            <div class="container">
                <div class="alert alert-success text-center" role="alert">
                    {{ session('status') }}
                </div>
            </div>
        @endif

        <div class="container p-3">
            <div class="row justify-content-center">

                <div class="container wow fadeIn">

                    <!-- Heading -->
                    <h2 class="my-5 h2 text-center">Order #{{$order->id}}</h2>

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-8 mb-4">

                            <!--Card-->
                            <div class="card">

                                <!--Card content-->
                                <div class="card-body">
                                <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-6 mb-2">

                                            <!--firstName-->
                                            <div class="md-form ">
                                                <p><strong>First Name: </strong>{{$order->first_name}}</p>
                                            </div>

                                        </div>
                                        <!--Grid column-->

                                        <!--Grid column-->
                                        <div class="col-md-6 mb-2">

                                            <!--lastName-->
                                            <div class="md-form">
                                                <p><strong>Last Name: </strong>{{$order->last_name}}</p>
                                            </div>

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--email-->
                                    <div class="md-form mb-5">
                                        <p><strong>Phone Number: </strong>{{$order->phone}}</p>
                                    </div>

                                    <!--address-->
                                    <div class="md-form mb-5">
                                        <p><strong>Address: </strong>{{$order->address}}</p>
                                    </div>

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-lg-4 col-md-6 mb-4">
                                            <p><strong>Postal Code: </strong>{{$order->zip}}</p>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->
                                    <div class="md-form">
                                        <p><strong>Comment: </strong>{{$order->comment}}</p>
                                    </div>
                                    <hr class="mb-4">
                                    <a class="btn btn-blue" href="/orders">Back</a>
                                </div>

                            </div>
                            <!--/.Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-4 mb-4">

                            <!-- Heading -->
                            <h4 class="d-flex justify-content-between align-items-center mb-3">
                                <span class="text-muted">Ordered products:</span>
                            </h4>

                            <!-- Cart -->
                            <ul class="list-group mb-3 z-depth-1">
                                @foreach($order->products as $product)
                                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                                        <div>
                                            <h6 class="my-0"><small>({{$product->pivot->quantity}}x)</small> {{$product->title}}</h6>
                                        </div>
                                        <span class="text-muted">${{$product->price}}</span>
                                    </li>
                                @endforeach

                                <li class="list-group-item d-flex justify-content-between">
                                    <span><strong>Total:</strong></span>
                                    <strong>${{$totalAmount}}</strong>
                                </li>
                            </ul>
                            <!-- Cart -->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>

            </div>
        </div>
    </section>
@endsection
