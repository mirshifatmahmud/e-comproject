@extends('layouts.fontend-master')

@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Profile</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" @if (Auth::user()->image == null) src="{{ asset('fontend/avatar.png') }}"
                      @else src="{{ asset('storage/' . Auth::user()->image) }}" @endif alt="User Avatar" height="100%" width="100%" style="border-radius: 50%; margin-bottom: 5px">
                    <ul class="list-group list-group-flush">
                      <a href="{{route('user.dashboard')}}" class="list-group-item">Home</a>
                      <a href="{{route('image.form')}}" class="list-group-item">Upload Avatar</a>
                      <a href="{{route('password.form')}}" class="list-group-item">Password Change</a>
                      <a href="{{ route('logout') }}" class="btn btn-danger btn-sm btn-block" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Log Out</a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                                </form>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
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
            </div>
          </div>
    </div>
</div>
@endsection
