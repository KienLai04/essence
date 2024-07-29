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
                    <div class="card-header ">
                        <h4>Tất cả sản phẩm</h4>
                        <div class="card-header-action">
                            <a href="{{ route('product.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm sản phẩm mới</a>
                        </div>
                    </div>
                    @if(session()->has('thongbao'))
                    <div class="alert alert-success p-3 mx-auto my-3 col-4 fs-5 text-center">
                        {!! session('thongbao') !!}
                    </div>
                    @endif
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Ẩn hiện</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $row )
                                <tr>
                                    <td><img src="{{asset($row->img)}}" width="100px" class="my-3"></td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->description}}</td>
                                    <td> {{ number_format($row->price, 0, ',', '.') }}</td>
                                    <td>
                                        @if($row->status == 1)
                                        Mới
                                        @elseif($row->status == 2)
                                        Hot
                                        @else
                                        Bình thường
                                        @endif
                                    </td>
                                    <td>{{$row->hidden == 0 ? "Hiện" : "Ẩn"}}</td>
                                    <td>{{ $row->category->name }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('product.edit', $row->id)}}" class='btn btn-primary'><i class='fa fa-edit'></i></a>
                                            <form class="d-inline" action="{{route('product.destroy', $row->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class='btn btn-danger ml-2' onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không ?')"><i class='far fa-trash-alt'></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$products->links()}}
                </div>
            </div>
        </div>

    </div>
</section>

@endsection