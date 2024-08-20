<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Products;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $category;
    function __construct(){
        $this->category= new Category();
    }
    function home(){
         
        $data['categories']=$this->category->getAllActiveCategory();
        $data['products'] = Products::all();
        $data['setting']=Setting::where('status',1)->first();
        return view('home.index', compact('data'));
    }
}
