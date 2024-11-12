<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
        return view('pages.user-management.users.add', [
            'roles' => Role::all()
        ]);
    }

    public function store(Request $request) :RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|exists:roles,id',
        ]);
        $data = $request->only('name', 'email');
        $data['password'] = Hash::make(Str::random(12));
        $user = new User();
        $user->fill($data);
        $user->save();
        $role = Role::findById($request->input('role'));
        $user->assignRole($role);

        return redirect()->route('users.index');
    }

    public function edit(int $id)
    {
        return view('pages.user-management.users.edit', [
            'user' => User::find($id),
            'roles' => Role::all(),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required|exists:roles,id',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        $role = Role::findById($request->input('role'));
        $user->syncRoles($role);

        return redirect()->route('users.edit', $id);
    }

    public function delete(int $id)
    {
        return view('pages.user-management.users.delete', [
            'user' => User::find($id),
        ]);
    }

    public function destroy(int $id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
