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

.......................................................
Route parameters  
مثال : لدي منتج معروض في الصفحة ومعلوماته في قاعدة
 البيانات أستخدم البراميتر للأرسال بياناته للصفحة المعروض بها المنتج
 http://127.0.0.1:8000/name_page/id
 الرابط/ واسم الصفحة التي بها المنتج/ ثم الالبراميتر
.......................................................

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('1', function () {
    return 'welcome';
});

