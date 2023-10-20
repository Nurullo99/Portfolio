@extends('layouts.admin')

@section('title')
    Update About
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.about.update',$about->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update About</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="{{ $about->name }}" name="name" @error('name')  is-invalid @enderror>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" value="{{ $about->title }}" name="title">
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <textarea type="text" class="form-control" name="body" >{!! $about->body !!}</textarea>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="text" class="form-control" value="{{ $about->date }}" name="date">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" value="{{ $about->address }}" name="address">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" value="{{ $about->email }}" name="email">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" value="{{ $about->phone }}" name="phone">
                </div>
                
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image">
                    <img width="200px" class="mt-3" src="{{ asset('images/'. $about->image) }}" alt="">
                </div>
                    <br/>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
 
            </div>

        </div>
    </form>

    </div>
@endsection
