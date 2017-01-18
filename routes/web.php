<?php

use App\Twoot;

Route::get('/', function () {
    // Récupérer tous les "twoots" et les ajouter à la vue
    return view('app')->with([
        'twoots' => Twoot::all()
    ]);
});

Route::get('/twoot/{id}', function($id){
    return view('twoot')->with([
        'twoot' => Twoot::find($id)
    ]);
});

Route::get('/about', function(){
    return view('about');
});

Route::post('twoots', function(){
    Twoot::create([
        'text' => request()->text
    ]);

    return redirect()->to('/');
});

Route::delete('twoots/{id}', function($id){
    Twoot::destroy($id);
    return redirect()->to('/');
});
