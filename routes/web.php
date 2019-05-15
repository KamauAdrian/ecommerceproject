<?php

//my ecommerce project overview
//sign up and in  page
//main page -> general landing page
//products page -> view all products per category
//product page -> view a single product
//cart page -> add product to cart if interested in shoping
//check out page -> delivery address for buyers



Auth::routes(['register'=>false]);
/// Simple User Login /////
Route::group(['middleware'=>['frontLogin']],function (){
    ///// Cart Area /////////
    Route::post('/addToCart','CartController@addToCart')->name('addToCart');
    Route::get('/viewcart','CartController@index');
    Route::get('/cart/deleteItem/{id}','CartController@deleteItem');

    //apply coupon code
    Route::post('/apply-coupon','CouponController@applycoupon');
    //checkout
    Route::get('/check-out','CheckOutController@index');
});

//user simple login
Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');

//view product
Route::get('/product-detail/{id}','IndexController@productdetials');

//categories view products per category
Route::get('/category/{id}/view','IndexController@listbycategory');

//home page
Route::get('/','IndexController@index');

Route::get('/users/charts','AdminController@users')->name('users');

//Admin area
Route::group(['middleware'=>['auth','admin']],function (){
    Route::get('/admin','AdminController@index');
    /// Category Area
    Route::get('/admin/categories','CategoriesController@index')->name('category_index');
    Route::get('/admin/category/create','CategoriesController@create')->name('category_create');
    Route::post('/admin/category/create','CategoriesController@store')->name('category_store');
    Route::post('/admin/category/{id}','CategoriesController@edit')->name('category_edit');

    /// Products Area
    Route::get('/admin/product/create','ProductsController@create')->name('products_create');
    Route::post('/admin/product/create','ProductsController@store')->name('products_store');
    Route::get('/admin/products','ProductsController@index')->name('products_index');
    Route::get('/admin/product/{id}/edit','ProductsController@edit')->name('product_edit');
    Route::put('/admin/product/{id}/update','ProductsController@update')->name('product_update');


});
