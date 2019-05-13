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

Route::get('/', 'HomeController@index');
#正則學號
Route::pattern('student_no' , 's[0-9]{10}');

#群組路由 路由網址前皆套上students/
Route::group(['prefix'=>'students'],function(){
    #學號
    Route::get('{student_no}',[
        'as' => 'students',
        'uses' =>'StudentsController@getStudentData'
    ]);
    #學生查詢所有科目成績或特定科目成績(選擇性路由)
    Route::get('{student_no}/score/{subject?}',[
        'as' => 'students.score',
        'uses' => 'StudentsController@getStudentScore'
    ])->where(['subject' => '(chinese|math|english)']);

});

#隱藏路由 這個要載插件
AdvancedRoute::controller('board','BoardController');

#controller命名空間
Route::group(['namespace'=>'Cool'],function(){
    Route::get('cool','Cool/TestController@index');
});

#資源控制器 一樣要載東西  目前不會用到 但第13 14章會用到
Route::resource('photos', 'PhotosController');

Route::group(['middleware'=>'auth'],function(){
    Route::get('edit','SchoolController@edit');
    Route::post('edit','SchoolController@update');
});

#我們要來自製鷹架
Route::get('login','AuthController@getLogin');
Route::post('login','AuthController@postLogin');
Route::get('logout','AuthController@getLogout');
