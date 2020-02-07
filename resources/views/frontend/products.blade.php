@extends('frontend.layouts.master')
@section('title','List Products')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontend.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <?php
                    if($by_category!=""){
                        $products=$list_products;
                        echo '<h2 class="title text-center">Category '.$by_category->name.'</h2>';
                    }else{
                        echo '<h2 class="title text-center">List Products</h2>';
                    }
                    ?>
                    @foreach($products as $product)
                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/images/',$product->image)}}" alt="" /></a>
                                            <h2>$ {{$product->price}}</h2>
                                            <p>{{$product->p_name}}</p>
                                            <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
