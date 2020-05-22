<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//AUTHENTICATION
Route::post('/Register', 'Api\AuthController@Register');
Route::post('/Login', 'Api\AuthController@Login');
Route::get('/Logout', 'Api\AuthController@Logout');

//USERS
Route::post('/GetAllUsers', 'Api\UserController@GetAllUsers');
Route::post('/GetUserById', 'Api\UserController@GetUserById');
Route::post('/GetUserByEmail', 'Api\UserController@GetUserByEmail');

//FRIENDS
Route::post('/AddFriend', 'Api\UserController@AddFriend');
Route::post('/AcceptFriend', 'Api\UserController@AcceptFriend');
Route::post('/RemoveFriend', 'Api\UserController@RemoveFriend');
Route::post('/GetAllUsersNotFriends', 'Api\UserController@GetAllUsersNotFriends');
Route::post('/GetAllFriends', 'Api\UserController@GetAllFriends');


//GAME
Route::post('/StartGame', 'Api\GameController@StartGame');
