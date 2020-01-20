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
            <!-- Material form create -->
            <div class="card">

                <h5 class="card-header primary-color white-text text-center py-4">
                    <strong>Add New Category</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" method="post" action="/categories/{{$category->name}}">
                        @csrf
                        @method('put')
                        <input type="hidden" name="id" value="{{$category->id}}">
                        <div class="form-row">
                            <div class="col">
                                <!-- Title -->
                                <div class="md-form">
                                    <input type="text" name="name" id="materialFormTitle" class="form-control" value="{{$category->name}}">
                                    <label for="materialFormTitle">*Name of category</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Slug -->
                                <div class="md-form">
                                    <input type="text" name="icon" id="materialFormSlug" class="form-control" value="{{$category->icon}}">
                                    <label for="materialFormSlug">*Class for icon</label>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-outline-primary btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Save</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form create -->
        </div>
    </div>
@endsection
