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
                        <h4>Thêm sản phẩm</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" class="form-control" name="img">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Mô tả</label>
                                <textarea class="form-control" name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input type="number" class="form-control" name="price" value="">
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState">Danh mục</label>
                                        <select id="inputState" class="form-control" name="category_id">
                                            @foreach ($categories as $row )
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState">Trạng thái</label>
                                        <select id="inputState" class="form-control" name="status">
                                            <option value="0" selected>Bình thường</option>
                                            <option value="1">Mới</option>
                                            <option value="2">Hot</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="inputState">Ẩn hiện</label>
                                        <select id="inputState" class="form-control" name="hidden">
                                            <option value="0" selected>Hiện</option>
                                            <option value="1">Ẩn</option>
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