<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('1', function () {
    return 'welcome';
});


//  قمنا بوضع براميتر أجباري 
Route::get('2/{id}', function ($id) {
   
    echo "هنا براميتر أجباري ولن يتم عرض الصفحة إلا مع البراميت";

    return $id;
});


//مثال على براميتر اختياري

Route::get('3/{id?}', function () {
    return 'هنا براميتر ليس أجباري';
});


// مثال على استخدام  (Route_prefix)

Route::group([ 'prefix' => '4'], function(){

   Route::get('/', function () {
    return 'هنا مثال على استخدام (Route_prefix)';
});

    Route::get('/1', function () {
        return 'هنا مثال آخر على استخدام (Route_prefix2)';
});


});

// مثال على الكنترولر واستدعاءه


Route::get('5', 'SecondController@ShowString2');

Route::get('6', 'NewControllers\FirstController@ShowString');


// مثال على namespace
// مثال على 
Route::group(['namespace' => 'newControllers'], function(){

    Route::get('7', 'FirstController@ShowString'); -> middleware ('');
    Route::get('8', 'FirstController@ShowString');
    Route::get('9', 'FirstController@ShowString1');
    Route::get('10', 'FirstController@ShowString2');
    Route::get('11', 'FirstController@ShowString3');

});


Route::get('/', function () {
    return 'الرجاء تسجيل الدخول';
}); -> name ('login');