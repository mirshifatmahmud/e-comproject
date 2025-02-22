@extends('layouts.admin-master')
@section('brand-active')
    active
@endsection
@section('content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">E-comproject</a>
      <span class="breadcrumb-item active">Brands</span>
    </nav>

    <div class="sl-pagebody">

        <div class="row row-sm">
            <div class="col-md-8">

                <div class="card">
                    <h2 class="card-header">Edit Brand</h2>
                    <div class="card-body">
                        <form action="{{route('brand.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{$brand->id}}" name="id">
                            <div class="form-group">
                                <label class="form-control-label">Brand Name English: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_en" value="{{$brand->brands_name_en}}">
                                @error('brand_name_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Brand Name Bangla: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_bn" value="{{$brand->brands_name_bn}}">
                                @error('brand_name_bn')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Brand Image: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="file" name="brand_image">
                                @error('brand_image')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>

            </div>
        </div><!-- row -->
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
@endsection
