<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
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

    public function create(): View
    {
        $permissions = Permission::all();

        return view('pages.user-management.roles.add', [
            'permissions' => $permissions
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:roles,name',
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        $role = Role::create(['name' => $validated['name']]);

        if (!empty($validated['permissions'])) {
            $permissions = Permission::whereIn('id', $validated['permissions'])->get();
            $role->syncPermissions($permissions);
        }

        return redirect()->route('users.roles')->with('success', 'Role created successfully!');
    }

    public function edit(int $id)
    {
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        $assignedPermissions = $role->permissions->pluck('id')->toArray();

        return view('pages.user-management.roles.edit', [
            'role' => $role,
            'permissions' => $permissions,
            'assignedPermissions' => $assignedPermissions
        ]);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:roles,name,' . $id,
            'permissions' => 'nullable|array',
            'permissions.*' => 'exists:permissions,id',
        ]);

        $role = Role::findOrFail($id);
        $role->name = $validated['name'];
        $role->save();

        if (!empty($validated['permissions'])) {
            $permissions = Permission::whereIn('id', $validated['permissions'])->get();
            $role->syncPermissions($permissions);
        } else {
            $role->syncPermissions([]);
        }

        return redirect()->route('users.roles')->with('success', 'Role updated successfully!');
    }

    public function delete(int $id)
    {
        $role = Role::findOrFail($id);

        return view('pages.user-management.roles.delete', compact('role'));
    }

    public function destroy(int $id)
    {
        $role = Role::findOrFail($id);
        $role->delete();

        return redirect()->route('users.roles')->with('success', 'Role deleted successfully!');
    }
}
