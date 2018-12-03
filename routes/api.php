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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


/**
 *  运营路由配置
 * */

Route::prefix('admin')->group(function(){

    Route::get('arealist','admin\AreaController@GetAreaList');  // 获取列表数据
    Route::post('updatearea','admin\AreaController@UpdateArea'); //修改
    Route::post('insertarea','admin\AreaController@InsertArea'); //新增
    Route::post('deletearea','admin\AreaController@DeleteArea'); //删除


});

/**
 *  news 新闻路由配置
 * */

Route::prefix('Admin')->group(function(){

    Route::get('NewsList','admin\NewsController@GetNewsList');  //获取所有新闻
    Route::post('InsertNews','admin\NewsController@InsertNews');  //新增新闻
    Route::post('UpdateNews','admin\NewsController@UpdateNews');  //修改新闻
    Route::post('DeleteNews','admin\NewsController@DeleteNews');  //删除新闻
});

