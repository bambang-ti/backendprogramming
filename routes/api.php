<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#endpoint animals
#method GET
Route::get('/animals', [AnimalController::class, 'index']);

# method POST
Route::post('/animals', [AnimalController::class, 'store']);

# method PUT
Route::put('/animals/{id}', [AnimalController::class, 'update']);

# method DELETE
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);

# route students

# method GET, route/students
Route::get('/students',[StudentController::class, 'index'] );
# method POST, route/students
Route::post('/students', [StudentController::class, 'store']);
# method GET, route/students
Route::get('/students/{id}', [StudentController::class, 'show']);
# method PUT, route/students
Route::put('/students/{id}', [StudentController::class, 'update']);
# method DELETE, route/students
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
