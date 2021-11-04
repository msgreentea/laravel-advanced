<?php

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthorController;
// use App\Http\Controllers\BookController;
// use App\Http\Controllers\SessionController;
// use App\Models\Person;
// use App\Models\Product;
use Illuminnate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route::get('/home', [AuthorController::class, 'index']);
// Route::get('/add', [AuthorController::class, 'add']);
// Route::post('/add', [AuthorController::class, 'create']);
// Route::get('/edit', [AuthorController::class, 'edit']);
// Route::post('/edit', [AuthorController::class, 'update']);
// Route::get('/delete', [AuthorController::class, 'delete']);
// Route::post('/delete', [AuthorController::class, 'remove']);
// Route::get('/find', [AuthorController::class, 'find']);
// Route::post('/find', [AuthorController::class, 'search']);
// Route::get('/author/{author}', [AuthorController::class, 'bind']);
// Route::prefix('book')->group(function () {
//     Route::get('/', [BookController::class, 'index']);
//     Route::get('/add', [BookController::class, 'add']);
//     Route::post('/add', [BookController::class, 'create']);
// });
// Route::get('/relation', [AuthorController::class, 'relate']);

// Route::get('/session', [SessionController::class, 'getSes']);
// Route::post('/session', [SessionController::class, 'postSes']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';
// Route::get('/home', [AuthorController::class, 'index'])->middleware('auth');
// Route::get('/auth', [AuthorController::class, 'check']);
// Route::post('/auth', [AuthorController::class, 'checkUser']);
// // 論理削除と物理削除
// Route::get('/softdelete', function () {
//     Person::find(1)->delete();
// });
// Route::get('softdelete/get', function () {
//     $person = Person::onlyTrashed()->get();
//     dd($person);
// });
// Route::get('softdelete/store', function () {
//     $result = Person::onlyTrashed()->restore();
//     echo $result;
// });
// Route::get('softdelete/absolute', function () {
//     $result = Person::onlyTrashed()->forceDelete();
//     echo $result;
// });
// uuid
// Route::get('uuid', function () {
//     $products = Product::all();
//     foreach ($products as $product) {
//         echo $product . '<br>';
//     }
// });
// コントローラーの作成
Route::get('fill', [BookController::class, 'fillBook']);
Route::get('create', [BookController::class, 'createBook']);
Route::get('insert', [BookController::class, 'insertBook']);
