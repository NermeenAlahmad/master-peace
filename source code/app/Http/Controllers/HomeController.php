<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){

            $categories=Category::all();
            return view('dashboard.manage_category',compact('categories'));

        }else{
            $categories=Category::all();
            return view('public-site.homepage',compact('categories'));
        }
    }

    public function publicindex()
    {
        $categories=Category::all();
        return view('public-site.homepage',compact('categories'));
    }
}
