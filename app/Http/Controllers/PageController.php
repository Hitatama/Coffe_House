<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function login()
    // {
    //     return view('login');
    // }
    // public function outputlogin(Request $request)
    // {
    //     dump($request->all());
    // }
    public function index()
    {
        return view('home', [
            "image1" => "img1.jpg",
            "image2" => "img2.jpg",
            "image3" => "img3.jpg",
            "image4" => "img4.jpg",
            "image5" => "img5.jpg",
            "image6" => "img6.jpg",
            "image7" => "img7.jpg",
            "image8" => "img8.jpg",
            "image9" => "img9.jpg",
            "image10" => "img10.jpg",
            "image11" => "img11.jpg",
            "image12" => "img12.jpg",
            "image13" => "img13.jpg",
            "imagehome" => "imghome.jpg"
        ]);

    }



}