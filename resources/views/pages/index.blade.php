@extends('core')

@section('content')
    <div class="container">
        <div class="p-1">
        <div class="view  z-depth-1">
            <img src="{{asset('img/banner.jpg')}}" class="img-fluid" alt="sample image">
        </div>
        </div>
    <div class="divider-new">
        <h3 class="h3-responsive font-weight-bold blue-text mx-3">{{$page->title}}</h3>
    </div>
    <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">
        {{$page->intro}}
    </p>
    <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">
        {{$page->content}}
    </p>
    </div>
@endsection
