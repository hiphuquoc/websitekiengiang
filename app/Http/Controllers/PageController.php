<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seo;
use App\Models\Faq;

class PageController extends Controller {
    public static function chamSocWebsite(){
        $item   = Seo::select('*')
                    ->where('slug', 'cham-soc-website-kien-giang')
                    ->with('faqs')
                    ->first();
        return view('main.chamSocWebsite.index1', compact('item'));
    }
}
