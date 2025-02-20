<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Brian2694\Toastr\Facades\Toastr;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Role::all();
            return DataTables::of($data)->make(true);
        }
        return view('backend.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id = null)
    {
        $permission = Permission::get();

        if ($id) {
            $role = Role::findOrFail($id); // Fetch user if editing
            $rolePermissions = $role->permissions->pluck('id')->toArray(); // Fetch assigned permissions
        } else {
            $role = null;
            $rolePermissions = [];
        }

        return view('backend.roles.create')->with(compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permissions' => 'required|array',
        ]);


        $request->validate([
            'name' => 'required|string|max:255',
            'permissions' => 'required|array'
        ]);

        $role = Role::create([
            'name' => $request->name
        ]);

        $role->permissions()->sync(array_keys($request->permissions ?? []));

        Toastr::success('Succesfully Created ', 'Success');
        return redirect()->route('roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('backend.admin.roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name,' . $id,
            'permissions' => 'required|array',
        ]);

        $role = Role::findOrFail($id);

        if (Str::slug($request->name) == "super-admin") {
            Toastr::error('Update Resticted', 'Error');
            return redirect()->back();
        }
        $role->update([
            'name' => $request->name
        ]);

        $role->permissions()->sync(array_keys($request->permissions ?? []));

        Toastr::success('Succesfully Updated', 'Success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        if (Str::slug($role->name) == "super-admin") {
            return response()->json(['success' => false, 'message' => 'Super Admin cannot be deleted.'], 403);
        }

        $role->revokePermissionTo($role->getAllPermissions());
        $role->delete();

        return response()->json(['success' => true, 'message' => 'Rple deleted successfully.']);
    }
}
