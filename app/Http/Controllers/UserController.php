<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($id, $nama) {
        return "User ID : {$id} <br> Nama : {$nama}";
    }
}
