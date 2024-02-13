<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function UserData()
    {
        $users = DB::table('users')->get();

        return view('welcome', ['data' => $users]);
    }

    public function ViewData(string $id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        return view('/data', ['data' => $users]);
    }

    public function deleteData(string $id)
    {
        $users = DB::table('users')->where('id', $id)->delete();

        if ($users) {
            return redirect()->route('home');
        }
    }

    public function AddUser(Request $req)
    {
        $users = DB::table('users')->insert([
            'name' => $req->username,
            'email' => $req->useremail,
            'age' => $req->userage
        ]);

        if ($users) {
            return redirect()->route('home');
        }
    }

    public function UpdatePage(string $id)
    {
        $users = DB::table('users')->find($id);

        return view('/updateUser', ['data' => $users]);
    }

    public function  UpdateData(Request $req, $id)
    {
        $users = DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage
            ]);
        if ($users) {
            return redirect()->route('home');
        }
    }
}
