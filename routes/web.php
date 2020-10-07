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

        // USER
        Route::group(['prefix' => 'user'], function () {
            Route::get('/', 'UserController@index')->name('user.index');
            Route::get('/show/{id}', 'UserController@show')->name('user.show');
            Route::post('/{id}', 'UserController@update')->name('user.update');
            Route::delete('/{id}', 'UserController@delete')->name('user.delete');
            Route::get('/{id}', 'UserController@edit')->name('user.edit');
        });

        // PRODUCT
        Route::group(['prefix' => 'product'], function () {
            Route::get('/', 'ProductController@index')->name('product.index');
            Route::post('/', 'ProductController@store')->name('product.store');
            Route::get('/create', 'ProductController@create')->name('product.create');
            Route::get('/show/{id}', 'ProductController@show')->name('product.show');
            Route::post('/{id}', 'ProductController@update')->name('product.update');
            Route::delete('/{id}', 'ProductController@delete')->name('product.delete');
            Route::get('/{id}', 'ProductController@edit')->name('product.edit');
        });

        // ARTICLE
        Route::group(['prefix' => 'article'], function () {
            Route::get('/', 'ArticleController@index')->name('article.index');
            Route::post('/', 'ArticleController@store')->name('article.store');
            Route::get('/create', 'ArticleController@create')->name('article.create');
            Route::get('/show/{id}', 'ArticleController@show')->name('article.show');
            Route::post('/{id}', 'ArticleController@update')->name('article.update');
            Route::delete('/{id}', 'ArticleController@delete')->name('article.delete');
            Route::get('/{id}', 'ArticleController@edit')->name('article.edit');
        });
    });
});
