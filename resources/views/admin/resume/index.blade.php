@extends('layouts.admin')
@section('title')
     Resume
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
        <h4>Resume table</h4>
        <div class="card-header-form">
            <a href="{{ route('admin.resume.create') }}" class="btn btn-primary">Create</a>
        </div>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody><tr>
              <th>#</th>
              <th>Title</th>
              <th>Name</th>
              <th>Years</th>
              <th>Body</th>
              <th>Created_At</th>
              <th>Action</th>
            </tr>
            @foreach ($resumes as $resume)
            <tr>
                <td>{{$loop->iteration  }}</td>
                <td>{{ $resume->title }}</td>
                <td>{{ $resume->name }}</td>
                <td>{{ $resume->years }}</td>
                <td>
                  {{ \Str::limit($resume->body,20) }}  
                </td>
                <td>{{  $resume->created_at }}</td>
               

                <td >
                    <form style="display: inline" action="{{ route('admin.resume.destroy',$resume->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="btn btn-danger" onclick="return confirm('Ochirishni xohlisizmi?')" type="submit">Delete</button>
                    </form>
                    <a href="{{ route('admin.resume.edit',$resume->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('admin.resume.show',$resume->id) }}" class="btn btn-warning">Show</a>
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
