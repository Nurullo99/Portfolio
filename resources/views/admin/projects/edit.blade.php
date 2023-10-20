@extends('layouts.admin')

@section('title')
    Update Projects
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.projects.update',$project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update Projects</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" value="{{ $project->title }}" name="title">
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{ $project->name }}" name="name">
                </div>
                <div class="form-group">
                    <label>Url</label>
                    <input type="text" class="form-control" value="{{ $project->url }}" name="url">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    <img width="200px" class="mt-3" src="{{ asset('images/'. $project->image) }}" alt="">
                </div>
                

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
 
            </div>

        </div>
    </form>

    </div>
@endsection
