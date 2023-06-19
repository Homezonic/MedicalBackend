<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LabTestController;
use App\Http\Controllers\MedicalTestController;

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
// Lab Test Routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/labtests', [LabTestController::class, 'index']);
    Route::get('/labtests/{category}', [LabTestController::class, 'showByCategory']);
    // Route::post('/submit', [MedicalTestController::class, 'store']);
    Route::post('/medical-tests', [MedicalTestController::class, 'store']);
    // Route::post('/graphql', [\Nuwave\Lighthouse\Support\Http\Controllers\GraphQLController::class, 'execute']);
});
Route::post('/graphql', function (Request $request) {
    $request->merge([
        'query' => $request->input('mutation'),
    ]);

    $graphql = app(GraphQLController::class);
    $graphql->setDebug(Debug::INCLUDE_DEBUG_MESSAGE);

    return $graphql->query($request);
});
