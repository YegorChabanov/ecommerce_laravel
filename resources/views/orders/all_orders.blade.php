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
            @foreach($orders as $order)
                <!-- Card -->
                <div class="card card-cascade wider col-md-5 p-2">

                    <!-- Card image -->
                    <div class="view view-cascade gradient-card-header blue-gradient">

                        <!-- Title -->
                        <h2 class="card-header-title mb-3">{{$order->first_name}} {{$order->last_name}}</h2>
                        <!-- Text -->
                        <p class="mb-0"><i class="fas fa-calendar mr-2"></i>{{$order->created_at}}</p>

                    </div>

                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">

                        <!-- Text -->
                        <p class="card-text">{{$order->address}}</p>
                        <!-- Link -->
                        <a href="/orders/{{$order->id}}" class="blue-text d-flex flex-row-reverse p-2">
                            <h5 class="waves-effect waves-light">Read more<i class="fas fa-angle-double-right ml-2"></i></h5>
                        </a>

                    </div>
                    <!-- Card content -->

                </div>
                <!-- Card -->
            @endforeach
            </div>
        </div>
    </section>
@endsection
