@extends('Admin.master')

@section('tittle')
    Add Product Page
@endsection

@section('body')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Product Form</h5>

                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                            <!-- General Form Elements -->
                            <form action="{{route('new-subcategory')}}" method="post" enctype="multipart/form-data">
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
                                        <select class="form-control" name="category_id" required>
                                            <option value="" disabled selected>------- Select SubCategory Form -------</option>
                                            @foreach($subcategories as $subcategory)
                                                <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Brand Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id" required>
                                            <option value="" disabled selected>------- Select brand Form -------</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Unit Name</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="category_id" required>
                                            <option value="" disabled selected>------- Select Unit Form -------</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}">{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ' '}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Code</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="code" class="form-control">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ' '}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Regular Price</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="regular_price" class="form-control">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ' '}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Selling Price</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="selling_price" class="form-control">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ' '}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Product Stock Amount</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="stock_amount" class="form-control">
                                        <span class="text-danger">{{$errors->has('name') ? $errors->first('name'): ' '}}</span>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Short Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="short_description" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Long Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="long_description" style="height: 100px"></textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Product Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="image" type="file" id="formFile">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Product SubImage</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="subimage" type="file" id="formFile">
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
                                    <button type="submit" class="btn btn-primary">Create new Product</button>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
