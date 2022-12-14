<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    /**
     * Get all of the models that own comments.
     */
    public function commentable()
    {
        return $this->morphTo();
    }

}
