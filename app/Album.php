<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = ['album_name', 'group_name', 'genre', 'songs_number', 'year'];
}
