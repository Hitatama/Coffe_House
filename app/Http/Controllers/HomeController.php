<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafe;
use App\Models\Menu;

class HomeController extends Controller
{
    public function index()
    {
        $menu = Menu::get();
        $cafe = Cafe::get();

        return view('home', compact('menu', 'cafe'));
    }

    public function readmore(Cafe $cafe)
    {
        $cafe = Cafe::where('id', $cafe)->get();
        $menu = Menu::get();
        return view('readmore', compact('cafe', 'menu'));
    }
}
