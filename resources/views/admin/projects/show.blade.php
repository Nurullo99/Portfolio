@extends('layouts.admin')
@section('title')
    Show Project {{ $project->id }}
@endsection
@section('content')
    <div class="col-12 col-md-12 col-lg-12">

        <div class="card">

            
            <div class="card-header">
                <h4>Project id {{ $project->id }}</h4>
                <div class="card-header-form">
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Back</a>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th> ID
                                <td>{{ $project->id }}</td>
                                </th>
                            </tr>
                           

                            
                            <tr>
                                <th> Title
                                    <td>{{ $project->title }}</td>

                                </th>
                            </tr>
                            <tr>
                                <th> Name
                                    <td>{{ $project->name }}</td>

                                </th>
                            </tr>
                            
                           
                            <tr>
                                <th> Url
                                    <td>{{ $project->url }}</td>

                                </th>
                            </tr>
                            <tr>
                                <tr>
                                    <th>Image</th> <td ><img src="/images/{{ $project->image }}" width="100px" height="100px" alt=""></td>
                                </tr>
                            </tr>
                            <tr>
                                <th> Created At
                                    <td>{{ $project->created_at }}</td>

                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
@endsection