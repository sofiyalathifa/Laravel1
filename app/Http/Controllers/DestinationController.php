<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class DestinationController extends Controller
{
    public function destinasi(){
        $data = Post::all();
        return view('destination', compact('data'));
    }


}
