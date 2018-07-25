<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout');
// });
//Frontend site................
Route::get('/', 'HomeController@index');

//Show Category wise product here
Route::get('/product_by_category/{category_id}', 'HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}', 'HomeController@show_product_by_manufacture');
Route::get('/view_product/{product_id}', 'HomeController@product_details_by_id');

//Cart Routes are here
Route::post('/add-to-cart', 'CartController@add_to_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');
Route::post('/update-cart', 'CartController@update_cart');

//Checkout Routes are here
Route::get('/login-check', 'checkoutController@login_check');
Route::post('/customer-registration', 'checkoutController@customer_registration');
Route::get('/checkout', 'checkoutController@checkout');
Route::post('/save-shipping-details', 'checkoutController@save_shipping_details');
//Customer Login and Logout Routes are here
Route::post('/customer-login', 'checkoutController@customer_login');
Route::get('/customer-logout', 'checkoutController@customer_logout');
Route::get('/payment', 'checkoutController@payment');
Route::post('/order-place', 'checkoutController@order_place');
Route::get('/manage-order', 'checkoutController@manage_order');
Route::get('/view-order/{order_id}', 'checkoutController@view_order');


//Backend routes......................
Route::get('/logout','SupperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SupperAdminController@index');
Route::post('/admin-dashboard', 'AdminController@dashboard');

//Catrgory Related Route

Route::get('/add-category','CategoryController@index');
Route::get('/all-category','CategoryController@all_category');
Route::post('/save-category','CategoryController@save_category');
Route::get('/edit-category/{category_id}','CategoryController@edit_category');
Route::get('/delete-category/{category_id}','CategoryController@delete_category');
Route::post('/update-category/{category_id}','CategoryController@update_category');
Route::get('/unactive-category/{category_id}','CategoryController@unactive_category');
Route::get('/active-category/{category_id}','CategoryController@active_category');

//Manufacture or Brands Routes are here
Route::get('/add-manufacture','ManufactureController@index');
Route::post('/save-manufacture','ManufactureController@save_manufacture');
Route::get('/all-manufacture','ManufactureController@all_manufacture');
Route::get('/delete-manufacture/{manufacture_id}','ManufactureController@delete_manufacture');
Route::get('/edit-manufacture/{manufacture_id}','ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}','ManufactureController@update_manufacture');
Route::get('/unactive-manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');
Route::get('/active-manufacture/{manufacture_id}','ManufactureController@active_manufacture');

//Products Routes are here
Route::get('/add-product','ProductController@index');
Route::post('/save-product','ProductController@save_product');
Route::get('/all-product','ProductController@all_product');
Route::get('/unactive-product/{product_id}','ProductController@unactive_product');
Route::get('/active-product/{product_id}','ProductController@active_product');
Route::get('/delete-product/{product_id}','ProductController@delete_product');
Route::get('/edit-product/{product_id}','ProductController@edit_product');
Route::post('/update-product/{product_id}','ProductController@update_product');

//Slider Routes are here
Route::get('/add-slider','SliderController@index');
Route::post('/save-slider','SliderController@save_slider');
Route::get('/all-slider','SliderController@all_slider');
Route::get('/unactive-slider/{slider_id}','SliderController@unactive_slider');
Route::get('/active-slider/{slider_id}','SliderController@active_slider');
Route::get('/delete-slider/{slider_id}','SliderController@delete_slider');

