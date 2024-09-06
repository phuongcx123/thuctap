@extends('layouts.master') 
@section('content')
 <a class="btn btn-primary" href="{{ url('/add') }}">Create</a> <br>
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">
            {{ $_SESSION['msg'] }}
        </div>

        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);
        @endphp
    @endif
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped  table-sm  table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Aciton</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($pro as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item['name'] }}</td>
    
                        <td>{{ $item['price'] }}</td>
                        <td><img src="{{ url('/'.$item['image']) }}" alt="" width="100"></td>
                        <td>
                            @foreach ($cate as $ct)
                                @if ($ct['id'] == $item['category_id'])
                                    {{ $ct['name'] }}
                                @endif
                            
                            @endforeach
                            
                        </td>
                        <td>{{ $item['description'] }}</td>
                        <td>
                            <a href="{{ url('/show/' . $item['id']) }}" class="btn btn-success">Show</a>
                            <a href="{{ url('/edit/' . $item['id']) }}" class="btn btn-secondary">Edit </a>
                            <a href="{{ url('/delete/' . $item['id']) }}" onclick="return confirm('Bạn có muốn xóa không?')"
                                class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Aciton</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
 
@section('js_new')
<script src="assets/admin/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="assets/admin/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection