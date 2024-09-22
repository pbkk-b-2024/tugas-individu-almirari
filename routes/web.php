<?php

use App\Http\Controllers\Pertemuan2Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan1Controller;
use App\Http\Controllers\Pertemuan3Controller;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\AuthController;

Route::get('/', function(){
    return view('layout.base');
});

Route::prefix('/pertemuan1')->group(function(){
    // basic routing
    Route::get('/basicrouting', function () {
        return view('pertemuan1.basicrouting');
    });

    //route parameters
    Route::get('/param', fn() => view('pertemuan1.param'))->name('param');
    Route::get('/param/{param1}', [Pertemuan1Controller::class, 'param1'])->name('param1');
    Route::get('/param/{param1}/{param2}', [Pertemuan1Controller::class, 'param2'])->name('param2');

    //named routing
    Route::get('/named', fn() => view('pertemuan1.namedrouting'))->name('named');

    //grouped routing
    Route::prefix('/group')->group(function(){
        Route::get('/route1', fn()=> view('pertemuan1.route1'))->name('route1');
        Route::get('/route2', fn()=> view('pertemuan1.route2'))->name('route2');
    });

    // fallback routing
    Route::get('/errors/404', fn() => view('errors.404'))->name('error');
    Route::fallback(function () {
        return redirect()->route('error');
    });

    //genap ganjil
    Route::match(['get', 'post'], '/genap-ganjil', [Pertemuan1Controller::class, 'genapGanjil'])->name('genap-ganjil');
    
    //fibbonaci
    Route::get('/fibbonaci',[Pertemuan1Controller::class,'fibonacci'])->name('fibonacci');
    
    //prima
    Route::get('/prima', [Pertemuan1Controller::class, 'bilanganPrima'])->name('bilangan-prima');

});

Route::prefix('/pertemuan2')->group(function(){
    Route::resource('/crud-buku', Pertemuan2Controller::class);
});

Route::get('/pertemuan3', [Pertemuan3Controller::class, 'index'])->name('pertemuan3.index');
Route::post('/login', [Pertemuan3Controller::class, 'login'])->name('pertemuan3.login');
Route::post('/register', [Pertemuan3Controller::class, 'register'])->name('pertemuan3.register');
Route::post('/logout', [Pertemuan3Controller::class, 'logout'])->name('pertemuan3.logout');

Route::fallback(function () {
    return redirect('/');
});
