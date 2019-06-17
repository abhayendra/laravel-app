<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FaqCategory;
use App\Faq;
use App\Page;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function changePassword() {
        //return view('');
    }

    public function faqPage() {
        $faqCatId = @$_GET['cat_id'];
        $faqCategory = FaqCategory::where('status',1)->get();
        if($faqCatId=="") {
            $faq = Faq::where('faq_category_id',$faqCategory['0']->id)
            ->where('status','1')
            ->get();
        } else {
          $faq = Faq::where('faq_category_id',$faqCatId)
          ->where('status','1')
          ->get();
        }
        return view('frontend.page.faq',compact('faqCategory','faq'));
    }

    public function page($slug) {
      $allPage = Page::Where('status','1')
      ->get();
      $page = Page::Where('slug',$slug)
      ->where('status','1')
      ->first();
      return view('frontend.page.page',compact('page','allPage'));
    }


    



}
