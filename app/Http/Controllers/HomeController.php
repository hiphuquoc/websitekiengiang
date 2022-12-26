<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
    public static function home(){
        return view('main.home');
    }

    public function buildTocContentMain(Request $request){
        $xhtml       = null;
        if(!empty($request->get('dataSend'))){
            $xhtml   = view('main.templates.tocContentMain', ['data' => $request->get('dataSend')])->render();
        }
        echo $xhtml;
    }
}
