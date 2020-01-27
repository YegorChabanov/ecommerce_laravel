@extends('core')

@section('content')
    <div class="container">

        <!-- Section cart -->
        <section class="section my-5 pb-5">

            <div class="card card-ecommerce">
                <div class="card-body">
                    @if(count($cartArray) > 0)
                    <!-- Shopping Cart table -->
                    <div class="table-responsive">
                            <table class="table product-table">

                                <!-- Table head -->
                                <thead class="mdb-color lighten-5">
                                <tr>
                                    <th></th>
                                    <th class="font-weight-bold">
                                        <strong>Product</strong>
                                    </th>
                                    <th></th>
                                    <th class="font-weight-bold">
                                        <strong>Price</strong>
                                    </th>
                                    <th class="font-weight-bold">
                                        <strong>QTY</strong>
                                    </th>
                                    <th class="font-weight-bold">
                                        <strong>Total</strong>
                                    </th>
                                    <th></th>
                                </tr>
                                </thead>
                                <!-- /.Table head -->
                                <!-- Table body -->
                                <tbody>
                                @foreach($cartArray as $cartItem)
                                <!-- First row -->
                                <tr>
                                    <th scope="row">
                                        <img src="{{$cartItem['product']->image}}" alt="" class="img-fluid z-depth-0">
                                    </th>
                                    <td>
                                        <h5 class="mt-3">
                                            <strong>{{$cartItem['product']->title}}</strong>
                                        </h5>
                                    </td>
                                    <td></td>
                                    <td>${{$cartItem['product']->price}}</td>
                                    <td class="text-center text-md-left">
                                        <span class="qty">{{$cartItem['quantity']}} </span>
                                        <div class="btn-group radio-group ml-2">
                                            <a class="btn btn-sm btn-primary btn-rounded waves-effect waves-light" href="/cart/{{$cartItem['product']->slug}}/delete">—</a>
                                            <a class="btn btn-sm btn-primary btn-rounded waves-effect waves-light" href="/cart/{{$cartItem['product']->slug}}">+</a>
                                        </div>
                                    </td>
                                    <td class="font-weight-bold">
                                        <strong>${{ $cartItem['quantity'] * $cartItem['product']->price}}</strong>
                                    </td>
                                    <td>
                                        <a type="button" class="btn btn-sm btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove item" href="/cart/{{$cartItem['product']->slug}}/unset">X
                                        </a>
                                    </td>
                                </tr>
                                <!-- /.First row -->
                                @endforeach
                                <!-- Second row -->
                                <tr>
                                    <td colspan="3"></td>
                                    <td>
                                        <h4 class="mt-2">
                                            <strong>Total:</strong>
                                        </h4>
                                    </td>
                                    <td class="text-right">
                                        <h4 class="mt-2">
                                            <strong>${{$totalPrice}}</strong>
                                        </h4>
                                    </td>
                                    <td colspan="3" class="text-right">
                                        <a type="button" class="btn btn-primary btn-rounded waves-effect waves-light" href="/checkout">Complete purchase
                                            <i class="fas fa-angle-right right"></i>
                                        </a>
                                    </td>
                                </tr>
                                <!-- Second row -->

                                </tbody>
                                <!-- /.Table body -->

                            </table>
                    </div>
                    <!-- /.Shopping Cart table -->
                    @else
                        <div class="row justify-content-center">
                                <h3>Your shopping cart is empty, but it doesn't have to be.</h3>
                                <img src="https://cdn3.iconfinder.com/data/icons/infinicons-shopping-carts/100/shopping_Sad-512.png" alt="Empty Cart">
                        </div>
                    @endif
                </div>

            </div>

        </section>
        <!-- /Section cart -->

    </div>
@endsection
