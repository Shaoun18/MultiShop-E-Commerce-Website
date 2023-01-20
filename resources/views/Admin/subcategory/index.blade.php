@extends('Admin.master')

@section('tittle')
    Add SubCategory Page
@endsection

@section('body')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add SubCategory Form</h5>

                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                            <!-- General Form Elements -->
                            <form action="{{route('new-category')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id" required>
                                            <option value="" disabled selected>------- Select Category Form -------</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">SubCategory Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ' '}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Category Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Category Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="image" type="file" id="formFile">
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Publication Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Published
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="0">
                                            <label class="form-check-label" for="gridRadios2">
                                                UnPublished
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Create new SubCategory</button>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
