<?php

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

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

// Route::get('projects', function(){
//     return [
//         'status' => 'succes',
//         'result' => Project::all(),
//     ];
// });

// questo è il percorso da scrivere, per visualizzare l'array lato API, il projects deve essere preceduto da /api

Route::get('projects', [ProjectController::class, 'index']);

// vado a richiamare la funzione show implementata nell' api ProjectController

Route::get('projects/{project:id}', [ProjectController::class, 'show']);

Route::post('/contacts', [LeadController::class, 'store']);



