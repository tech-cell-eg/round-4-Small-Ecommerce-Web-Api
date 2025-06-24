<?php

use App\Http\Controllers\api\PolicyController;
use App\Http\Controllers\api\ProductController;
use App\Http\Controllers\api\QuestionController;
use App\Http\Controllers\api\SupportController;
use App\Http\Controllers\api\TestimonialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::Resource('products', ProductController::class);

Route::get('/testimonials', TestimonialController::class);

Route::get('/policies', PolicyController::class);

Route::get('/questions', QuestionController::class);

Route::get('/support', SupportController::class);
