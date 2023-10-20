@extends('layouts.admin')
@section('title')
     Service
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
        <h4>Service table</h4>
        <div class="card-header-form">
            <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Create</a>
        </div>

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-md">
            <tbody><tr>
              <th>#</th>
              <th>Title</th>
              <th>Created_At</th>
              <th>Updated_At</th>
              <th>Action</th>
            </tr>
            @foreach ($services as $service)
            <tr>
                <td>{{$loop->iteration  }}</td>
                <td>{{ $service->title }}</td>
                
                <td>{{  $service->created_at }}</td>
                <td>{{  $service->updated_at }}</td>
               

                <td >
                    <form style="display: inline" action="{{ route('admin.services.destroy',$service->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button href="#" class="btn btn-danger" onclick="return confirm('Ochirishni xohlisizmi?')" type="submit">Delete</button>
                    </form>
                    <a href="{{ route('admin.services.edit',$service->id) }}" class="btn btn-success">Edit</a>
                    
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
