<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Koli;

class ListKoli extends Controller
{
    public function index()
    {
        $list = Item::latest()->get();
        return response([
            'success' => true,
            'data' => $list
        ], 200);
    }
}
