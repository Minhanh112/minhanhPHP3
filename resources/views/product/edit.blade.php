@extends('templates.layout')
@section('content')
<h1>{{ $title }}</h1>
@if ($errors->any())
@foreach ($errors->all() as $error)
<p>{{ $error }}</p>
@endforeach
@endif
<form action="{{ route('editProduct', ['id' => $detail->id]) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="tenSP" value="{{ $detail->tenSP }}" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Thương Hiệu</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="thuongHieu" value="{{ $detail->thuongHieu }}" aria-describedby="emailHelp">
    </div>
    <label for="exampleInputPassword1" class="form-label">Màu</label>
    <div class="mb-3">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mau" id="inlineRadio1" checked value="0" {{ $detail->mau == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio1">Vàng</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="mau" id="inlineRadio2" value="1" {{ $detail->mau == 0 ? 'checked' : '' }}>
            <label class="form-check-label" for="inlineRadio2">Đen</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Giá</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{ $detail->price }}" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection