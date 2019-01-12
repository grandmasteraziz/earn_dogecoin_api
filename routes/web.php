<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return "  <h1>urapprate Api v1 </h1>"." powered by <br>".$router->app->version();
});

// Mobile Apps
$router->get('/apps','MobileAppController@index');
$router->get('/apps/{mAppID}','MobileAppController@show');
$router->post('/apps','MobileAppController@store');
$router->put('/apps/{mAppID}','MobileAppController@update');
$router->delete('/apps/{mAppID}','MobileAppController@delete');

//Auth
$router->post('/register','AuthController@register');
$router->post('/login','AuthController@login');
$router->get('/logout','AuthController@logOut');

//User
$router->put('/user/wallet','UserController@addUserDogeWallet');
$router->put('/user/googlename','UserController@addUserGoogleName');
$router->get('/getuserinfo','UserController@getUserAccount');


//User Device
$router->post('/userdevice','UserDeviceController@addUserDevice');

//Transaction
$router->post('/transaction','TransactionController@store');
$router->get('/calculate','TransactionController@calculatePrice');
$router->get('/calc/{id}','TransactionController@calculateLimit');



//Notification
$router->get('/notifications','NotificationController@index');
$router->get('/notifications/{id}','NotificationController@show');
$router->post('/notifications','NotificationController@store');
$router->put('/notifications/{id}','NotificationController@update');
$router->delete('/notifications/{id}','NotificationController@delete');


//Artisan Controller
$router->get('/cache-clear','ArtisanController@cacheClear');
$router->get('/route-clear','ArtisanController@routeClear');




