@extends('Admin.master')

@section('tittle')
    Edit SubCategory Page
@endsection

@section('body')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Edit SubCategory Form</h5>

                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                            <!-- General Form Elements -->
                            <form action="{{route('update-subcategory', ['id' => $subcategories->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
{{--                                <div class="row mb-3">--}}
{{--                                    <label for="inputText" class="col-sm-2 col-form-label">Category Name</label>--}}
{{--                                    <div class="col-sm-10">--}}
{{--                                        <select class="form-control" name="category_id" required>--}}
{{--                                            <option value="" disabled selected>------- Select Category Form -------</option>--}}
{{--                                            @foreach($subcategories as $category)--}}
{{--                                                <option value="{{$category->id}}">{{$category->name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">SubCategory Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" value="{{$subcategories->name}}" class="form-control">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ' '}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">SubCategory Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" style="height: 100px">{{$subcategories->description}}"</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">SubCategory Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="image" type="file" id="formFile">
                                        <img src="{{asset($subcategories->image)}}" height="100px" width="100px"/>
                                    </div>
                                </div>

                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Publication Status</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" {{$subcategories->status == 1 ?  'checked' : ''}} id="gridRadios1" value="1" checked>
                                            <label class="form-check-label" for="gridRadios1">
                                                Published
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="status" {{$subcategories->status == 0 ?  'checked' : ''}} id="gridRadios2" value="0">
                                            <label class="form-check-label" for="gridRadios2">
                                                UnPublished
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>

                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Update new SubCategory</button>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
