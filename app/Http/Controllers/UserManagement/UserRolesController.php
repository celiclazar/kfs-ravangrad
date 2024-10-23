<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Ramsey\Collection\Collection;
use Spatie\Permission\Models\Role;

class UserRolesController extends Controller
{
    public function index()
    {
        Collection: $roles = Role::all();
        return view('pages.user-management.roles.index', [
            'roles' => $roles
        ]);
    }

    public function edit(Request $request, int $id)
    {
        $role = Role::findById($id);
        return view('pages.user-management.roles.edit', [
            'role' => $role
        ]);
    }
}
