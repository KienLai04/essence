@extends('layouts.app')
@section('title', 'ESSENCE - KẾT QUẢ TÌM KIẾM VỚI TỪ KHÓA: '. mb_strtoupper($query, 'UTF-8') )
@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb_area bg-img" style="background-image: url({{ asset('img/bg-img/breadcumb.jpg') }})">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="page-title text-center">
                    <h2>Kết quả tìm kiếm với từ khóa: {{$query}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Shop Grid Area Start ##### -->
<section class="shop_grid_area section-padding-80">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="shop_sidebar_area">

                    <!-- ##### Single Widget ##### -->
                    <div class="widget catagory mb-50">
                        <!-- Widget Title -->
                        <h6 class="widget-title mb-30">Danh mục</h6>

                        <!--  Catagories  -->
                        <div class="catagories-menu">
                            <ul id="menu-content2" class="menu-content collapse show">
                                <!-- Single Item -->
                                @foreach ($categories as $row )
                                <li data-toggle="collapse" data-target="#clothing">
                                    <a href="#">{{$row->name}}</a>
                                    <!-- <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Bodysuits</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Hoodies &amp; Sweats</a></li>
                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Pants &amp; Leggings</a></li>
                                            <li><a href="#">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href="#">Shirts &amp; Blouses</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sweaters &amp; Knits</a></li>
                                        </ul> -->
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget price mb-50">
                        <!-- Widget Title -->
                        <!-- <h6 class="widget-title mb-30">Filter by</h6> -->
                        <!-- Widget Title 2 -->
                        <!-- <p class="widget-title2 mb-30">Price</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Range: $49.00 - $360.00</div>
                                </div>
                            </div> -->
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget color mb-50">
                        <!-- Widget Title 2 -->
                        <!-- <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div> -->
                    </div>

                    <!-- ##### Single Widget ##### -->
                    <div class="widget brands mb-50">
                        <!-- Widget Title 2 -->
                        <!-- <p class="widget-title2 mb-30">Brands</p>
                            <div class="widget-desc">
                                <ul>
                                    <li><a href="#">Asos</a></li>
                                    <li><a href="#">Mango</a></li>
                                    <li><a href="#">River Island</a></li>
                                    <li><a href="#">Topshop</a></li>
                                    <li><a href="#">Zara</a></li>
                                </ul>
                            </div> -->
                    </div>
                </div>
            </div>

            @if ($result->isEmpty())
            <p>Không có kết quả nào phù hợp với tìm kiếm của bạn.</p>
            @else
            <div class="col-12 col-md-8 col-lg-9">
                <div class="shop_grid_product_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="product-topbar d-flex align-items-center justify-content-between">
                                <!-- Total Products -->
                                <div class="total-products">
                                    <p>Có <span>{{ $result->count() }}</span> kết quả được tìm thấy</p>
                                </div>
                                <!-- Sorting -->
                                <div class="product-sorting d-flex">
                                    <p>Sắp xếp theo:</p>
                                    <form action="#" method="get">
                                        <select name="select" id="sortByselect">
                                            <option value="value">Mới nhất</option>
                                            <option value="value">Giá tăng dần</option>
                                            <option value="value">Giá giảm dần</option>
                                        </select>
                                        <input type="submit" class="d-none" value="">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        @foreach ($result as $row )
                        <!-- Single Product -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-product-wrapper">
                                <!-- Product Image -->
                                <div class="product-img">
                                    <img src="{{$row->img}}" alt="">
                                    <!-- Hover Thumb -->
                                    <img class="hover-img" src="{{$row->img}}" alt="">

                                    <!-- Favourite -->
                                    <div class="product-favourite">
                                        <a href="#" class="favme fa fa-heart"></a>
                                    </div>
                                </div>

                                <!-- Product Description -->
                                <div class="product-description">
                                    <!-- <span>topshop</span> -->
                                    <a href="{{route('product-detail', ['id' => $row->id])}}">
                                        <h6>{{$row->name}}</h6>
                                    </a>
                                    <p class="product-price">{{ number_format($row->price, 0, ',', '.') }} VNĐ</p>

                                    <!-- Hover Content -->
                                    <div class="hover-content">
                                        <!-- Add to Cart -->
                                        <div class="add-to-cart-btn">
                                            <a href="#" class="btn essence-btn">Thêm vào giỏ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- Pagination -->
                <nav aria-label="navigation">
                    <!-- <ul class="pagination mt-50 mb-70 justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul> -->
                    {{ $result->links() }}
                </nav>
            </div>
            @endif

            
        </div>
    </div>
</section>
<!-- ##### Shop Grid Area End ##### -->
@endsection