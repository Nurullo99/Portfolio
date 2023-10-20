@extends('layouts.admin')

@section('title')
    Update Menus
@endsection
@section('content')
    <div class="col-12 col-md-1 col-lg-12">
        <form action="{{ route('admin.menus.update', $menu->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="card">
            <div class="card-header">
                <h4>Create Menus</h4>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $menu->name }}" @error('name')  is-invalid @enderror>
                    @error('name')
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
