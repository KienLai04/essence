@extends('layouts.app')
@section('title', 'ESSENCE - QUẦN ÁO DÀNH CHO NAM VÀ NỮ')
@section('content')
<!-- ##### Welcome Area Start ##### -->
<section class="welcome_area bg-img background-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <div class="hero-content">
                    <h2>Bộ sưu tập Nữ</h2>
                    <a href="#" class="btn essence-btn">Xem ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Welcome Area End ##### -->

<!-- ##### New Arrivals Area Start ##### -->
<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Sản Phẩm Hot</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">

                @foreach ($hotProducts as $row )
                <!-- Single Product -->
                <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{$row->img}}" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{$row->img}}" alt="">

                            <!-- Product Badge -->
                            <div class="product-badge offer-badge">
                                <span>Hot</span>
                            </div>

                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <!-- <span>mango</span> -->
                            <a href="{{route('product-detail', ['id' => $row->id])}}">
                                <h6>{{$row->name}}</h6>
                            </a>
                            <p class="product-price">{{ number_format($row->price, 0, ',', '.') }} VNĐ</p>

                            <!-- Hover Content -->
                            <div class="hover-content">
                                <!-- Add to Cart -->
                                <div class="add-to-cart-btn">
                                    <a href="" class="btn essence-btn">Thêm vào giỏ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### New Arrivals Area End ##### -->

<!-- ##### CTA Area Start ##### -->
<div class="cta-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="cta-content bg-img background-overlay" style="background-image: url(img/bg-img/bg-5.jpg);">
                    <div class="h-100 d-flex align-items-center justify-content-end">
                        <div class="cta--text">
                            <h6>Giảm đến 40%</h6>
                            <h2>Siêu Sale</h2>
                            <a href="#" class="btn essence-btn">Mua Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### CTA Area End ##### -->

<!-- ##### New Arrivals Area Start ##### -->
<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Sản Phẩm Mới</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">

                @foreach ($newProducts as $row)
                <!-- Single Product -->
                <div class="single-product-wrapper">
                        <!-- Product Image -->
                        <div class="product-img">
                            <img src="{{$row->img}}" alt="">
                            <!-- Hover Thumb -->
                            <img class="hover-img" src="{{$row->img}}" alt="">

                            <!-- Product Badge -->
                            <div class="product-badge new-badge">
                                <span>Mới</span>
                            </div>

                            <!-- Favourite -->
                            <div class="product-favourite">
                                <a href="#" class="favme fa fa-heart"></a>
                            </div>
                        </div>
                        <!-- Product Description -->
                        <div class="product-description">
                            <!-- <span>mango</span> -->
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
                @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### New Arrivals Area End ##### -->

@endsection