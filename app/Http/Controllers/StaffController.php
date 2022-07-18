<?php

namespace App\Http\Controllers;

use App\Models\Staff;

class StaffController extends Controller
{
    public function index()
    {
        $_staff = Staff::all();
        return view('post.staff', compact('_staff'));
    }
}
