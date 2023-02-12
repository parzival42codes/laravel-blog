<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class MainController extends Controller
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
     * @return Renderable
     */
    public function index(): Renderable
    {
        $data = [];

        $blogPosts = BlogPost::paginate(15)->withPath(route('main'));
        $data['blogPosts'] = $blogPosts;

        d($blogPosts->links());

        return view('themes.' . config('theme.select') . '.main', $data);
    }
}
