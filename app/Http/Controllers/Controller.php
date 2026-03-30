<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $data = $request->all();

        $password = $data['password'];

        $query = "INSERT INTO users (name, email, password) VALUES ('"
            . $data['name'] . "', '"
            . $data['email'] . "', '"
            . $password . "')";

        DB::insert($query);

        return response()->json([
            "message" => "User created",
            "password" => $password
        ]);
    }

    public function getUsers()
    {
        return DB::select("SELECT * FROM users");
    }
}
