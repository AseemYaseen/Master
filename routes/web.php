<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\User\ResultsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AmmanController;
use App\Http\Controllers\Admin\RangeController;
use App\Http\Controllers\Admin\AppartmentController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('UserSide.home');
})->name('home');

// Route::get('/city', function () {
//     return view('UserSide.city');
// });
Route::get('/result', function () {
    return view('UserSide.result')->name("test");
});
Route::get('/about', function () {
    return view('UserSide.about');
})->name('about');

Route::get('/contact', function () {
    return view('UserSide.contact');
})->name('contact');

Route::get('/amman', function () {
    return view('UserSide.Amman');
})->name('Amman');


Route::get('/results', [ResultsController::class, 'index'])->name('results');
Route::post('/resultsSave', [ResultsController::class, 'saveResults'])->name('results.save');


Route::middleware(['auth','verified','Admin'])->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/Amman', AmmanController::class);
    Route::resource('/Appartments', AppartmentController::class);
    Route::resource('/Restaurants', RestaurantController::class);
    Route::resource('/ranges', RangeController::class);
    Route::resource('/Contact', ContactController::class);
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
});


Route::name('user.')->prefix('user')->group(function () {
    Route::get('/login', [LoginUserController::class, 'index'])->name('login');
    Route::post('/logina', [LoginUserController::class, 'LoginPost'])->name('loginPost');
    Route::get('/logina', [LoginUserController::class, 'destroy'])->name('logout');
    Route::get('/Registers',[RegisterUserController::class,'index'])->name('Registers');
    Route::post('/Registerss',[RegisterUserController::class,'store'])->name('Registerss');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

