<?php
use App\http\Controllers\usuarioController;
use App\Models\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/usuario', [usuarioController::class, 'store']);