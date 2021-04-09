<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function similar()
    {
        return $this->where('category_id', $this->category_id)
            ->with('user')->take(2)->get();
    }

    public function getExcerptAttribute()
    {
        return Str::substr($this->description, 0, 80) . '..';
    }
}
