<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
/*
 طيب الان في ملف الاوث هادا (الجملة الي فوق) هادا داخله ملفات php 
 جاهزة مثل تسجيل الدخول و ال login 
 وايضا هذه الصفحات مبرمجة وجاهزه ما عليك غير انك بعد رقم البورت تعمل مثلا /login   or /home
  وهكذا الان هادي وجهات مبرمجه مع القواعد البيانات الخاصه فيها يعني انته لو رحت على مجلد الداتابيز من 
   القائمة الي في الجنب حتلاقي دخلها مجلدات بنختار مجلد migrations
   وبداخل هدا الجلد كل ملفات قواعد البيانات الي معك يعني بدك تنشأ اي جدول لازم تنشأه    في هادا الملف
   ومن ثمة اتروح بعد ما تنشأه تربطه بالبرنامج اي بلغة ال laravel
   الفكره هادا المجلد بتحط فيه فقط الجداول وبتعملها لكن اسم قاعدة البيانات لازم اتروح تنشأها مبدئيا 
   بشكل يدوي من ال phpmyadmin
   وبعدها اتروح على ملف  .env
   
   phpmyadmin وتروح على سطر اسم قاعدة البيانات وتغير اسم القاعدة الي اسم القاعدة الي انشأتها بال 
 
بعدها بتعمل امر هادا بالتيرمينل وعندها بتنتج معك قاعدة البيانات جاهزة
php artisan migrate   
هادا الامر بحكي للبرنامج روح نفذلي الجداول هدول داخل قاعدة البيانات




*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
