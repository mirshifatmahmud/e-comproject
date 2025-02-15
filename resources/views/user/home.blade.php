@extends('user.layouts.master')

@section('user-content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Hi..! {{ Auth::user()->name }} Update your profile</h5>
    <form action="{{route('update.profile')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" placeholder="Enter Name" value="{{Auth::user()->name}}" name="name">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" placeholder="Enter Email" value="{{Auth::user()->email}}" name="email">
          @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" placeholder="Enter Phone" value="{{Auth::user()->phone}}" name="phone">
          @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
      <button type="submit" class="btn btn-primary">Profile Update</button>
    </form>
  </div>
</div><!-- card end -->
@endsection
