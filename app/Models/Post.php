<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

     public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function successCase(): HasOne
    {
        return $this->hasOne(SuccessCase::class);
    }
}
