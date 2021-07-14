<?php

use Illuminate\Support\Facades\Route;

/*


Route::get($uri, $callback);
أرسال صفحة أي عرضها لايوجد عمليات في قاعدة البيانات
Route::post($uri, $callback);
عمليات على قاعدة البيانات ثم عرضها
Route::put($uri, $callback);
تعديل على صفحة أي التعديل في قاعدة البيانات
Route::patch($uri, $callback);
Route::delete($uri, $callback);
حذف من قاعدة البيانات وتسطيع تنفيذ أمر الحذ بأستخدام (post)
Route::options($uri, $callback);



*/

Route::get('/', function () {
    return view('welcome');
});



