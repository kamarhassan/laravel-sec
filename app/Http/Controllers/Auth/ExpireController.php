<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpireController extends Controller
{
    public function checkexpire(){
        return view('expire.expire');
    }
}
