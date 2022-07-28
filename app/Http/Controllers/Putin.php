<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Koli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Putin extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama'   => 'required',
                'nama_item'     => 'required',
                'quantity'     => 'required',
            ],
        );

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data'    => $validator->errors()
            ], 401);
        } else {
            $koli = Koli::create([
                'nama'     => $request->nama,
                'user_id'     => $request->user_id
            ]);

            $item = Item::create([
                'koli_id'     => $koli->id,
                'nama'     => $request->nama_item,
                'quantity'     => $request->quantity,
            ]);

            if ($item) {
                return response()->json([
                    'success' => true,
                    'message' => 'success !',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'failed !',
                ], 401);
            }
        }
    }
}
