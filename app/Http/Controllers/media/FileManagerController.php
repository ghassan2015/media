<?php

namespace App\Http\Controllers\media;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileManagerController extends Controller
{
    public function index(Request $request)
    {
        return view('media');
    }
    public function CREDITOR(Request $request)
    {
        return view('ckeditor');
    }
    public function Gallery(Request $request){
        return view('Gallary');
    }

}
