<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

// Route::get('/homepage', function () {
//     return view('public-site.homepage');
// })-> name('homepage');


// Route::get('/home', [HomeController::class,'redirect'])->
// middleware('auth', 'verified');

// Route::get('/login', function () {
//     return view('public-site.login');
// })-> name('public-site.login');

// Route::get('/contact', function () {
//     return view('public-site.contactus');
// })-> name('public-site.contactus');

Route::get('/about', function () {
    return view('public-site.aboutus');
})-> name('public-site.aboutus');

// Route::get('/Adoptform', function () {
//     return view('public-site.Adoptform');
// })-> name('public-site.Adoptform');

Route::get("/Adoptform", [AnimalController::class, 'createAdopt'])->name('createAdopt.index');
Route::post("add_animalForm/store", [AnimalController::class, 'storeAnimalForm'])->name('animalForm.store');

// Route::get("/contact", [AnimalController::class, 'create'])->name('create.index');
Route::post("add_message1/store", [ContactController::class, 'storecontact'])->name('contact.store');


Route::get('/single_animal', function () {
    return view('public-site.singlepage-animal');
})-> name('public-site.singlepage-animal');

// Route::get('/categories', function () {
//     return view('public-site.categories');
// })-> name('public-site.categories');

// Route::get("/", [CategoryController::class, 'publicindex'])->name('home.index');
Route::get("/categories", [CategoryController::class, 'publicindex'])->name('categories.index');
Route::get("/", [HomeController::class, 'publicindex'])->name('homepage.index');
Route::get('singlecategory/{id}', [CategoryController::class, 'show'])->name('single_category');
Route::get('singleanimal/{id}', [AnimalController::class, 'show'])->name('single_animal');
// Route::get('/category_show/{id}', [ExamController::class, 'show'])->name('single_category');
Route::get('/search', [AnimalController::class, 'search'])->name('search');
// Route::get('/searchBycategory', [CategoryController::class, 'search'])->name('search');
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('category', function () {
    return view('admin-dashboard.manage_categories');
});
Route::get('animal', function () {
    return view('admin-dashboard.manage_animals');
});

// Route::get("redirect", [CategoryController::class, 'index'])->name('category.index');


//Category Route

Route::get("add_category", [CategoryController::class, 'create']);
Route::post("add_category/store", [CategoryController::class, 'store'])->name('category.store');
Route::get("/category", [CategoryController::class, 'index'])->name('category.index');
Route::get("category/edit/{id}", [CategoryController::class, 'edit'])->name('category.edit');
Route::post("category/update/{id}", [CategoryController::class, 'update'])->name('category.update');
Route::get("category/destroy/{id}", [CategoryController::class, 'destroy'])->name('category.destroy');


//Animal Route
Route::get("add_animal", [AnimalController::class, 'create']);
Route::post("add_animal/store", [AnimalController::class, 'store'])->name('animal.store');
Route::get("/animal", [AnimalController::class, 'index'])->name('animal.index');
Route::get("animal/edit/{id}", [AnimalController::class, 'edit'])->name('animal.edit');
Route::post("animal/update/{id}", [AnimalController::class, 'update'])->name('animal.update');
Route::get("animal/destroy/{id}", [AnimalController::class, 'destroy'])->name('animal.destroy');

//User Route
Route::get("add_user", [UserController::class, 'create']);
Route::post("add_user/store", [UserController::class, 'store'])->name('user.store');
Route::get("/user", [UserController::class, 'index'])->name('user.index');
Route::get("user/edit/{id}", [UserController::class, 'edit'])->name('user.edit');
Route::post("user/update/{id}", [UserController::class, 'update'])->name('user.update');
Route::get("user/destroy/{id}", [UserController::class, 'destroy'])->name('user.destroy');


//messages Route
Route::get("add_message", [ContactController::class, 'create']);
Route::post("add_message/store", [ContactController::class, 'store'])->name('message.store');
Route::get("/message", [ContactController::class, 'index'])->name('message.index');
Route::get("message/destroy/{id}", [ContactController::class, 'destroy'])->name('message.destroy');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


