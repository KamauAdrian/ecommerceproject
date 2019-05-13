<?php

//my ecommerce project overview
//sign up and in  page
//main page -> general landing page
//products page -> view all products per category
//product page -> view a single product
//cart page -> add product to cart if interested in shoping
//check out page -> delivery address for buyers



Auth::routes();
/// Simple User Login /////
Route::get('/login_page','UsersController@index');
Route::post('/register_user','UsersController@register');
Route::post('/user_login','UsersController@login');
Route::get('/logout','UsersController@logout');
//Route::get('/logout', 'LoginController@logout')->name('logout');
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'WelcomeController@index');

//view product
Route::get('/product-detail/{id}','IndexController@productdetials');

///// Cart Area /////////
Route::post('/addToCart','CartController@addToCart')->name('addToCart');


//categories view products per category
Route::get('/category/{id}/view','IndexController@listbycategory');


//home page
Route::get('/','IndexController@index');

Route::get('/users/charts','AdminController@users')->name('users');
//view products
Route::get('/products-all','ProductsController@product');
//
Route::get('/products-all','ProductsController@product');

//Admin area
//Route::get('/admin','AdminController@index');
Route::group(['middleware'=>['auth','admin']],function (){
    Route::get('/admin','AdminController@index');


    /// Category Area
    Route::get('/admin/categories','CategoriesController@index')->name('category_index');
    Route::get('/admin/category/create','CategoriesController@create')->name('category_create');
    Route::post('/admin/category/create','CategoriesController@store')->name('category_store');

    /// Products Area
    Route::get('/admin/product/create','ProductsController@create')->name('products_create');
    Route::get('/admin/products','ProductsController@index')->name('products_index');
});
