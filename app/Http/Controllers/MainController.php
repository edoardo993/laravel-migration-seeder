<?php

namespace App\Http\Controllers;

use App\Album;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('index', compact('albums'));
    }
}
