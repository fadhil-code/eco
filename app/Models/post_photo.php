<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_photo extends Model
{
    use HasFactory;
    protected $table="post_photo";
    protected $fillable = [
        'pid',
        'image',
    ];
}
