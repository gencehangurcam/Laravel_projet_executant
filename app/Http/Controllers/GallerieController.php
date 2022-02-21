<?php

namespace App\Http\Controllers;

use App\Models\Image;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class GallerieController extends Controller
{
    public function index()
    {
        $image = Image::all();
        return view("admin.gallerie", compact("image"));
    }

}

