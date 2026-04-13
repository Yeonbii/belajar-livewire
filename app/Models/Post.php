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
        'content'
    ];

    // protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected static function booted()
    {
        static::creating(function ($post) {
            if (!$post->slug && $post->title) {
                $post->slug = static::generateSlug($post->title);
            }
        });
    }

    protected static function generateSlug($title)
    {
        $slug = Str::slug($title);

        $count = static::query()
            ->where('slug', 'like', "{$slug}%")
            ->count();

        return $count ? "{$slug}-{$count}" : $slug;
    }
}
