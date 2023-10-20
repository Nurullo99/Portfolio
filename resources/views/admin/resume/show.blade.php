@extends('layouts.admin')
@section('title')
    Show Resume {{ $resume->id }}
@endsection
@section('content')
    <div class="col-12 col-md-12 col-lg-12">

        <div class="card">
            <div class="card-header">
                <h4>Resume id {{ $resume->id }}</h4>
                <div class="card-header-form">
                    <a href="{{ route('admin.resume.index') }}" class="btn btn-primary">Back</a>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th> ID
                                <td>{{ $resume->id }}</td>
                                </th>
                            </tr>

                            <tr>
                                <th>Title
                                <td>{{ $resume->title }}</td>
                                </th>
                            </tr>
                            <tr>
                                <th>Name
                                <td>{{ $resume->name }}</td>
                                </th>
                            </tr>
                            <tr>
                                <th>Years
                                <td>{{ $resume->years }}</td>
                                </th>
                            </tr>
                            <tr>
                                <th>Body
                                <td>{{ $resume->body }}</td>
                                </th>
                            </tr>

                           
                            <tr>
                                <th> Created At
                                    <td>{{ $resume->created_at }}</td>

                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
              
            </div>
        </div>
    </div>
@endsection