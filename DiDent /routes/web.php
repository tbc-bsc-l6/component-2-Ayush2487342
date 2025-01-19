<?php

use App\Http\Controllers\AboutBestController;
use App\Http\Controllers\AboutGalleryDescriptionController;
use App\Http\Controllers\AboutProblemController;
use App\Http\Controllers\AboutRightImageController;
use App\Http\Controllers\AboutVideoController;
use App\Http\Controllers\CertifaicateAssociationsController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\DentailClinicController;
use App\Http\Controllers\Home\AboutPageController;
use App\Http\Controllers\Home\BlogPageController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\ServicePageController;
use App\Http\Controllers\Home\TestimonialPageController;
use App\Http\Controllers\IFrameController;
use App\Http\Controllers\OpenHourController;
use App\Http\Controllers\OpeningTimeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecentNewsController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\UserContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/admin/change-password', [ProfileController::class, 'updatePassword'])->name('admin.change-password');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/opening/time', [OpeningTimeController::class, 'index'])->name('opening.time');
    Route::put('/opening/time/update', [OpeningTimeController::class, 'update'])->name('opening.time.update');
    //social media 
    Route::get('/admin/social/media', [SocialMediaController::class, 'index'])->name('admin.social.media');
    Route::put('/admin/social/media/update', [SocialMediaController::class, 'update'])->name('socialMedia.update');


    //settings 
    Route::get('/admin/settings', [SettingController::class, 'index'])->name('admin.setting');
    Route::post('/image/upload', [SettingController::class, 'uploadImage'])->name('image.upload.post');
    Route::put('/hospital/info/update', [SettingController::class, 'infoUpdate'])->name('hospital.info.update');

    // contact us page admin controller like user information delete seen
    Route::get('dashboard/contact/us', [UserContactController::class, 'index'])->name('user.contact');
    Route::put('/user/toogle/update/{userId}/{status}', [UserContactController::class, 'updateStatus'])->name('user.toogle.update');
    Route::delete('/user-contact/delete/{userId}', [UserContactController::class, 'delete'])->name('user-contact.delete');

    // opening hour contrller like add delete update
    Route::get('dashboard/opening/hour', [OpenHourController::class, 'index'])->name('opening.hour');
    Route::post('dashboard/open/hour', [OpenHourController::class, 'store'])->name('open.hour.store');
    Route::put('dashboard/open/hour/update/{id}', [OpenHourController::class, 'update'])->name('open.hour.update');

    // google map like iframe

    Route::get('dashboard/google/map', [IFrameController::class, 'index'])->name('i.frame.index');
    Route::put('dashboard/map/update', [IFrameController::class, 'update'])->name('iframe.update');
    //about
    Route::get('dashboard/about/clinic', [DentailClinicController::class, 'index'])->name('dentail.cli');
    Route::post('dashboard/about/clinic/update', [DentailClinicController::class, 'update'])->name('dentail.cli.update');
    Route::get('dashboard/about/rightimage', [AboutRightImageController::class, 'index'])->name('about.right.image');
    Route::get('/rightImage/edit/{image}', [AboutRightImageController::class, 'edit'])->name('rightImage.edit');
    Route::post('/rightImage/update/{image}', [AboutRightImageController::class, 'update'])->name('rightImage.update');

    // video
    Route::get('dashboard/about/video', [AboutVideoController::class, 'index'])->name('about.video');
    Route::put('about/video/update', [AboutVideoController::class, 'update'])->name('about.video.update');
    //best
    Route::get('dashboard/about/best', [AboutBestController::class, 'index'])->name('about.best');
    Route::put('dashboard/about/store', [AboutBestController::class, 'update'])->name('about.best.update');
    Route::post('dashboard/about/card/store', [AboutBestController::class, 'store'])->name('about.best.card.store');
    Route::delete('about/card/delete/{id}', [AboutBestController::class, 'destory'])->name('aboutBestCard.destroy');
    Route::get('/about/best/card/{id}/edit', [AboutBestController::class, 'edit'])->name('aboutBestCard.edit');
    Route::put('/about/best/card/{id}', [AboutBestController::class, 'cardupdate'])->name('aboutBestCard.update');

    //About page Gallery description
    Route::get('dashboard/about/gallery/description', [AboutGalleryDescriptionController::class, 'index'])->name('about.gallery.description');
    Route::put('dashboard/about/gallery/description/update', [AboutGalleryDescriptionController::class, 'update'])->name('gallery.description.update');

    //certifacicateAssociation
    Route::get('dashboard/certifaicate/association', [CertifaicateAssociationsController::class, 'index'])->name('admin.certificate.association');
    Route::post('dashboard/certifaicate/association/store', [CertifaicateAssociationsController::class, 'store'])->name('certifaicate.association.store');
    Route::delete('dashboard/certifaicate/association/delete/{id}', [CertifaicateAssociationsController::class, 'destory'])->name('certifaicate.association.delete');
    Route::put('dashboard/certifaicate/association/toggle/{id}', [CertifaicateAssociationsController::class, 'toggleUpdate'])->name('certifaicate.association.toggleUpdate');

    // about problem 
    Route::get('dashboard/about/problem', [AboutProblemController::class, 'index'])->name('about.problem');
    Route::put('dashboard/about/problem/store', [AboutProblemController::class, 'update'])->name('about.problem.update');
    Route::get('dashboard/recent/news', [RecentNewsController::class, 'index'])->name('recent.news');
    Route::get('dashboard/recent/news/edit/{id}', [RecentNewsController::class, 'edit'])->name('recent.news.edit');
    Route::post('dashboard/recent/news/store', [RecentNewsController::class, 'store'])->name('recent.news.store');
    Route::delete('dashboard/recent/news/delete/{id}', [RecentNewsController::class, 'destory'])->name('recent.news.delete');
    Route::put('dashboard/recent/news/update/{id}', [RecentNewsController::class, 'update'])->name('recent.news.update');
});


require __DIR__ . '/auth.php';

// home page 
Route::get('/', [HomeController::class, 'index'])->name('home.page');
Route::get('/dident/contact', [ContactPageController::class, 'index'])->name('contact.page');
Route::post('/dident/contact/message', [ContactPageController::class, 'store'])->name('contact.store');
Route::get('/dident/about', [AboutPageController::class, 'index'])->name('about.page');
Route::get('/dident/service', [ServicePageController::class, 'index'])->name('service.page');
Route::get('/dident/service/details/{id}', [ServicePageController::class, 'showDetails'])->name('service.details.page');
Route::get('/dident/blog', [BlogPageController::class, 'index'])->name('blog.page');


