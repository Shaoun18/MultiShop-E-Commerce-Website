@extends('Admin.master')

@section('tittle')
    Add Unit Page
@endsection

@section('body')
    <main id="main" class="main">
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Unit Form</h5>

                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>

                            <!-- General Form Elements -->
                            <form action="{{route('new-unit')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Unit Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Unit Code</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="code" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Unit Description</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="description" style="height: 100px"></textarea>
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
                                    <button type="submit" class="btn btn-primary">Create new Unit</button>
                                </div>

                            </form><!-- End General Form Elements -->

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
@endsection
