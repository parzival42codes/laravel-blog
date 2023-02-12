<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @param  string|null  $page
     * @return Renderable
     */
    public function index(string|null $page):Renderable
    {
//        d($page);
        return view('themes.'.config('theme.select').'.main');
    }
}
