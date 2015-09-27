<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return 'hello root';
});

Route::get('/hello', function()
{
    return 'Hello World';
});

Route::get('/magic', [
    'as' => 'magical.route',
    function()
    {
        return 'magical laravel';
    }
]);

Route::get('/magic-link',
    function()
    {
        return route('magical.route');
    }
);

Route::get('/user/{name?}',
    function($userName = '世界')
{
    return 'hello '. $userName. 'さん';
})
->where('name', '[A-Za-z]+');

Route::get('text', function()
{
    Log::info('例：テキストを返す');
    Log::warning('例：warningを返す');
    Log::error('例：errorを返す');
    Log::debug('debug test');
    return 'お寿司';
});

Route::get('notfound', function()
{
    //App::abort(404);
    App::abort(404);
    //return 'お寿司';
});

Route::post('happy-birthday', function(){
   return Response::json([
       'result' => 'NG',
       'message' => '引数"birthday_present"は必ず添付してください。',
       ],400);
});