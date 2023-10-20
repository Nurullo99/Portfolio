@extends('layouts.admin')

@section('title')
    Create Projects
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create projects</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Url</label>
                    <input type="text" class="form-control" name="url">
                </div>
                <div class="form-group">
                    <label>Image </label>
                    <input type="file" class="form-control" name="image">
                </div>
                
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
 
            </div>

        </div>
    </form>

    </div>
@endsection
