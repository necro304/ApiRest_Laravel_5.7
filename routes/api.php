<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
 * buyer
 */
Route::Apiresource('buyers', 'Buyer\BuyerController',['only'=> ['index', 'show']]);
/*
 * category
 */
Route::Apiresource('category', 'Category\CategoryController');
/*
 * products
 */
Route::Apiresource('products', 'Product\ProductController',['only'=> ['index', 'show']]);
/*
 * transaction
 */
Route::Apiresource('transactions', 'Transaction\TransactionController',['only'=> ['index', 'show']]);
/*
 * seller
 */
Route::Apiresource('sellers', 'Seller\SellerController',['only'=> ['index', 'show']]);
/*
 * user
 */
Route::Apiresource('users', 'User\UserController');

