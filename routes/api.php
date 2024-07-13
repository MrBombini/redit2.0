
<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function(){
    Route::resource('temas','Api\TemasController');
    Route::post('temas/{id}','Api\TemasController@update');
    Route::delete('temas/{id}','Api\TemasController@destroy');
});