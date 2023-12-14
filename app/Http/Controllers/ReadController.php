<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class ReadController extends Controller
{
    public function index(Menu $menu)
    {
        $menu = Menu::where('name_cafe', $menu)->get();
        return view('readmore', compact('menu'));
    }
}
