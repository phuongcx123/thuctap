@extends('layouts.master')
@section('content')

    <h2>ProDucts List </h2>
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
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Aciton</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($pro as $key => $item)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $item['name'] }}</td>
                  
                    <td>{{ $item['price'] }}</td>
                    <td>{{ $item['description'] }}</td>
                    <td>
                        <a href="{{ url('/show/' . $item['id']) }}" class="btn btn-success" >Show</a>
                        <a href="{{ url('/edit/' . $item['id']) }}" class="btn btn-secondary" >Edit </a>
                        <a href="{{ url('/delete/' . $item['id']) }}" onclick="return confirm('Bạn có muốn xóa không?')" class="btn btn-danger">Delete</a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection