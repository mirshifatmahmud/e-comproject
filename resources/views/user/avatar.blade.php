@extends('user.layouts.master')

@section('user-content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Hi..! {{ Auth::user()->name }} Update your avatar</h5>
    <form action="{{route('image.upload')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Upload Image</label>
        <input type="file" class="form-control" value="{{Auth::user()->image}}" name="image">
        @error('image')
           <span class="text-danger">{{__('No Selected Image')}}</span>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
@endsection
