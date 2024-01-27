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

    public function insert(Request $r) {

        $rawData = $r->only(['address']);
        $address = Address::create($rawData);

        return $address;
    }
}
