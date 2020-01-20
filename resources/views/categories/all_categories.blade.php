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
        @foreach($categories as $category)
            <div class="container p-3">
                <!-- Card -->
                <div class="card card-cascade wider reverse">
                    <!-- Card content -->
                    <div class="card-body card-body-cascade text-center">
                        <!-- Title -->
                        <a class="card-title"><i class="{{$category->icon}} dark-grey-text mr-2" aria-hidden="true"></i><strong>{{$category->name}}</strong></a>
                        <br>
                        <!--Buttons-->
                        <div class="d-inline-flex">
                            <!--Edit button-->
                            <a class="btn btn-warning" href="/categories/{{$category->name}}/edit">Edit</a>
                            <!--Delete button-->
                            <form action="/categories/{{$category->name}}" method="post">
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
