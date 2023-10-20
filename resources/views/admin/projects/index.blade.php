@extends('layouts.admin')
@section('title')
     Project
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
        <h4>Projects table</h4>
        <div class="card-header-form">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary">Create</a>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody><tr>
              <th>#</th>
              <th>Title</th>
              <th>Name</th>
              <th>Url</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
             @foreach ($projects as $project) 
            <tr>
                <td>{{$loop->iteration  }}</td>
                
                <td>{{ $project->title }}</td>
                <td>{{ $project->name }}</td>
                <td> {{ $project->url }}</td>
                
                <td>
                  <img alt="image" src="{{ asset('images/'.$project->image) }}" width="55">
                </td>
                
                <td >
                    <form style="display: inline" action="{{ route('admin.projects.destroy',$project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="btn btn-danger" onclick="return confirm('Ochirishni xohlisizmi?')" type="submit">Delete</button>
                    </form>
                    <a href="{{ route('admin.projects.edit',$project->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('admin.projects.show',$project->id) }}" class="btn btn-warning">Show</a>
                </td>
              </tr>
            @endforeach 
 

          </tbody></table>
        </div>
      </div>
      <div class="card-footer text-right">
        <nav class="d-inline-block">
           
        </nav>
      </div>
    </div>
  </div>
@endsection
