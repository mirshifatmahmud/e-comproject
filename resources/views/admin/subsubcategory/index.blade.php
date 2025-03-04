
@extends('layouts.admin-master')
@section('categories-active')
    active show-sub
@endsection
@section('all-sub-sub-category-active')
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
            <div class="col-md-9">
                <div class="card">
                    <h2 class="card-header">Sub Sub Categories List</h2>
                    <div class="card-body">
                      <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-15p">Category Name</th>
                            <th class="wd-15p">Sub Category Name</th>
                            <th class="wd-15p">Sub Sub Category Name English</th>
                            <th class="wd-15p">Sub Sub Category Name Bangla</th>
                            <th class="wd-15p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($subsubcategory as $item)
                            <tr>
                                <td>
                                    {{$item->category->category_name_en}}
                                </td>
                                <td>
                                    {{ $item->subcategory ? $item->subcategory->sub_category_name_en : 'N/A' }}
                                </td>
                                <td>{{$item->sub_sub_category_name_en}}</td>
                                <td>{{$item->sub_sub_category_name_bn}}</td>
                                <td>
                                    <a href="{{route('sub.subCategory.edit',$item->id)}}" title="Edit Data" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <form id="delete-form" action="{{ route('sub.subCategory.delete', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Data"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div><!-- table-wrapper -->
                </div><!-- card -->
            </div>

            <div class="col-md-3">
                <div class="card">
                    <h2 class="card-header">Add New Sub Sub Category</h2>
                    <div class="card-body">
                        <form action="{{route('sub.subCategory.store')}}" method="POST">
                            @csrf
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
                                <label class="form-control-label">Select Sub Category English: <span class="tx-danger">*</span></label>
                                <select class="form-control select2-show-search" data-placeholder="Choose one" name="subcategory_id">
                                    <option label="Choose one"></option>
                                        {{-- jquery code with ajax request --}}
                                  </select>
                                @error('subcategory_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Sub Category Name English: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="sub_sub_category_name_en" value="{{old('sub_sub_category_name_en')}}">
                                @error('sub_sub_category_name_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Sub Category Name Bangla: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="sub_sub_category_name_bn" value="{{old('sub_sub_category_name_bn')}}">
                                @error('sub_sub_category_name_bn')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- row -->

    </div><!-- sl-pagebody -->

</div><!-- sl-mainpanel -->
@endsection


<script src="{{asset('backend')}}/lib/jquery-2.2.4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "/admin/subCategory/ajax/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var d = $('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="' + value.id + '">' + value.sub_category_name_en + '</option>');
                        });
                    },
                    error: function() {
                        alert('Error loading subcategories.');
                    }
                });
            } else {
                $('select[name="subcategory_id"]').empty();
                alert('Please select a category.');
            }
        });
    });
    </script>
