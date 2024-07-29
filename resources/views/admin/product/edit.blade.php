@extends('admin.layouts.master')

@section('content')
<!-- Main Content -->
<section class="section">
    <div class="section-header">
        <h1>Sản phẩm</h1>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cập nhật sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name" value="{{$product->name}}">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <img src="{{asset($product->img)}}" class="d-block mb-3" alt="" style="width: 150px; height:200px;">
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mô tả</label>
                                <textarea class="form-control" name="description" rows="3">{{$product->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="number" class="form-control" name="price" value="{{$product->price}}" min="1">
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState">Danh mục</label>
                                        <select id="inputState" class="form-control" name="category_id">
                                            @foreach ($categories as $row )
                                            <option value="{{$row->id}}" {{$row->id == $product->category_id ? "selected": ""}}>{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState">Trạng thái</label>
                                        <select id="inputState" class="form-control" name="status">
                                            <option value="0" {{$product->status==0 ? "selected" : ""}} >Bình thường</option>
                                            <option value="1" {{$product->status==1 ? "selected" : ""}} >Mới</option>
                                            <option value="2" {{$product->status==2 ? "selected" : ""}} >Hot</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState">Ẩn hiện</label>
                                        <select id="inputState" class="form-control" name="hidden">
                                            <option value="0" {{$product->hidden==0 ? "selected" : ""}} >Hiện</option>
                                            <option value="1" {{$product->hidden==1 ? "selected" : ""}} >Ẩn</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submmit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection