<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryCategoryController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoursecatController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\SiteconfigController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\WhychooseusController;
use App\Http\Middleware\AuthCheck;

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
Route::get('/index', function () {
    return view('index');
});

Route::post('/auth/save', 'App\Http\Controllers\LoginController@save')->name('auth.save');
Route::post('/auth/check', 'App\Http\Controllers\LoginController@check')->name('auth.check');

Route::get('/auth/logout', 'App\Http\Controllers\LoginController@logout')->name('auth.logout');


Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::get('/register', 'App\Http\Controllers\LoginController@register')->name('admin.register');


Route::get('/admin/dashboard', 'App\Http\Controllers\LoginController@dashboard')->middleware('AuthCheck');

Route::resource('galleryCategory', GalleryCategoryController::class)->middleware('AuthCheck');
Route::resource('gallery', GalleryController::class)->middleware('AuthCheck');
Route::resource('message', MessageController::class)->middleware('AuthCheck');
Route::resource('news', NewsController::class)->middleware('AuthCheck');
Route::resource('result', ResultController::class)->middleware('AuthCheck');
Route::resource('teacher', TeacherController::class)->middleware('AuthCheck');
Route::resource('blog', BlogController::class)->middleware('AuthCheck');
Route::resource('event', EventController::class)->middleware('AuthCheck');
Route::resource('notice', NoticeController::class)->middleware('AuthCheck');
Route::resource('slider', SliderController::class)->middleware('AuthCheck');
Route::resource('siteconfig', SiteconfigController::class)->middleware('AuthCheck');
Route::resource('whychooseus', WhychooseusController::class)->middleware('AuthCheck');
Route::resource('files', FileController::class)->middleware('AuthCheck');
Route::resource('course', CourseController::class)->middleware('AuthCheck');
Route::resource('coursecat', CoursecatController::class)->middleware('AuthCheck');
Route::resource('admission', AdmissionController::class)->middleware('AuthCheck');


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index','App\Http\Controllers\IndexController@index');

Route::get('/aboutus','App\Http\Controllers\IndexController@about_us');
Route::get('/messages','App\Http\Controllers\IndexController@messages');
Route::get('/planning','App\Http\Controllers\IndexController@planning');
Route::get('/admissions','App\Http\Controllers\IndexController@admission');

Route::get('/results','App\Http\Controllers\IndexController@results');
Route::get('/results/search','App\Http\Controllers\ResultController@search')->name('resultSearch');

Route::get('/notices','App\Http\Controllers\IndexController@notice');
Route::get('/notice_detail/{id}','App\Http\Controllers\IndexController@notice_detail');
Route::get('/notices/search','App\Http\Controllers\NoticeController@search')->name('noticeSearch');

Route::get('/courses/{id}','App\Http\Controllers\IndexController@course');
Route::get('/course_detail/{id}','App\Http\Controllers\IndexController@course_detail');
Route::get('/course/search','App\Http\Controllers\CourseController@search')->name('courseSearch');

Route::get('/whychooseuses','App\Http\Controllers\IndexController@whychooseus');

Route::get('/teachers','App\Http\Controllers\IndexController@teacher');
Route::get('/teacher_detail/{id}','App\Http\Controllers\IndexController@teacher_detail');

Route::get('/newses','App\Http\Controllers\IndexController@news');
Route::get('/news_detail/{id}','App\Http\Controllers\IndexController@news_detail');
Route::get('/newses/search','App\Http\Controllers\NewsController@search')->name('newsSearch');

Route::get('/galleries','App\Http\Controllers\IndexController@gallery');

Route::get('/events','App\Http\Controllers\IndexController@event');
Route::get('/event_detail/{id}','App\Http\Controllers\IndexController@event_detail');
Route::get('/events/search','App\Http\Controllers\EventController@search')->name('eventSearch');

Route::get('/blogs','App\Http\Controllers\IndexController@blog');
Route::get('/blog_detail/{id}','App\Http\Controllers\IndexController@blog_detail');
Route::get('/blogs/search','App\Http\Controllers\BlogController@search')->name('blogSearch');

Route::get('/contacts','App\Http\Controllers\IndexController@contacts');





