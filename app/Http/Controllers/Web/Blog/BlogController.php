<?php

namespace App\Http\Controllers\Web\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() 
    {
        $latestBlogs = Blog::query()
            ->latest()
            ->take(2)
            ->get();

        $blogs = Blog::query()
            ->whereNotIn('id', $latestBlogs->pluck('id'))
            ->latest()
            ->get();

        return view('blog', [
            'latestBlogs' => $latestBlogs,
            'blogs' => $blogs,
        ]);
     }

     public function show(Blog $blog)
     {
        return view('blog-detail', ['blog' => $blog]);
     }
}
