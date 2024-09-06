@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Products From </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Auto Number"
                                value="{{ $product['id'] }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name Product</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name Product"
                                value="{{ $product['name'] }}" name="name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>

                            <img src="{{ url('/' . $product['image']) }}" alt="lỗi ảnh " width="100">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Price"
                                value="{{ $product['price'] }}" name="gia">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Price"
                                value="@foreach ($cate as $ct)
                            @if ($ct['id'] == $product['category_id'])
                                {{ $ct['name'] }}
                            @endif
                        
                        @endforeach
                                " name="gia">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <textarea name="nd" id="" class="form-control">{{ $product['description'] }}</textarea>
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">

                        <a href="javascript:history.back()" class="btn btn-danger">Quay lại</a>
                    </div>

                </div>
                <!-- /.card -->


                <!-- /.card -->

            </div>

        </div>
        <!-- /.card-body -->
    </div>
@endsection
