@extends('layouts.main')

@section('title', 'Cart')

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="/styles/cart.css">
    <link rel="stylesheet" type="text/css" href="/styles/cart_responsive.css">
@endsection

@section('custom-js')
    <script src="/js/cart.js"></script>
    <script>
        $(document).ready(function (){
            $('.clear_cart_button').click(function (event) {
                event.preventDefault();
                $.ajax({
                    url: "{{route('clearCart')}}",
                    type: "POST",
                    data: {

                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: (data) => {
                        console.log(data)
                    },
                    error: (data) => {
                        console.log(data)
                    }
                })
            })
        })
    </script>
@endsection

@section('content')

    <style>
        .user-info-cart {
            max-width: 40%;
        }
        .user-info-title {
            display: block;
            width: 100%;
        }
        .user-info-cart input {
            display: block;
            width: 100%;
        }
    </style>

    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(images/cart.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li>Shopping Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Info -->

    <form method="POST" action="{{route('addOrder')}}" class="cart_info">
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Column Titles -->
                    <div class="cart_info_columns clearfix">
                        <div class="cart_info_col cart_info_col_product">Product</div>
                        <div class="cart_info_col cart_info_col_price">Price</div>
                        <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                        <div class="cart_info_col cart_info_col_total">Total</div>
                    </div>
                </div>
            </div>
            <div class="row cart_items_row">
                <div class="col">
                    @foreach($products as $product)
                        <!-- Cart Item -->
                            <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                <!-- Name -->
                                <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_item_image">
                                       @if(isset($product->attributes['img']))
                                            <div><img src="images/{{$product->attributes['img']}}" alt=""></div>
                                        @else

                                       @endif

                                    </div>
                                    <div class="cart_item_name_container">
                                        <div class="cart_item_name"><a href="#">{{$product->name}}</a></div>
                                        <div class="cart_item_edit"><a href="#">Edit Product</a></div>
                                    </div>
                                </div>
                                <!-- Price -->
                                <div class="cart_item_price">$<span>{{$product->price}}</span></div>
                                <!-- Quantity -->
                                <div class="cart_item_quantity">
                                    <div class="product_quantity_container">
                                        <div class="product_quantity clearfix">
                                            <span>Qty</span>
                                            <input class="quantity_input" type="text" pattern="[0-9]*" value="{{$product->quantity}}">
                                            <div class="quantity_buttons">
                                                <div class="quantity_inc_button quantity_inc quantity_control"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
                                                <div class="quantity_dec_button quantity_dec quantity_control"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Total -->
                                <div class="cart_item_total">$<span>{{$product->price * $product->quantity}}</span></div>
                            </div>
                    @endforeach

                </div>
            </div>
            <div class="row row_cart_buttons">
                <div class="col">
                    <div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="button continue_shopping_button"><a href="#">Continue shopping</a></div>
                        <div class="cart_buttons_right ml-lg-auto">
                            <div class="button clear_cart_button"><a href="#">Clear cart</a></div>
                            <div class="button update_cart_button"><a href="#">Update cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row_extra">
                <div class="col-lg-6">
                    <div class="cart_total">
                        <div class="section_title">Cart total</div>
                        <div class="section_subtitle">Final info</div>
                        <div class="user-info-cart">
                            <div class="user-info-title">Ведите информацию.</div>
                            <input type="text" required name="name" placeholder="Имя">
                            <input type="text" required name="number_phone" placeholder="Номер телефона">
                        </div>
                        <div class="cart_total_container">
                            <ul>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Products total</div>
                                    <div class="cart_total_value ml-auto">{{$product->quantity}}</div>
                                </li>
                                <li class="d-flex flex-row align-items-center justify-content-start">
                                    <div class="cart_total_title">Total price</div>
                                    <div class="cart_total_value ml-auto">${{$product->price * $product->quantity}}</div>
                                </li>
                            </ul>
                        </div>
                        <div><input type="submit" value="Send order"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

