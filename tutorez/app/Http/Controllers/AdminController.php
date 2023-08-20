<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {

       return view('Admin.AdminLogin');

        // if ($password == 'admin') {
        //     return view('Admin.AdminLogin');
        // }
        // else{
        //     echo "Invalid Password";
        //     return;
        // }
    }

    public function adminPage()
    {
        return view ('Admin.AdminPage');
    }

}
