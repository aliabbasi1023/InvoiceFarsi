<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function UsersList()
    {
        return view ('partial.admin.UsersList');
    }
    public function UsersAddForm()
    {
        return view ('partial.admin.UsersAddForm');
    }
}
