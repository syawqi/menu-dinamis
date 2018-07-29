<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::whereNull('parent_id')->with('submenu')->get();
        return view('welcome', compact(['menu']));
        return response()->json(['menu' => $menu]);
    }
}
