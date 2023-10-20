@extends('layouts.admin')

@section('title')
    Update Resume
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.resume.update',$resume->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update Resume</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" value="{{ $resume->title }}" name="title" @error('title')  is-invalid @enderror>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $resume->name }}">
                </div>
                <div class="form-group">
                    <label>Years</label>
                    <input type="text" class="form-control" name="years" value="{{ $resume->years }}">
                </div>

                <div class="form-group">
                    <label>Body</label>
                    <textarea type="text" class="form-control" name="body" >{!! $resume->body !!}</textarea>
                </div>
               
                

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
 
            </div>

        </div>
    </form>

    </div>
@endsection
