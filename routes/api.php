<?php

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

Route::get('test', function () {
    return [
        "data" => [
            "country" => [
                "name" => "Egypt",
                "lat" => "1.0",
                "long" => "1.0",
                "quotes" => ["�Egypt�is not a country we live in but a country that lives within us. �"],
            ],
            "short" => [
                "link" => request()->root() . "/videos/UK/Ashdown%20forest%20uk.mp4",
                "thumbnail" => request()->root() . "/thumbnails/UK/Ashdown%20forest%20uk0.png",
            ],
        ]
    ];
});
