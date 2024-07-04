<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    public function comments() 
    {
        return $this->hasMany(Comment::class);    
    }

    public function user():BelongsTo
    {
       return $this->belongsTo(User::class); 
    }

    use HasFactory;
}
