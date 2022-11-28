<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class Blog extends Controller
{
public function show(){

    return view('front.blog.show', );

}
}
