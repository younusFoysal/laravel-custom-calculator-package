<?php



Route::get('calc', function(){
    echo "Helloppp from clc pkg";
});

Route::get('add/{a}/{b}',[LP\Calc\CalcController::class, 'add']);
Route::get('subtract/{a}/{b}', [LP\Calc\CalcController::class, 'subtract']);


