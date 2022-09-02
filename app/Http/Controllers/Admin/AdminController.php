<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalUsers = 0;
        $totalAdmins = 0;
        $totalCourses = 0;
        $totalSupports = 0;

        return view('admin.home.index', compact('totalUsers', 'totalAdmins', 'totalCourses', 'totalSupports'));
    }
}
