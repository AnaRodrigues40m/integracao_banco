<?php
use App\http\Controllers\usuarioController;
use App\Models\usuario;
use App\Service\UsuarioService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('usuario', [usuarioController::class, 'store']);

Route::get('/usuario/{id}/find',[usuarioController::class, 'findById'] );

Route::get('usuario', [usuarioController::class, 'index']);

Route::get('usuario/search', [usuarioController::class, 'searchByName']);

Route::get('usuario/search/email', [usuarioController::class, 'searchByEmail']);

Route::delete('/usuario/{id}/delete', [usuarioController::class, 'delete']);

Route::put('/usuario', [usuarioController::class, 'update']);