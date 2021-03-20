<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Voyager\ComponentItemController;
use App\Http\Controllers\Voyager\PageComponentController;
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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();


    //component
    Route::get('/pages/{id}/components', [PageComponentController::class, 'index'])->name('components.builder');
    
    Route::post('pages/{id}/components/order', [PageComponentController::class, 'order_item'])->name('components.order_item');

    Route::get('pages/{id}/components/create', [PageComponentController::class, 'create'])->name('component.create');

    Route::post('pages/{id}/components/store', [PageComponentController::class, 'store'])->name('component.store');

    Route::get('pages/{page}/components/{id}/edit', [PageComponentController::class, 'edit'])->name('component.edit');

    Route::put('pages/components/{id}/update', [PageComponentController::class, 'update'])->name('component.update');

    Route::get('pages/{page}/components/{id}', [PageComponentController::class, 'show'])->name('component.read');

    Route::delete('pages/components/{id}', [PageComponentController::class, 'destroy'])->name('component.destroy');


    //item
    Route::get('pages/{page}/components/{id}/items', [ComponentItemController::class, 'index'])->name('item.builder');

    Route::get('pages/{page}/components/{id}/items/create', [ComponentItemController::class, 'create'])->name('item.create');

    Route::post('pages/{page}/components/{id}/items/store', [ComponentItemController::class, 'store'])->name('item.store');

    Route::post('pages/components/{id}/items/order', [ComponentItemController::class, 'order_item'])->name('item.order_item');

    Route::get('pages/{page}/components/{component}/items/{id}/edit', [ComponentItemController::class, 'edit'])->name('item.edit');

    Route::put('pages/{page}/components/{component}/items/{id}/update', [ComponentItemController::class, 'update'])->name('item.update');

    Route::get('pages/{page}/components/{component}/items/{id}', [ComponentItemController::class, 'show'])->name('item.read');

    Route::delete('pages/components/items/{id}', [ComponentItemController::class, 'destroy'])->name('item.destroy');
});
