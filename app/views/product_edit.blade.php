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
                    <form method="POST" action="{{ url('/edit/'.$product['id']) }}" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Auto Number"
                                    value="{{ $product['id'] }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Product</label>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="Name Product" value="{{ $product['name'] }}" name="name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>

                                <img src="{{ url('/' . $product['image']) }}" alt="lỗi ảnh " width="100">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="img" class="form-control" id="exampleInputFile">
                                        <input type="hidden" value="{{ $product['image'] }}" name="anh">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Price"
                                    value="{{ $product['price'] }}" name="gia">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="nd" id="" class="form-control">{{ $product['description'] }}</textarea>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" name="gui" class="btn btn-primary">Submit</button>
                            <a href="javascript:history.back()" class="btn btn-danger">Quay lại</a>
                        </div>
                    </form>
                </div>
                <!-- /.card -->


                <!-- /.card -->

            </div>

        </div>
        <!-- /.card-body -->
    </div>
@endsection
