<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    /**
     * Display the home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil 3 berita terbaru untuk ditampilkan di homepage
        $berita = Berita::latest()->take(3)->get();
        
        return view('home', compact('berita'));
    }
}