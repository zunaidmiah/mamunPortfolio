<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\PortfoliosController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\profileInfoController;
use App\Http\Controllers\RecomendationsController;

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

Route::controller(FrontEndController::class)->group( function(){

    Route::get('/', 'index')->name('homepage');

    Route::get('/blog', 'blog')->name('blog');

    Route::get('/blog-details/{id}', 'blog_details')->name('blog-details');

    Route::post('/comment-db', 'comment_db');


});

// Admin route group
Route::prefix('sl-admin')->group(function(){

    Route::controller(AdminController::class)->group(function(){

        // admin basic routing

        Route::get('/', 'index')->name('admin-dashboard');

        Route::get('/login',  'login')->name('login');

        Route::any('/loggedin',  'authenticate')->name('loggedin');

        Route::get('/register',  'register')->name('signup');

        Route::any('/registration',  'store')->name('new-signup');

        Route::get('/forgot-password',  'forgot_password')->name('forgot-password');

        Route::get('/change-password',  'change_password')->name('change-password');

        Route::get('/logout', 'logout')->name('admin-logout');

        // comments for admin

        Route::get('/pending-comment', 'pending_comment')->name('pending-comment');

        Route::any('/update-comment/{id}', 'update_comment')->name('update-comment');

        Route::get('/all-comment', 'all_comment')->name('all-comment');

        Route::get('/delete-comment/{id}', 'destroy_comment')->name('delete-comment');

        Route::get('/hide-comment/{id}', 'hide_comment')->name('hide-comment');

        Route::get('/show-comment/{id}', 'show_comment')->name('show-comment');


        // recommendation for admin

        Route::get('/pending-recommendation', 'pending_recommendation')->name('pending-recommendation');

        Route::get('/hide-recommendation/{id}', 'hide_recommendation')->name('hide-recommendation');

        Route::get('/show-recommendation/{id}', 'show_recommendation')->name('show-recommendation');


    });

    Route::controller(RecomendationsController::class)->group(function(){

        Route::get('/add-recommendation', 'index')->name('add-recommendation');

        Route::post('/add-recommendation', 'store')->name('add-recommendation-db');

        Route::get('/all-recommendation', 'show')->name('all-recommendation');

        Route::get('/delete-recommendation/{id}', 'destroy')->name('delete-recommendation');

        Route::any('/update-recommendation/{id}', 'update')->name('update-recommendation-db');


    });

    Route::controller(CategoriesController::class)->group(function(){

        // category for admin


        Route::get('/add-category', 'index')->name('add-category');

        Route::any('/add-category-db', 'store')->name('add-category-db');

        Route::any('/update-category-db/{id}', 'update')->name('update-category-db');

        Route::get('/all-category', 'show')->name('all-category');

        Route::get('/delete-category/{id}', 'destroy')->name('delete-category');

    });

    Route::controller(BlogsController::class)->group(function(){

        // blog for admin

        Route::get('/add-blog', 'index')->name('add-blog');

        Route::any('/add-blog-db', 'store')->name('add-blog-db');

        Route::any('/update-blog/{id}', 'update')->name('update-blog-db');

        Route::get('/all-blog', 'show')->name('all-blog');

        Route::get('/delete-blog/{id}', 'destroy')->name('delete-blog');

    });

    Route::controller(PortfoliosController::class)->group(function(){

        // portfolios for admin

        Route::get('/add-portfolio', 'index')->name('add-portfolio');

        Route::any('/add-portfolio-db', 'store')->name('add-portfolio-db');

        Route::any('/update-portfolio/{id}', 'update')->name('update-portfolio-db');

        Route::get('/all-portfolio', 'show')->name('all-portfolio');

        Route::get('/delete-portfolio/{id}', 'destroy')->name('delete-portfolio');

    });

    Route::controller(profileInfoController::class)->group(function(){

        Route::get('general-info', 'general')->name('general-info');

        Route::post('general-info-db', 'general_info_db')->name('general-info-db');

        Route::get('social-info', 'social')->name('social-info');

        Route::post('social-info-db', 'social_info_db')->name('social-info-db');

        Route::get('institution-info', 'institution')->name('institution-info');

        Route::get('pricing-info', 'pricing')->name('pricing-info');

        Route::get('skills-info', 'skills')->name('skills-info');

        Route::get('working-info', 'working')->name('working-info');

        Route::get('service-info', 'service')->name('service-info');

        Route::get('choose-me-info', 'chooseMe')->name('choose-me-info');

        Route::get('faq-info', 'faq')->name('faq-info');

        Route::get('award-info', 'award')->name('award-info');

        Route::get('contribution-info', 'contribution')->name('contribution-info');

        Route::get('team-info', 'team')->name('team-info');

        Route::get('website-setting', 'website')->name('website-setting');

        Route::get('template-setting', 'template')->name('template-setting');

        Route::post('template-setting', 'template_setting')->name('template-setting-db');

        Route::post('institution-info-db', 'institution_info')->name('institution-info-db');

        Route::post('pricing-info-db', 'pricing_info')->name('pricing-info-db');

        Route::get('/delete-institution/{id}', 'institution_destroy')->name('delete-institution');

        Route::get('/delete-pricing/{id}', 'pricing_destroy')->name('delete-pricing');

        Route::post('working-info-db', 'working_info')->name('working-info-db');

        Route::get('delete-working/{id}', 'working_destroy')->name('delete-working');

        Route::post('service-info-db', 'service_info')->name('service-info-db');

        Route::get('delete-service/{id}', 'service_destroy')->name('delete-service');

        Route::post('choose-info-db', 'choose_info')->name('choose-info-db');

        Route::get('delete-choose/{id}', 'choose_destroy')->name('delete-choose');

        Route::post('faq-info-db', 'faq_info')->name('faq-info-db');

        Route::get('delete-faq/{id}', 'faq_destroy')->name('delete-faq');

        Route::post('award-info-db', 'award_info')->name('award-info-db');

        Route::get('delete-award/{id}', 'award_destroy')->name('delete-award');

        Route::post('contribution-info-db', 'contribution_info')->name('contribution-info-db');

        Route::get('delete-contribution/{id}', 'contribution_destroy')->name('delete-contribution');

        Route::post('skills-info-db', 'skills_info')->name('skills-info-db');

        Route::get('delete-skills/{id}', 'skills_destroy')->name('delete-skills');

        Route::post('team-info-db', 'team_info')->name('team-info-db');

        Route::get('delete-team/{id}', 'team_destroy')->name('delete-team');

        Route::post('website-info-db', 'website_info_db')->name('website-info-db');

    });



});

// handle all unknown route
Route::fallback(function(){
    return view('404');
});
