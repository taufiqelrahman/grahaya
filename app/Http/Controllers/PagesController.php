<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Session;

class PagesController extends Controller
{
    //
    public function getHome(){
        // Session::flush();
    	return view('pages.home');
    }

    public function getAbout(){
    	return view('pages.about');
    }

    public function getGallery(){
        return view('pages.gallery');
    }

    public function getContact(){
        return view('pages.contact');
    }

}
