<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seo;
use App\Models\Faq;

class HomeController extends Controller {
    public static function home(){
        $item   = Seo::select('*')
                    ->where('type', 'home')
                    ->first();
        $faqs   = Faq::all();
        return view('main.home', compact('item', 'faqs'));
    }

    public function buildTocContentMain(Request $request){
        $xhtml       = null;
        if(!empty($request->get('dataSend'))){
            $xhtml   = view('main.templates.tocContentMain', ['data' => $request->get('dataSend')])->render();
        }
        echo $xhtml;
    }
}
