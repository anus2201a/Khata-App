<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('price', [HomeController::class, 'price'])->name('price');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact/store', [HomeController::class, 'contact_post'])->name('contact.store');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('blog-details/{id}', [HomeController::class, 'blog_details'])->name('blog.details');
Route::get('service', [HomeController::class, 'service'])->name('service');
Route::get('servicedetails/{id}', [HomeController::class, 'service_details'])->name('service.details');


// Admin Controllers
// Auth::routes();

Route::group(['middleware' => ['checkuser']], function () {

    Route::prefix('dashboard')->group(function () {

        Route::get('', [AdminController::class, 'index'])->name('dashboard.home');
        Route::get('/web-cms/home', [AdminController::class, 'cms_home_form'])->name('web-cms.home');
        Route::post('/update-cms', [AdminController::class, 'update_cms'])->name('update-cms');
        Route::get('/web-cms/about', [AdminController::class, 'cms_about_form'])->name('web-cms.about');
        Route::get('/web-cms/career', [AdminController::class, 'cms_career_form'])->name('web-cms.career');
        Route::get('/web-cms/service', [AdminController::class, 'cms_service_form'])->name('web-cms.service');
        Route::get('/web-cms/contact', [AdminController::class, 'cms_contact_form'])->name('web-cms.contact');
        Route::get('/team/add', [AdminController::class, 'add_team_member'])->name('team.add');
        Route::post('/team/store', [AdminController::class, 'add_team_member_post'])->name('team.store');
        // Route::get('/team/view', [AdminController::class, 'view_team_member'])->name('team.view');
        Route::get('/team/edit/{id}', [AdminController::class, 'update_team_member'])->name('team.update');
        Route::post('/team/update/{id}', [AdminController::class, 'update_team_member_post'])->name('team.update.store');
        Route::get('/team/delete/{id}', [AdminController::class, 'delete_team_member'])->name('team.delete');
        Route::get('/category/add', [AdminController::class, 'category_form'])->name('category.add');
        Route::post('/category/store', [AdminController::class, 'category_post'])->name('category.store');
        Route::get('/category', [AdminController::class, 'view_category'])->name('category.view');
        Route::get('/category/edit/{id}', [AdminController::class, 'update_category_form'])->name('category.update');
        Route::post('/category/update/{id}', [AdminController::class, 'update_category_post'])->name('category.update.store');
        Route::get('/category/delete/{id}', [AdminController::class, 'delete_category'])->name('category.delete');
        Route::get('/service/add', [AdminController::class, 'service_form'])->name('service.add');
        Route::post('/service/store', [AdminController::class, 'service_post'])->name('service.store');
        Route::get('/service/view', [AdminController::class, 'view_service'])->name('service.view');
        Route::get('/service/update/{id}', [AdminController::class, 'update_service_form'])->name('service.update');
        Route::post('/service/update-store/{id}', [AdminController::class, 'update_service_post'])->name('service.update.store');
        Route::get('/service/delete/{id}', [AdminController::class, 'delete_service'])->name('service.delete');
        Route::get('/service-faqs/add', [AdminController::class, 'service_faqs_form'])->name('service-faqs.add');
        Route::post('/service-faqs/store', [AdminController::class, 'service_faqs_post'])->name('service-faqs.store');
        Route::get('/service-faqs/view', [AdminController::class, 'all_service_faqs'])->name('service-faqs.view');
        Route::get('/service-faqs/update/{id}', [AdminController::class, 'update_service_faqs'])->name('service-faqs.update');
        Route::post('/service-faqs/update-store/{id}', [AdminController::class, 'update_service_faqs_post'])->name('service-faqs.update-store');
        Route::get('/service-faqs/delete/{id}', [AdminController::class, 'delete_service_faqs'])->name('service-faqs.delete');
        Route::get('/blog/add', [AdminController::class, 'blog_form'])->name('blog.add');
        Route::post('/blog/store', [AdminController::class, 'blog_post'])->name('blog.store');
        Route::get('/blog/view', [AdminController::class, 'view_blog'])->name('blog.view');
        Route::get('/blog/update/{id}', [AdminController::class, 'update_blog'])->name('blog.update');
        Route::post('/blog/update-store/{id}', [AdminController::class, 'update_blog_post'])->name('blog.update-store');
        Route::get('/blog/delete/{id}', [AdminController::class, 'delete_blog'])->name('blog.delete');
        Route::get('/platform/add', [AdminController::class, 'add_platform'])->name('platform.add');
        Route::post('/platform/store', [AdminController::class, 'add_platform_post'])->name('platform.store');
        Route::get('/platform/view', [AdminController::class, 'view_platform'])->name('platform.view');
        Route::get('/platform/update/{id}', [AdminController::class, 'update_platform'])->name('platform.update');
        Route::post('/platform/update-store/{id}', [AdminController::class, 'update_platform_post'])->name('platform.update-store');
        Route::get('/platform/delete/{id}', [AdminController::class, 'delete_platform'])->name('platform.delete');
        Route::get('website_logo', [AdminController::class, 'website_logo'])->name('website_logo');
        Route::post('website_logo_post', [AdminController::class, 'website_logo_post'])->name('website_logo_post');
        Route::get('/config/add', [AdminController::class, 'config_form'])->name('config.add');
        Route::get('/contact/view', [AdminController::class, 'contact_view'])->name('contact.view');
        Route::get('/contact/update/{id}', [AdminController::class, 'update_contact'])->name('contact.update');
        Route::post('/contact/delete/{id}', [AdminController::class, 'delete_contact'])->name('contact.delete');

        Route::get('/table/{slug}', [AdminController::class, 'listing'])->name('listing');
        Route::get('/table-manage/{slug}', [AdminController::class, 'listing_manage'])->name('listing_manage');
        Route::get('/user_khata/{slug}/{id}', [AdminController::class, 'user_khata'])->name('user_khata');
        Route::get('/form/{slug}/{id?}', [AdminController::class, 'generate_form'])->name('generate');
        Route::post('/store/{slug}', [AdminController::class, 'crud_generate'])->name('crud_generate');
        Route::get('/khata/get', [AdminController::class, 'get_khata'])->name('khata.get');


        // Route::post('/config/store', [AdminController::class, 'config_post'])->name('config.store');
    });
});

// AuthController Routes

Route::group(['middleware' => ['isalreadylogin']], function () {

    // Route::get('register', [AuthController::class, 'register_form'])->name('register');
    // Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::get('login-form', [AuthController::class, 'login_form'])->name('login.form');
    Route::post('login-post', [AuthController::class, 'login'])->name('login.post');
});

Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('change_password', [AuthController::class, 'change_password_form'])->name('change_password');
Route::post('change_password', [AuthController::class, 'change_password'])->name('change_password');
Route::get('profile_update', [AuthController::class, 'profile_update_form'])->name('profile.update');
Route::post('profile_update', [AuthController::class, 'profile_update'])->name('profile.update.store');
