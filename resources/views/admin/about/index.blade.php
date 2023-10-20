@extends('layouts.admin')
@section('title')
     About
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
        <h4>About table</h4>
        <div class="card-header-form">
            <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Create</a>
        </div>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody><tr>
              <th>#</th>
              <th>Name</th>
              <th>Title</th>
              <th>Body</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
             @foreach ($abouts as $about) 
            <tr>
                <td>{{$loop->iteration  }}</td>
                <td>{{ $about->name }}</td>
                <td>{{ $about->title }}</td>
                <td>{{ \Str::limit($about->body,50) }}</td>
                
                <td>
                  <img alt="image" src="{{ asset('images/'.$about->image) }}" width="55">
                </td>

                <td >
                    <form style="display: inline" action="{{ route('admin.about.destroy',$about->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="btn btn-danger" onclick="return confirm('Ochirishni xohlisizmi?')" type="submit">Delete</button>
                    </form>
                    <a href="{{ route('admin.about.edit',$about->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('admin.about.show',$about->id) }}" class="btn btn-warning">Show</a>
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
