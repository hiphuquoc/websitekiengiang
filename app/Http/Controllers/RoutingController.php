<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Redirect;

class RoutingController extends Controller {

    public function routing($slug, $slug2 = null, $slug3 = null, $slug4 = null, $slug5 = null, $slug6 = null, $slug7 = null, $slug8 = null, $slug9 = null, $slug10 = null){
        return redirect()->route('main.home');
    }

    public function congTacVien(){
        return view('main.congTacVien.index');
    }
}
