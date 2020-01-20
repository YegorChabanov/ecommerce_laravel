@extends('core')

@section('content')
    <div class="container">
        @if($errors->all())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center p-3">
            <!-- Material form register -->
            <div class="card">

                <h5 class="card-header primary-color white-text text-center py-4">
                    <strong>Edit Product</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" method="post" action="/products/{{$product->slug}}">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <div class="form-row">
                            <div class="col">
                                <!-- Title -->
                                <div class="md-form">
                                    <input type="text" name="title" id="materialFormTitle" class="form-control" value="{{$product->title}}">
                                    <label for="materialFormTitle">*Title</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Slug -->
                                <div class="md-form">
                                    <input type="text" name="slug" id="materialFormSlug" class="form-control" value="{{$product->slug}}">
                                    <label for="materialFormSlug">*Slug</label>
                                </div>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="md-form mt-0">
                            <input type="number" name="price" id="materialFormPrice" class="form-control" value="{{$product->price}}">
                            <label for="materialFormPrice">*Price ($)</label>
                        </div>

                        <!-- Description -->
                        <div class="md-form">
                            <textarea name="description" id="materialFormDescription" class="form-control">{{$product->description}}</textarea>
                            <label for="materialFormDescription">*Description</label>
                        </div>

                        <!-- File input -->
                    {{--                    <div class="form-group">--}}
                    {{--                        <p>Product's image (708x472)</p>--}}
                    {{--                        <label for="materialFormFile"></label>--}}
                    {{--                        <input type="file" name="image" class="form-control-file" id="materialFormFile">--}}
                    {{--                    </div>--}}

                    <!-- button -->
                        <button class="btn btn-outline-primary btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Save</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form register -->
        </div>
    </div>
@endsection
