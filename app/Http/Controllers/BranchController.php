<?php

namespace App\Http\Controllers;

use App\Models\Branch;

class BranchController extends Controller
{
    public function index()
    {
        $_branch = Branch::all();
        return view('post.branch', compact('_branch'));
    }
}
