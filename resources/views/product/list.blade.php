@extends('templates.layout')
@section('content')
<h1>{{$title}}</h1>
<!-- <form action="{{ route('search_customer') }}" method="POST">
    @csrf
    <input type="text" name="search_name">
    <input type="submit" name="btn_search" value="Search">
</form> -->
@if (Session::has('success'))
{{Session::get('success')}}
@endif
@if (Session::has('error'))
{{Session::get('error')}}
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Tên Sản Phẩm</th>
            <th scope="col">Thương Hiệu</th>
            <th scope="col">Màu</th>
            <th scope="col">Giá</th>
        </tr>
    </thead>
    <tbody>
        @foreach($list as $list)
        <tr>
            <th>{{$list->id}}</th>
            <td>{{$list->tenSP}}</td>
            <td>{{$list->thuongHieu}}</td>
            <td>{{$list->mau == 0 ?'Trắng' : 'Đen'}}</td>
            <td>{{$list->price}}</td>
            <td>

                <a class=" btn btn-warning" href="{{ route('editProduct', [ 'id' => $list->id ]) }}">Edit</a>
                <a class=" btn btn-danger" href="{{ route('deleteProduct', [ 'id' => $list->id ]) }}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<a class="btn btn-danger" href="{{ route('addProducts') }}">Add new</a>
@endsection