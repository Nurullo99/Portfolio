@extends('layouts.admin')

@section('title')
    Update service
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.services.update',$service->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Update service</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" value="{{ $service->title }}" name="title" @error('title')  is-invalid @enderror>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
               
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Save</button>
                  </div>
 
            </div>

        </div>
    </form>

    </div>
@endsection
