<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user-management.users.index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request){}

    public function edit(int $id)
    {
        return view('pages.user-management.users.edit', [
            'user' => User::find($id),
            'roles' => Role::all(),
        ]);
    }
}
