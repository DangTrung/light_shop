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

// HOMEPAGE
Route::get('/', 'HomeController@index')->name('home');

// ADMIN
Route::group(['namespace' => 'Admin'], function () {
    // LOG IN
    Route::group(['prefix' => 'login', 'middleware' => 'CheckLogedIn'], function () {
        Route::get('/', 'LoginController@getLogin')->name('getLogin');
        Route::post('/', 'LoginController@postLogin')->name('postLogin');
    });

    // LOG OUT
    Route::get('/logout', 'DashboardController@logout')->name('logout');

    // REGISTER
    Route::group(['prefix' => 'register'], function () {
        Route::get('/', 'RegisterController@getRegister')->name('getRegister');
        Route::post('/', 'RegisterController@postRegister')->name('postRegister');
    });

    Route::group(['prefix' => 'dashboard', 'middleware' => 'CheckLogedOut'], function () {
        // DASHBOARD
        Route::get('/', 'DashboardController@index')->name('dashboard');

        // CATEGORY
        Route::group(['prefix' => 'category'], function () {
            // PRODUCT
            Route::group(['prefix' => 'product'], function () {
                Route::get('/', 'ProductCateController@index')->name('productcate.index');
                Route::post('/', 'ProductCateController@create')->name('productcate.create');
                Route::get('/{id}', 'ProductCateController@edit')->name('productcate.edit');
                Route::post('/{id}', 'ProductCateController@update')->name('productcate.update');
                Route::delete('/{id}', 'ProductCateController@delete')->name('productcate.delete');
            });

            Route::group(['prefix' => 'article'], function () {
                Route::get('/', 'ArticleCateController@index')->name('articlecate.index');
                Route::post('/', 'ArticleCateController@create')->name('articlecate.create');
                Route::get('/{id}', 'ArticleCateController@edit')->name('articlecate.edit');
                Route::post('/{id}', 'ArticleCateController@update')->name('articlecate.update');
                Route::delete('/{id}', 'ArticleCateController@delete')->name('articlecate.delete');
            });
        });

        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@getProduct')->name('product.index');
            Route::post('/', 'ProductController@storeProduct')->name('product.store');
            Route::get('/create', 'ProductController@createProduct')->name('product.create');
            Route::get('/show/{id}', 'ProductController@showProduct')->name('product.show');
            Route::post('/{id}', 'ProductController@updateProduct')->name('product.update');
            Route::delete('/{id}', 'ProductController@deleteProduct')->name('product.delete');
            Route::get('/{id}', 'ProductController@editProduct')->name('product.edit');
        });
    });
});
