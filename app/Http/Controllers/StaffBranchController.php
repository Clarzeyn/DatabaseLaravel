<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Staff;
use App\Models\StaffBranch;

class StaffBranchController extends Controller
{
    public function index()
    {
        $_staff_branch = StaffBranch::all();
        $_staff = Staff::all();
        $_branch = Branch::all();

        return view('post.staffbranch', compact('_staff_branch', '_staff', '_branch'));
    }
    // public function index2()
    // {
    //     $_staff = Staff::all();
    //     return view('post.staff', compact('_staff'));
    // }
    // public function index3()
    // {
    //     $_branch = Branch::all();
    //     return view('post.branch', compact('_branch'));
    // }
}
