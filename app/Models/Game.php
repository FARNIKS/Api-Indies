<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['name', 'developer', 'genre', 'graphics_style', 'release_year', 'description', 'image_path', 'steam_url'];
}
