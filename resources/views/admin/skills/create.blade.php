@extends('layouts.admin')

@section('title')
    Create skills
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.skills.store') }}" method="POST">
            @csrf
        <div class="card">
            <div class="card-header">
                <h4>Create service</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" @error('name')  is-invalid @enderror>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Percentage</label>
                    <input type="text" class="form-control" name="percentage" @error('percentage')  is-invalid @enderror>
                    @error('percentage')
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
