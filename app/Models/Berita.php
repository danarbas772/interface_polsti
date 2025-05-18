<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';
    
    protected $fillable = [
        'judul',
        'slug',
        'gambar',
        'konten',
        'status'
    ];

    // Generate slug from title
    public function setJudulAttribute($value)
    {
        $this->attributes['judul'] = $value;
        $this->attributes['slug'] = \Str::slug($value);
    }

    // Status options
    public static function statusOptions()
    {
        return [
            'draft' => 'Draft',
            'published' => 'Published',
            'archived' => 'Archived'
        ];
    }

    // Scope for published articles
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}