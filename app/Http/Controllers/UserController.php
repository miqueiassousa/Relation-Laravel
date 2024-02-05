<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(Request $r) {
        $users = User::all();
        return $users;
    }

    public function findOne(Request $r) {
        $user = User::find($r->id);
        $user['addresses'] = $user->addresses;
        return $user;
    }

    public function insert(Request $r) {

        // Only vc limita os campos que serão enviador para o banco
        $rawData = $r->only(['name','email','password']);
        $user = User::create($rawData);
        return $rawData;
    }


}
