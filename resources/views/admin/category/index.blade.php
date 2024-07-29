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
                    <div class="card-header ">
                        <h4>Tất cả danh mục</h4>
                        <div class="card-header-action">
                            <a href="{{ route('category.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Thêm danh mục mới</a>
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
                                    <th scope="col">Tên</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $row )
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->hidden == 0 ? "Hiện" : "Ẩn"}}</td>
                                    <td>
                                        <a href="{{route('category.edit', $row->id)}}" class='btn btn-primary'><i class='fa fa-edit'></i></a>
                                        <form class="d-inline" action="{{route('category.destroy', $row->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class='btn btn-danger ml-2' onclick="return confirm('Bạn có chắc muốn xóa danh mục này không ?')"><i class='far fa-trash-alt'></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$categories->links()}}
                </div>
            </div>
        </div>

    </div>
</section>

@endsection