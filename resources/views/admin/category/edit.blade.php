@extends('admin.layouts.master')

@section('content')
<!-- Main Content -->
<section class="section">
    <div class="section-header">
        <h1>Danh mục</h1>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Cập nhật danh mục</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('category.update', $category->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input type="text" class="form-control" name="name" value="{{$category->name}}">
                            </div>
                            <div class="form-group">
                                <label for="inputState">Trạng thái</label>
                                <select id="inputState" class="form-control" name="hidden">
                                    <option value="0" {{$category->hidden == 0 ? 'selected' : ''}}>Hiện</option>
                                    <option value="1" {{$category->hidden == 1 ? 'selected' : ''}}>Ẩn</option>
                                </select>
                            </div>
                            <button type="submmit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection