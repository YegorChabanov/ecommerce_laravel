@extends('core')

@section('content')
    <div class="container wow fadeIn">

        <!-- Heading -->
        <h2 class="my-5 h2 text-center">Checkout form</h2>

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-8 mb-4">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <form class="card-body" method="post" action="/checkout">
                    @csrf
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--firstName-->
                                <div class="md-form ">
                                    <input type="text" name="first_name" id="firstName" class="form-control" placeholder="{{Auth::user()->name}}" value="{{Auth::user()->name}}">
                                    <label for="firstName" class="">First name</label>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--lastName-->
                                <div class="md-form">
                                    <input type="text" name="last_name" id="lastName" class="form-control">
                                    <label for="lastName" class="">Last name</label>
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--email-->
                        <div class="md-form mb-5">
                            <input type="number" name="phone" id="phone" class="form-control">
                            <label for="phone" class="active">Phone Number</label>
                        </div>

                        <!--address-->
                        <div class="md-form mb-5">
                            <input type="text" name="address" id="address" class="form-control" placeholder="Country, City, Street, House number">
                            <label for="address" class="active">Address</label>
                        </div>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <label for="zip">Postal code:</label>
                                <input type="number" name="zip" class="form-control" id="zip" placeholder="" required="">
                                <div class="invalid-feedback">
                                    Postal code required.
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->
                        <div class="md-form">
                            <i class="fas fa-pencil-alt prefix"></i>
                            <textarea id="form10" name="comment" class="md-textarea form-control" rows="3"></textarea>
                            <label for="form10">Your Comment</label>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block waves-effect waves-light" type="submit">Confirm</button>

                    </form>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">

                <!-- Heading -->
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your order:</span>
                </h4>

                <!-- Cart -->
                <ul class="list-group mb-3 z-depth-1">
                    @foreach($cartArray as $cartItem)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><small>({{$cartItem['quantity']}}x)</small> {{$cartItem['product']->title}}</h6>
                        </div>
                        <span class="text-muted">${{$cartItem['product']->price}}</span>
                    </li>
                    @endforeach

                    <li class="list-group-item d-flex justify-content-between">
                        <span><strong>Total:</strong></span>
                        <strong>${{$totalPrice}}</strong>
                    </li>
                </ul>
                <!-- Cart -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
@endsection
