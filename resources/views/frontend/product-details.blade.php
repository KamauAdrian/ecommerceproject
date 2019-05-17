@extends('frontEnd.layouts.master')
@section('title','Detial Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontEnd.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
                @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
                    <div class="product-details"><!--product-details-->

                        <div class="col-sm-5">
                            <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                <a href="{{url('products/large',$detail_product->image)}}">
                                    <img src="{{url('products/small',$detail_product->image)}}" alt="" id="dynamicImage"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <form action="{{route('addToCart')}}" method="post" role="form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="product_id" value="{{$detail_product->id}}">
                                <input type="hidden" name="product_name" value="{{$detail_product->p_name}}">
                                <input type="hidden" name="product_code" value="{{$detail_product->p_code}}">
                                <input type="hidden" name="product_colour" value="{{$detail_product->p_colour}}">
                                <input type="hidden" name="image" value="{{$detail_product->image}}">
                                <input type="hidden" name="stock" value="{{$detail_product->stock}}">
                                <input type="hidden" name="price" value="{{$detail_product->price}}" id="dynamicPriceInput">
                                <div class="product-information"><!--/product-information-->
                                    <img src="{{asset('frontEnd/images/product-details/new.jpg')}}" class="newarrival" alt="" />
                                    <h2>{{$detail_product->p_name}}</h2>
                                    <p>Code ID: {{$detail_product->p_code}}</p>
                                    <span>
                                        <select name="size" id="idSize" class="form-control">
                                            <option value="">Select Size</option>
                                            <option value="Small">Small</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Large">Large</option>
                                        </select>
                                    </span><br>
                                    <span>
                                        <span id="dynamic_price">US ${{$detail_product->price}}</span>
                                        <label>Quantity:</label>
                                        <input type="text" name="quantity" value="{{$detail_product->stock}}" id="inputStock"/>
                                            @if($detail_product->stock>0)
                                                <button type="submit" class="btn btn-fefault cart" id="buttonAddToCart">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    Add to cart
                                                </button>
                                            @endif
                                    </span>
                                    <p><b>Availability:</b>
                                        @if($detail_product->stock>0)
                                            <span id="availableStock">In Stock</span>
                                        @else
                                            <span id="availableStock">Out of Stock</span>
                                        @endif
                                    </p>
                                    <p><b>Condition:</b> New</p>
                                    <a href=""><img src="{{asset('frontEnd/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
                                </div><!--/product-information-->
                            </form>

                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection