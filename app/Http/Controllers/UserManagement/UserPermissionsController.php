<?php

namespace App\Http\Controllers\UserManagement;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserPermissionsController
{
    public function index()
    {
        Collection: $permissions = Permission::all();
        return view('pages.user-management.permissions.index', [
            'permissions' => $permissions
        ]);
    }

    public function create()
    {
        return view('pages.user-management.permissions.add', [
            'roles' => Role::all()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|unique:permissions,name',
            'role' => 'required|exists:roles,id',
        ]);

        $permission = Permission::create(['name' => $request->input('name')]);

        $role = Role::findById($request->input('role'));
        $role->givePermissionTo($permission);

        return redirect()->route('users.permissions')->with('success', 'Permission created and assigned to role successfully.');
    }

    public function edit(int $id)
    {
        $permission = Permission::findOrFail($id);
        $roles = Role::all();

        return view('pages.user-management.permissions.edit', [
            'permission' => $permission,
            'roles' => $roles,
        ]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|unique:permissions,name,' . $id,
            'role' => 'required|exists:roles,id',
        ]);

        $permission = Permission::findOrFail($id);
        $permission->name = $request->input('name');
        $permission->save();
        $role = Role::findById($request->input('role'));
        $role->givePermissionTo($permission);

        return redirect()->route('users.permissions')->with('success', 'Permission updated and role assigned successfully.');
    }

    public function delete(int $id)
    {
        return view('pages.user-management.permissions.delete', [
            'permission' => Permission::find($id),
        ]);
    }

    public function destroy(int $id): RedirectResponse
    {

        $permission = Permission::findOrFail($id);
        $permission->roles()->detach();
        $permission->delete();

        return redirect()->route('users.permissions')->with('success', 'Permission deleted successfully.');
    }
}
