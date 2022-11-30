<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', "author_id"];

    public function comments() {
        return $this->hasMany("App\Models\Comment");
    }

    public function author() {
        return $this->BelongsTo("App\User", "author_id");
    }
}
