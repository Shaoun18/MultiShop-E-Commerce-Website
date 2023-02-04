@extends('Admin.master')

@section('tittle')
    Manage User Page
@endsection

@section('body')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Manage User Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All User Info</h5>
                            <!-- Bordered Table -->
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th scope="col">Serial Number</th>
                                    <th scope="col">User Id</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">User Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <a href="{{route('delete-user', ['id' => $user->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this')">
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
