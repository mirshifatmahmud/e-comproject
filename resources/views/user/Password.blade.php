@extends('user.layouts.master')

@section('user-content')
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Hi..! {{ Auth::user()->name }} Change profile password</h5>
    <form action="{{route('password.update')}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="password">Old Password</label>
        <input type="password" class="form-control" value="" name="password">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
          <label for="newPassword">New Password</label>
          <input type="password" class="form-control" value="" name="newPassword">
          @error('newPassword')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        <div class="form-group">
          <label for="confirmPassword">Confirm Password</label>
          <input type="password" class="form-control" value="" name="confirmPassword">
          @error('confirmPassword')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
      <button type="submit" class="btn btn-primary">Change Password</button>
    </form>
  </div>
</div>
@endsection
