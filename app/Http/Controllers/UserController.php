<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($name = null) {
        // $name = 'Abdulloh';
        return view('users.show', [
            'username' => $name
        ]);
    }

    public function list(){
        $usersList = [
            'Sanjar',
            'Muslim',
            'Ali',
            'Qosim',
            'Bilal',
        ];
        return view('users.list', compact('usersList'));
    }
}
