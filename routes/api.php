<?php


use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// PHP artisan route:list ->>> vai listar todas as rotas criadas

// esse metodo permite criar todos as rotas dos cruds padrões (ai nao precisa ficar escrevendo cada rota e usar somente no controller)
Route::resource('products', ProductController::class);

Route::get("/products/search/{name}",[ProductController::class, 'search']);



/// Criação de rotas manuais dos controllers

// Route::get("/products",[ProductController::class, 'index']);

// Route::post("/products",[ProductController::class, 'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
