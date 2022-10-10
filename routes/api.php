<?php

use App\Http\Resources\ShortCollection;
use App\Models\Short;
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

Route::group(['middleware' => 'auth:sanctum'], function () {

    // to get all shorts
    Route::get('all-shorts', fn () => new ShortCollection(Short::with('country')->get()));
});

Route::get('test-json', function () {
    return [
        "name" => "Egypt",
        "lat" => "1.0",
        "long" => "1.0",
        "quotes" => "�Egypt�is not a country we live in but a country that lives within us. �",
        "link" => request()->root() . "/videos/UK/Ashdown%20forest%20uk.mp4",
        "thumbnail" => request()->root() . "/thumbnails/UK/Ashdown%20forest%20uk0.png",
    ];
});
