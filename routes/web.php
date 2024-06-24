<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomePageController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });



Route::controller(HomePageController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/coop-news/{postSlug}', 'blogSinglePage')->name('blog.single');
    Route::get('/coop-news', 'blogListPage')->name('blog.list');
    Route::get('/contact-us', 'contactUs')->name('contactus');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin page routes
Route::middleware('auth')->controller(PageController::class)->group(function () {
    Route::get('/page', 'index')->name('page.index');
    Route::get('/page/add-page', 'createPageForm')->name('page.add');
    Route::post('/page/create', 'createPage')->name('page.create');
    Route::get('/page/edit/{pageId}', 'editPage')->name('page.edit');
    Route::patch('/page/update/{pageId}', 'updatePage')->name('page.update');
    Route::get('/page/delete/{pageId}', 'deletePage')->name('page.delete');
});

//admin page routes
Route::middleware('auth')->controller(PostController::class)->group(function () {
    Route::get('/post', 'index')->name('post.index');
    Route::get('/post/add-post', 'createPostForm')->name('post.add');
    Route::post('/post/create', 'createPost')->name('post.create');
    Route::get('/post/edit/{postId}', 'editpost')->name('post.edit');
    Route::patch('/post/update/{postId}', 'updatePost')->name('post.update');
    Route::get('/post/delete/{postId}', 'deletePost')->name('post.delete');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

require __DIR__.'/auth.php';

// Route::controller(PageController::class)->group(function () {
//     Route::get('{pageName}', 'viewPage')->name('page.view'); //put the slug in {pageName}
// });


Route::get('{pageName}', [HomePageController::class, 'viewPage'])->name('page.view'); //put the slug in {pageName}




