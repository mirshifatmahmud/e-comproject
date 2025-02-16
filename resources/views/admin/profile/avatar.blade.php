@extends('admin.profile.layouts.master')

@section('admin-content')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Hi..! {{ Auth::user()->name }} Update your profile image</h5>
      <form action="{{route('admin.image.upload')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Select image</label>
          <input type="file" class="form-control" name="image">
          @error('image')
              <span class="text-danger">{{__('Selected Image')}}</span>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
    </div>
  </div><!-- card end -->
@endsection
