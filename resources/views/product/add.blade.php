@extends('templates.layout')
@section('content')
<h1>{{$title}}</h1>
@if ($errors->any())
@foreach ($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
@endif
<form action="{{ route('addProduct') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="tenSP" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Thương Hiệu</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="thuongHieu" aria-describedby="emailHelp">
    </div>
    <label for="exampleInputPassword1" class="form-label">Màu</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mau" id="inlineRadio1" checked value="0">
            <label class="form-check-label" for="inlineRadio1">Vàng</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mau" id="inlineRadio2" value="1">
            <label class="form-check-label" for="inlineRadio2">Đen</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Giá</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection