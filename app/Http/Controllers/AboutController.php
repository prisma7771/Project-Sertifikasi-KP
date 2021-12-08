<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout(){
        return view('about', [
        "title" => "About",
        "active" => "about",
        "name" => "Prisma Putra",
        "email" => "raikanizero@gmail.com",
        "image" => "keera.jpg"
    ]);
    }
}
