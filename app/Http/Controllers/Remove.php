<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class Remove extends Controller
{
    public function destroy($id)
    {
        $deletedRows = Item::findOrFail($id);

        if ($deletedRows->delete()) {
            return response()->json([
                "success" => true,
                "message" => "Item deleted !",
                "data" => $deletedRows,
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "message" => "Delete failed !",
            ], 401);
        }
    }
}
