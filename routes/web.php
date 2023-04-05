<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\RegisterUserController;
use App\Http\Controllers\User\LoginUserController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AmmanController;
use App\Http\Controllers\Admin\RangeController;
use App\Http\Controllers\Admin\AppartmentController;
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

Route::get('/result', function () {
    return view('UserSide.result');
})->name('Result');

Route::post('/results', 'ResultsController@show')->name('results');

Route::middleware(['auth','verified'])->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/Amman', AmmanController::class);
    Route::resource('/Appartments', AppartmentController::class);
    Route::resource('/ranges', RangeController::class);
    Route::get('/dashboard', function () {
        return view('Admin.welcome');
    })->name('dashboard');
    Route::get('/dashboard/cities', function () {
        return view('Admin.cities');
    })->name('cities');
    
});


Route::get('/Registers',[RegisterUserController::class,'index'])->name('Registers');
Route::post('/Registerss',[RegisterUserController::class,'store'])->name('Registerss');

Route::name('user.')->prefix('user')->group(function () {
    Route::get('/login', [LoginUserController::class, 'index'])->name('login');

});

Route::get('/dashboard', function () {
    return view('Admin.welcome');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

