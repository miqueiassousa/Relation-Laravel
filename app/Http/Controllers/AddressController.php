<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    //
    public function index(Request $r) {
        $address = Address::all();
        return $address;
    }
}
