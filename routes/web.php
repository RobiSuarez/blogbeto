<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\CursoController;
use PHPUnit\Framework\Attributes\Group;

Route::get('/',HomeController::class);

route::controller(CursoController::class)->group(function(){ 
    Route::get("cursos","index");
    Route::get('cursos/create',"create");
    Route::get("cursos/{curso}","show");
});

/* Route::get('cursos/{cursos}/{categoria?}', function ($curso,$categoria = null) {
    if($categoria)
    {
    return "Bienvenido al curso $curso, de la categoria: $categoria";
    }
    else 
    {
    return "Bienvenido al curso: $curso ";
    }
}); */ 