<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Register extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email'     => 'required',
                'password'   => 'required',
            ],
            [
                'email.required' => 'email harus diisi !',
                'password.required' => 'password tidak boleh kosong !',
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'data'    => $validator->errors()
            ], 401);
        } else {
            $post = User::create([
                'email'     => $request->email,
                'password'   => $request->password
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Register success !',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Register failed !',
                ], 401);
            }
        }
    }
}
