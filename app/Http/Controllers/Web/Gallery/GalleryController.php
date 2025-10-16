<?php

namespace App\Http\Controllers\Web\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $staticGalleries = Gallery::query()
            ->take(8) 
            ->get();

        $moreGalleries = Gallery::query()
            ->skip(8) // lewati 8 gambar pertama
            ->take(PHP_INT_MAX) // ambil sisanya
            ->get();

        return view('gallery', [
            'staticGalleries' => $staticGalleries,
            'moreGalleries' => $moreGalleries,
        ]);
    }
}
