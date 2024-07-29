@extends('layouts.app')
@section('title', 'ESSENCE -' .mb_strtoupper($detail->name, 'UTF-8'))
@section('content')
<!-- ##### Single Product Details Area Start ##### -->
<section class="single_product_details_area d-flex align-items-center">

<!-- Single Product Thumb -->
<div class="single_product_thumb clearfix">
    <div class="product_thumbnail_slides owl-carousel">
        <img src="{{$detail->img}}" alt="">
        <img src="{{$detail->img}}" alt="">
        <img src="{{$detail->img}}" alt="">
    </div>
</div>

<!-- Single Product Description -->
<div class="single_product_desc clearfix">
    <!-- <span>mango</span> -->
    <a href="cart.html">
        <h2>{{$detail->name}}</h2>
    </a>
    <p class="product-price">{{ number_format($detail->price, 0, ',', '.') }} VNĐ</p>
    <p class="product-desc">{{$detail->description}}</p>

    <!-- Form -->
    <form class="cart-form clearfix" method="post">
        <!-- Select Box -->
        <div class="select-box d-flex mt-50 mb-30">
            <select name="soluong" id="productQuantity">
                <option value="value">Số lượng: 1</option>
                <option value="value">Số lượng: 2</option>
                <option value="value">Số lượng: 3</option>
                <option value="value">Số lượng: 4</option>
            </select>
        </div>
        <!-- Cart & Favourite Box -->
        <div class="cart-fav-box d-flex align-items-center">
            <!-- Cart -->
            <button type="submit" name="addtocart" value="5" class="btn essence-btn">Thêm vào giỏ</button>
            <!-- Favourite -->
            <div class="product-favourite ml-4">
                <a href="#" class="favme fa fa-heart"></a>
            </div>
        </div>
    </form>
</div>
</section>

<section class="new_arrivals_area section-padding-80 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Sản Phẩm Liên Quan</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="popular-products-slides owl-carousel">

                @foreach ($relatedProducts as $row )
                <!-- Single Product -->
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
<!-- ##### Single Product Details Area End ##### -->
@endsection