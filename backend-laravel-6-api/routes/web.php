<?php

Route::get('file','FileController@create');
Route::post('file','FileController@store');
// function readFiless($file){

//     $fp = fopen($file,'r');

//     while ($line = fgets($fp)) {

//         yield $line;
//     }
// }
// class IpFilter
// {
//     private $ip;

//     public function __construct($ip)
//     {
//      $this->ip = $ip;
//      $this->uniqid = uniqid();
//     }
// }

// App::singleton('IpFilter', function($app){
//     return new IpFilter($app->make('request')->getClientIp());
// });

//  Route::get('/',function(IpFilter $ipFilter){

//     dd($ipFilter);

// });

app('router')->get('user/create', 'UserController@index');
Route::post('user/create', 'UserController@store');
// Route::get('/customer/{customerId}','CustomersController@show');
// Route::get('/customer/{customerId}/update','CustomersController@update');
// Route::get('/customer/{customerId}/delete','CustomersController@delete');
// Route::get('/test','TestController@index');
// Route::get('/', function () {



// //    foreach (readFiless(storage_path('logs/laravel-2019-09-09.log')) as  $line) {

// //     dump($line);
// //    }

// //     return 'Done';
//         return view("welcome");
// });
// Route::get('/{any?}', function (){
//     return view('welcome');
// })->where('any', '^(?!api\/)[\/\w\.-]*');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
