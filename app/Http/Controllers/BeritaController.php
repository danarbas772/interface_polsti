<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::latest()->paginate(9);
        return view('berita.index', compact('berita'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $artikel = Berita::where('slug', $slug)->firstOrFail();
        $recentArticles = Berita::latest()->where('id', '!=', $artikel->id)->take(3)->get();
        
        return view('berita.show', compact('artikel', 'recentArticles'));
    }
    
    /**
     * Admin: Display a listing of all berita.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex()
    {
        $berita = Berita::latest()->paginate(10);
        return view('admin.berita.index', compact('berita'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->konten = $request->konten;
        $berita->slug = Str::slug($request->judul);
        $berita->excerpt = Str::limit(strip_tags($request->konten), 150);
        
        // Handle image upload and storage
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            
            // Store in public directory instead of storage
            $destinationPath = public_path('images/berita/');
            
            // Create directory if not exists
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            
            // Save image
            $img = Image::make($image->path());
            $img->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($destinationPath . $filename);
            
            // Save path to database relative to public directory
            $berita->gambar = 'images/berita/' . $filename;
        }
        
        $berita->save();
        
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        
        $berita = Berita::findOrFail($id);
        $berita->judul = $request->judul;
        $berita->konten = $request->konten;
        $berita->slug = Str::slug($request->judul);
        $berita->excerpt = Str::limit(strip_tags($request->konten), 150);
        
        // Handle image upload
        if ($request->hasFile('gambar')) {
            // Delete old image if exists
            if ($berita->gambar && file_exists(public_path($berita->gambar))) {
                unlink(public_path($berita->gambar));
            }
            
            $image = $request->file('gambar');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            
            // Store in public directory
            $destinationPath = public_path('images/berita/');
            
            // Create directory if not exists
            if (!File::isDirectory($destinationPath)) {
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            
            // Save image
            $img = Image::make($image->path());
            $img->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save($destinationPath . $filename);
            
            // Save path to database relative to public directory
            $berita->gambar = 'images/berita/' . $filename;
        }
        
        $berita->save();
        
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        
        // Delete image file if exists
        if ($berita->gambar && file_exists(public_path($berita->gambar))) {
            unlink(public_path($berita->gambar));
        }
        
        $berita->delete();
        
        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus');
    }
}