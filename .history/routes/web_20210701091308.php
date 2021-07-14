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



Route::group(['namespace' => 'newControllers'], function(){


    Route::get('7', 'FirstController@ShowString');

});
