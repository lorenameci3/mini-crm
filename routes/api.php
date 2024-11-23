<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::post('/test-api', function(Request $request) {
    return response()->json([
        'status' => 'success',
        'data' => $request->all(),
    ]);
});


