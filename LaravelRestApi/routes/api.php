<?php
use App\Http\Controllers\Api\HumanController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::ApiResource('humans', HumanController::class);

// Route ::group(
//     ["namespace"=> "App\http\Controllers\Api"],
//     function(){
//         Route::apiResource('people', HumanControllerr::class);
//     }
// );

route::get('ferdyn/307602/people', [HumanController::class,'index']);
Route::get('ferdyn/307602/people/{human}', [HumanController::class,'show']);
Route::delete('ferdyn/307602/people/{human}',[HumanController::class, 'destroy']);
Route::post('ferdyn/307602/people/{human}',[HumanController::class, 'store']);
Route::put('ferdyn/307602/people/{human}',[HumanController::class, 'update']);