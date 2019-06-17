<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        $categories = BlogCategory::where('status',1)->get();
        $blogs = Blog::where('status','1')
            ->orderBy('created_at','desc')
            ->groupBy('category_id')
            ->paginate('5');
        $mostpopular = Blog::where('status','1')
            ->orderBy('id','desc')
            ->take(5)
            ->get();
        return view('frontend.blog.index',compact(['categories','blogs']));
    }

    public function details($slug) {
        $blog =  Blog::where('slug',$slug)
            ->get();
        return view('frontend.blog.details',compact(['blog']));
    }


}

