@extends('layouts.admin-master')
@section('categories-active')
    active show-sub
@endsection
@section('all-category-active')
    active
@endsection

@section('content')
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.html">E-comproject</a>
      <span class="breadcrumb-item active">Categories</span>
    </nav>

    <div class="sl-pagebody">

        <div class="row row-sm">
            <div class="col-md-8">

                <div class="card">
                    <h2 class="card-header">Edit Category</h2>
                    <div class="card-body">
                        <form action="{{route('category.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{$category->id}}" name="id">
                            <div class="form-group">
                                <label class="form-control-label">Category Name English: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_en" value="{{$category->category_name_en}}">
                                @error('category_name_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Category Name Bangla: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_bn" value="{{$category->category_name_bn}}">
                                @error('category_name_bn')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Category Icon: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_icon" value="{{$category->category_icon}}">
                                @error('category_icon')
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
