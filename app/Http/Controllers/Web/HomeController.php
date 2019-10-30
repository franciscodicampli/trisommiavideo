<?php

namespace App\Http\Controllers\Web;

use App\Model\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function index(){
       
        $publicaciones = Post::where('estado', 'PUBLISHED')->get()->paginate(4);

        return view('web.home', compact('publicaciones'));

    }

}