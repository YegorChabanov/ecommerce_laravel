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
                    <strong>Add New Page</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" method="post" action="/pages">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <!-- Title -->
                                <div class="md-form">
                                    <input type="text" name="title" id="materialFormTitle" class="form-control">
                                    <label for="materialFormTitle">*Title</label>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Slug -->
                                <div class="md-form">
                                    <input type="text" name="slug" id="materialFormSlug" class="form-control">
                                    <label for="materialFormSlug">*Slug</label>
                                </div>
                            </div>
                        </div>

                        <!-- Intro -->
                        <div class="md-form mt-0">
                            <input type="text" name="intro" id="materialFormIntro" class="form-control">
                            <label for="materialFormIntro">*Intro</label>
                        </div>

                        <!-- Description -->
                        <div class="md-form">
                            <textarea name="content" id="materialFormContent" class="form-control"></textarea>
                            <label for="materialFormContent">*Content</label>
                        </div>

                        <button class="btn btn-outline-primary btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Create</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form register -->
        </div>
    </div>
@endsection
