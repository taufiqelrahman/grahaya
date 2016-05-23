<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Redirect;

class UsersController extends Controller
{
    //
    public function getLogout(){
        Auth::logout(); // log the user out of our application
        return Redirect::to('/');
    }
}
