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
    @foreach($pages as $page)
        <div class="container p-3">
    <!-- Card -->
    <div class="card card-cascade wider reverse">
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
            <!-- Title -->
            <h4 class="card-title"><strong>{{$page->title}}</strong></h4>
            <!-- Subtitle -->
            <h6 class="font-weight-bold indigo-text py-2">{{$page->intro}}</h6>
            <!-- Text -->
            <p class="card-text">{{$page->content}}</p>
            <!--Buttons-->
            <div class="d-inline-flex">
                <!--Edit button-->
                <a class="btn btn-warning" href="/pages/{{$page->slug}}/edit">Edit</a>
                <!--Delete button-->
                <form action="/pages/{{$page->slug}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Card -->
        </div>
    @endforeach
    </section>
@endsection
