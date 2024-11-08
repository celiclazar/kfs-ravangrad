<?php

namespace App\Http\Controllers\UserManagement;

use Spatie\Permission\Models\Permission;

class UserPermissionsController
{
    public function index()
    {
        Collection: $permissions = Permission::all();
        return view('pages.user-management.permissions.index', [
            'permissions' => $permissions
        ]);
    }
}
