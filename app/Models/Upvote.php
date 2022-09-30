<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upvote extends Model
{
    use HasFactory;

    /**
     * Get all of the owning models.
     */
    public function upvoteable()
    {
        return $this->morphTo();
    }
}
