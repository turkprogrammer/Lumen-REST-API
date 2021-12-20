<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
     /**
     * Get https://4pksg.ciroue.com/api/users
     */
     public function index(){
        return User::all();
    }
}