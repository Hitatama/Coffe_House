<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Cafe;

class DashboardController extends Controller
{
    public function index()
    {
        $menu = Menu::get();
        $cafe = Cafe::get();

        return view('dashboard', compact('menu', 'cafe'));
    }
}
