<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Album;

class ApiController extends Controller
{
    public function getAlbums(){
        $firstAlbum = Album::all();
        return response()->json($firstAlbum);
    }

    public function getFirstAlbum(){
        $firstAlbum = Album::all()->first();
        return response()->json($firstAlbum);
    }
}
