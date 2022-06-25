<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ConcoursController;
use App\Http\Controllers\UniversiteController;
use App\Models\Post;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FaculteController;


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
    $posts = Post::orderBy('id', 'desc')->paginate(5);
    return view('welcome', compact('posts'));
})->name('welcome');

Auth::routes();

//Users
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/post/create', [PostController::class, 'create'])->middleware('auth')->name('posts.create');
Route::post('/post/store', [PostController::class, 'store'])->middleware('auth')->name('posts.store');
Route::get('/index', [PostController::class, 'index'])->middleware('auth')->name('posts.index');
Route::get('/post/show/{post}', [PostController::class, 'show'])->middleware('auth')->name('posts.show');
Route::get('/post/search', [PostController::class, 'search'])->middleware('auth')->name('posts.search');
Route::post('/comments/store', [CommentController::class, 'store'])->middleware('auth')->name('comments.store');

Route::get('/facultes/{universite}', [HomeController::class, 'showFacultes'])->middleware('auth')->name('facultes');

Route::get('/detailConcour/{concours}', [ConcoursController::class, 'showConcourInDetail'])->middleware('auth')->name('detailConcours');

Route::get('/filieres/{faculte}', [HomeController::class, 'showFilieres'])->middleware('auth')->name('filieres');

Route::get('/schools', [HomeController::class, 'showSchools'])->middleware('auth')->name('schools');

Route::post('/search', [UniversiteController::class, 'searchEveryWhere'])->middleware('auth')->name('search');

Route::get('/concours', [ConcoursController::class, 'showConcours'])->middleware('auth')->name('concours');

Route::get('/councellors', [HomeController::class, 'showCouncellor'])->middleware('auth')->name('councellors');

Route::post('/aboutUs', [HomeController::class, 'store'])->middleware('auth')->name('aboutUs');






//ADMINISTRATION

Route::prefix('universite')->name('universites.')->middleware('isAdmin')->group(function () {
    Route::get('/', [UniversiteController::class, 'index'])->name('index');
    Route::get('/create', [UniversiteController::class, 'create'])->name('create');
    Route::get('/edit/{universite}', [UniversiteController::class, 'edit'])->name('edit');
    Route::post('/store', [UniversiteController::class, 'store'])->name('store');
    Route::post('/{universite}', [UniversiteController::class, 'update'])->name('update');
    Route::DELETE('/destroy/{universite}', [UniversiteController::class, 'destroy'])->name('destroy');
    /* Route::post('/showNotes/{Universite}', [UniversiteController::class, 'showNotes'])->name('showNotes'); */
});

Route::prefix('faculte')->name('facultes.')->middleware('isAdmin')->group(function () {
    Route::get('/', [FaculteController::class, 'index'])->name('index');
    Route::get('/create', [FaculteController::class, 'create'])->name('create');
    Route::get('/edit/{faculte}', [FaculteController::class, 'edit'])->name('edit');
    Route::post('/store', [FaculteController::class, 'store'])->name('store');
    Route::post('/{faculte}', [FaculteController::class, 'update'])->name('update');
    Route::DELETE('/destroy/{faculte}', [FaculteController::class, 'destroy'])->name('destroy');
    /* Route::post('/showNotes/{Faculte}', [FaculteController::class, 'showNotes'])->name('showNotes'); */
});

Route::prefix('filiere')->name('filieres.')->middleware('isAdmin')->group(function () {
    Route::get('/', [FiliereController::class, 'index'])->name('index');
    Route::get('/create', [FiliereController::class, 'create'])->name('create');
    Route::get('/edit/{filiere}', [FiliereController::class, 'edit'])->name('edit');
    Route::post('/store', [FiliereController::class, 'store'])->name('store');
    Route::post('/{filiere}', [FiliereController::class, 'update'])->name('update');
    Route::DELETE('/destroy/{filiere}', [FiliereController::class, 'destroy'])->name('destroy');
    /* Route::post('/showNotes/{Filiere}', [FiliereController::class, 'showNotes'])->name('showNotes'); */
});

Route::get('/admin', [UniversiteController::class, 'show'])->middleware('isAdmin')->name('admin');