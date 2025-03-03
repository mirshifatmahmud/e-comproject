
@extends('layouts.admin-master')
@section('categories-active')
    active show-sub
@endsection
@section('add-category-active')
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
                    <h2 class="card-header">Categories List</h2>
                    <div class="card-body">
                      <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-15p">Category Icon</th>
                            <th class="wd-15p">Category Name English</th>
                            <th class="wd-15p">Category Name Bangla</th>
                            <th class="wd-15p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                            <tr>
                                <td>
                                    <span><i class="{{$item->category_icon}}"></i></span>
                                </td>
                                <td>{{$item->category_name_en}}</td>
                                <td>{{$item->category_name_bn}}</td>
                                <td>
                                    <a href="{{route('category.edit',$item->id)}}" title="Edit Data" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <form id="delete-form" action="{{ route('category.delete', $item->id) }}" method="POST" class="d-inline">
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

            <div class="col-md-4">
                <div class="card">
                    <h2 class="card-header">Add New Category</h2>
                    <div class="card-body">
                        <form action="{{route('category.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Category Name English: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_en" value="{{old('category_name_en')}}">
                                @error('category_name_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Category Name Bangla: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_name_bn" value="{{old('category_name_bn')}}">
                                @error('category_name_bn')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Category Icon: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="category_icon" value="{{old('category_icon')}}">
                                @error('category_icon')
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
