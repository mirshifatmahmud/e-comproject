@extends('layouts.admin-master')

@section('content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">Admin</a>
      <span class="breadcrumb-item active">Profile</span>
    </nav>

    <div class="sl-pagebody">

      <div class="body-content">
        <div class="container">
              <div class="row">
                  <div class="col-sm-4">
                      <div class="card" style="width: 18rem;">
                          <img class="card-img-top" @if (Auth::user()->image == null) src="{{ asset('fontend/avatar.png') }}"
                            @else src="{{ asset('storage/' . Auth::user()->image) }}" @endif alt="User Avatar" height="100%" width="100%" style="border-radius: 50%; margin-bottom: 5px">
                          <ul class="list-group list-group-flush">
                            <a href="{{route('admin.dashboard')}}" class="list-group-item">Home</a>
                            <a href="{{route('admin.image.form')}}" class="list-group-item">Upload Avatar</a>
                            <a href="{{route('admin.password.form')}}" class="list-group-item">Password Change</a>
                            <a href="{{ route('logout') }}" class="btn btn-danger btn-sm btn-block" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Log Out</a>
                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                      </form>
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-8">
                    @yield('admin-content')
                  </div>
                </div>
          </div>
      </div>

    </div><!-- sl-pagebody -->
    
  </div><!-- sl-mainpanel -->
@endsection
