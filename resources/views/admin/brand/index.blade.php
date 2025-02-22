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
                    <h2 class="card-header">Brands List</h2>
                    <div class="card-body">
                      <table id="datatable1" class="table display responsive nowrap">
                        <thead>
                          <tr>
                            <th class="wd-15p">Brand Image</th>
                            <th class="wd-15p">Brand Name English</th>
                            <th class="wd-15p">Brand Name Bangla</th>
                            <th class="wd-15p">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($brands as $item)
                            <tr>
                                <td><img src="{{ asset('storage/' . $item->brands_image)}}" alt="image" style="width: 80px"></td>
                                <td>{{$item->brands_name_en}}</td>
                                <td>{{$item->brands_name_bn}}</td>
                                <td>
                                    <a href="{{route('brand.edit',$item->id)}}" title="Edit Data" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                    <form id="delete-form" action="{{ route('brand.delete', $item->id) }}" method="POST" class="d-inline">
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
                    <h2 class="card-header">Add New Brand</h2>
                    <div class="card-body">
                        <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Brand Name English: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_en" value="{{old('brand_name_en')}}">
                                @error('brand_name_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label class="form-control-label">Brand Name Bangla: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="brand_name_bn" value="{{old('brand_name_bn')}}">
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
                              <button class="btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- row -->

    </div><!-- sl-pagebody -->

</div><!-- sl-mainpanel -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.closest('.delete-form').submit();
                    }
                });
            });
        });
    });
</script>
