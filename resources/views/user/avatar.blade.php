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
                    <img class="card-img-top" @if (Auth::user()->image == null) src="{{ asset('fontend/avatar.png') }}"
                      @else src="{{ asset('storage/' . Auth::user()->image) }}" @endif alt="User Avatar" height="100%" width="100%" style="border-radius: 50%; margin-bottom: 5px">
                    <ul class="list-group list-group-flush">
                      <a href="{{route('user.dashboard')}}" class="list-group-item">Home</a>
                      <a href="{{route('image.form')}}" class="list-group-item">Upload Avatar</a>
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
            </div>
          </div>
    </div>
</div>
@endsection
