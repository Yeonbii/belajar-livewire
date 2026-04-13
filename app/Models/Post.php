<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id'
    ];

    // protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
      // Saat membuat data baru
      static::creating(function ($post) {
        if (!$post->slug && $post->title) {
            $post->slug = static::generateSlug($post->title, $post);
        }
      });

      // Saat mengupdate data yang sudah ada
      static::updating(function ($post) {
        // Cek apakah title berubah (dirty)
        if ($post->isDirty('title')) {
            $post->slug = static::generateSlug($post->title, $post);
        }
      });
    }


    protected static function generateSlug($title, $post = null)
    {
      $slug = Str::slug($title);

      $count = static::query()
        ->where('slug', 'like', "{$slug}%")
        // Tambahkan ini agar tidak menghitung dirinya sendiri saat update
        ->where('id', '!=', $post->id ?? 0) 
        ->count();

      return $count ? "{$slug}-" . ($count + 1) : $slug;
    }
}
