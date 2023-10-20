@extends('layouts.admin')
@section('title')
    Show About {{ $about->id }}
@endsection
@section('content')
    <div class="col-12 col-md-12 col-lg-12">

        <div class="card">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="card-header">
                <h4>about id {{ $about->id }}</h4>
                <div class="card-header-form">
                    <a href="{{ route('admin.about.index') }}" class="btn btn-primary">Back</a>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th> ID
                                <td>{{ $about->id }}</td>
                                </th>
                            </tr>

                            <tr>
                                <th>Name
                                <td>{{ $about->name }}</td>
                                </th>
                            </tr>
                           

                            
                            <tr>
                                <th> Title
                                    <td>{{ $about->title }}</td>

                                </th>
                            </tr>
                            
                           
                            <tr>
                                <th> Body
                                    <td>{{ $about->body }}</td>

                                </th>
                            </tr>
                            <tr>
                                <th> Date
                                    <td>{{ $about->date }}</td>

                                </th>
                            </tr>
                            <tr>
                                <th> Address
                                    <td>{{ $about->address }}</td>

                                </th>
                            </tr>
                            <tr>
                                <th> Email
                                    <td>{{ $about->email }}</td>

                                </th>
                            </tr>
                            <tr>
                                <th> Phone
                                    <td>{{ $about->phone }}</td>

                                </th>
                            </tr>
                            <tr>
                                <tr>
                                    <th>Image</th> <td ><img src="/images/{{ $about->image }}" width="100px" height="100px" alt=""></td>
                                </tr>
                            </tr>
                            <tr>
                                <th> Created At
                                    <td>{{ $about->created_at }}</td>

                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>
@endsection