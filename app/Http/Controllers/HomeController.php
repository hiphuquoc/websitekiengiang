<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seo;
use App\Models\Faq;

class HomeController extends Controller {
    public static function home(){
        $item   = Seo::select('*')
                    ->where('type', 'home')
                    ->with('faqs', 'service.prices')
                    ->first();
        return view('main.home.index', compact('item'));
    }

    public function buildTocContentMain(Request $request){
        $xhtml       = null;
        if(!empty($request->get('dataSend'))){
            $xhtml   = view('main.templates.tocContentMain', ['data' => $request->get('dataSend')])->render();
        }
        echo $xhtml;
    }
}
