@extends('layouts.fontend-master')

@section('content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('fontend/avatar.png')}}" alt="User Avatar" height="100%" width="100%" style="border-radius: 50%; margin-bottom: 5px">
                    <ul class="list-group list-group-flush">
                      <a href="{{route('user.dashboard')}}" class="list-group-item">Home</a>
                      <a href="" class="list-group-item">Upload Avatar</a>
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
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
