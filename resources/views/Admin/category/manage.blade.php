@extends('Admin.master')

@section('tittle')
    Manage Category Page
@endsection

@section('body')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Manage Category Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Category</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Category Info</h5>
                        <!-- Bordered Table -->
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Serial Number</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Category Description</th>
                                <th scope="col">Category Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <tbody>
                            @foreach($Categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td><img src="{{$category->image}}" width="100px" height="100px"></td>
                                <td>{{$category->status == 1 ? 'Published' : 'Unpblished'}}</td>
                                <td>
                                    <a href="{{route('edit-category', ['id' => $category->id])}}" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-category', ['id' => $category->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- End Bordered Table -->

                    </div>
                </div>


            </div>
        </div>
    </section>

</main><!-- End #main -->

@endsection
