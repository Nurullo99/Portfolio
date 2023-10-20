@extends('layouts.admin')

@section('title')
    Create Resume
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.resume.store') }}" method="POST">
            @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create Resume</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" @error('title')  is-invalid @enderror>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Years</label>
                    <input type="text" class="form-control" name="years">
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <textarea type="text" class="form-control" name="body"></textarea>
                </div>
                
                
                

                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
 
            </div>

        </div>
    </form>

    </div>
@endsection
