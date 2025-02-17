<?php

namespace App\Http\Controllers;

// Mengimpor model Post untuk berinteraksi dengan tabel posts di database
use App\Models\Post;

class PostController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        // Mengambil semua data post terbaru dari model Post
        $posts = Post::latest()->get();

        // Mengirim data posts ke tampilan 'posts' untuk ditampilkan
        return view('posts', compact('posts'));
    }
}
