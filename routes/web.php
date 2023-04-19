<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\FakeAccountController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\RealAccountController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [Dashboard::class, 'index'])->name('home');
Route::post('/home/{id}', [FollowController::class, 'follback'])->name('follow.update');
Route::get('/history', [Dashboard::class, 'history'])->name('history');

Route::prefix('account')->group(function () {
    // New Route Soon
    // Update status
    Route::patch('/fake-users/{id}/status', [FakeAccountController::class, 'updateStatus'])->name('fake-users.updateStatus');
    // End Update
    Route::prefix('instagram')->group(function () {
        Route::get('/real-account', [RealAccountController::class, 'linkRealAccount'])->name('real.account');
        Route::get('/fake-account', [FakeAccountController::class, 'linkFollInstagram'])->name('fake.account');
        Route::get('/likes-post-promotion', [RealAccountController::class, 'linkLikePost'])->name('likes.instagram');
        Route::get('/comment-post-promotion', [RealAccountController::class, 'linkCommentPost'])->name('comments.instagram');
    });
    Route::prefix('youtube')->group(function () {
        Route::get('/real-account', [RealAccountController::class, 'linkRealAccountYoutube'])->name('real.youtube');
        Route::get('/fake-account', [FakeAccountController::class, 'linkSubsYoutube'])->name('fake.youtube');
        Route::get('/likes-video-promotion', [RealAccountController::class, 'linkLikePostYoutube'])->name('youtube.likes');
        Route::get('/comment-video-promotion', [RealAccountController::class, 'linkCommentPostYoutube'])->name('youtube.comment');
    });
    Route::prefix('tiktok')->group(function () {
        Route::get('/real-account', [RealAccountController::class, 'linkRealAccountTiktok'])->name('real.tiktok');
        Route::get('/fake-account', [FakeAccountController::class, 'linkFollTiktok'])->name('fake.tiktok');
        Route::get('/likes-video-promotion', [RealAccountController::class, 'linkLikePostTiktok'])->name('tiktok.likes');
        Route::get('/comment-video-promotion', [RealAccountController::class, 'linkCommentPostTiktok'])->name('tiktok.comment');
    });
    Route::get('/social', [RealAccountController::class, 'index']);
    Route::post('/real', [RealAccountController::class, 'store'])->name('real.store');
    Route::post('/fake', [FakeAccountController::class, 'store'])->name('fake.store');
});

Route::prefix('listing')->group(function () {
    Route::prefix('instagram')->group(function () {
        Route::get('/follow-me', [FollowController::class, 'followInstagram'])->name('follow.instagram');
        Route::get('/like-post', [FollowController::class, 'likeInstagram'])->name('like.instagram');
        Route::get('/comment-post', [FollowController::class, 'commentInstagram'])->name('comment.instagram');
        Route::post('/follow', [FollowController::class, 'follow'])->name('follow.follow');
        Route::get('/accept/{id}', [FollowController::class, 'accept'])->name('follow.accept');
        Route::get('/cancel/{id}', [FollowController::class, 'cancel'])->name('follow.cancel');
    });
    Route::prefix('youtube')->group(function () {
        Route::get('/subs-me', [FollowController::class, 'subscribeYoutube'])->name('subs.youtube');
        Route::get('/like-video', [FollowController::class, 'likeYoutube'])->name('like.youtube');
        Route::get('/comment-video', [FollowController::class, 'commentYoutube'])->name('comment.youtube');
        Route::post('/follow', [FollowController::class, 'follow'])->name('follow.follow');
        Route::get('/accept/{id}', [FollowController::class, 'accept'])->name('follow.accept');
        Route::get('/cancel/{id}', [FollowController::class, 'cancel'])->name('follow.cancel');
    });
    Route::prefix('tiktok')->group(function () {
        Route::get('/follow-me', [FollowController::class, 'followTiktok'])->name('follow.tiktok');
        Route::get('/like-video', [FollowController::class, 'likeTiktok'])->name('like.tiktok');
        Route::get('/comment-video', [FollowController::class, 'commentTiktok'])->name('comment.tiktok');
        Route::post('/follow', [FollowController::class, 'follow'])->name('follow.follow');
        Route::get('/accept/{id}', [FollowController::class, 'accept'])->name('follow.accept');
        Route::get('/cancel/{id}', [FollowController::class, 'cancel'])->name('follow.cancel');
    });
});
