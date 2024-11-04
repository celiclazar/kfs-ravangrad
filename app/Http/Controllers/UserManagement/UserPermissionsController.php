<?php

namespace App\Http\Controllers\UserManagement;

class UserPermissionsController
{
    public function index()
    {
        return view('pages.user-management.permissions.index');
    }
}
