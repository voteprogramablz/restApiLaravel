<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "name", "price", "description", "slug"
    ];

    // protected $hidden = ["created_at", "updated_at"];
}
