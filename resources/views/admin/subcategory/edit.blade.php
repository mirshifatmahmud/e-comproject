@extends('layouts.admin-master')
@section('categories-active')
    active show-sub
@endsection
@section('all-sub-category-active')
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
                    <h2 class="card-header">Edit Sub Category</h2>
                    <div class="card-body">
                        <form action="{{route('subCategory.update')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden  " value="{{$subcategories->id}}" name="id">
                            <div class="form-group">
                                <label class="form-control-label">Select Category English: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" data-placeholder="Choose one" name="category_id">
                                    <option label="Choose one"></option>

                                    @foreach ($category as $item)
                                        <option value="{{$item->id}}">{{ucwords($item->category_name_en)}}</option>
                                    @endforeach

                                  </select>
                                @error('category_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                            <div class="form-group">
                                <label class="form-control-label">Sub Category Name English: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="sub_category_name_en" value="{{$subcategories->sub_category_name_en}}">
                                @error('sub_category_name_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Sub Category Name Bangla: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="sub_category_name_bn" value="{{$subcategories->sub_category_name_bn}}">
                                @error('sub_category_name_bn')
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
