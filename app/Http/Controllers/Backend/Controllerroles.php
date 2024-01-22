<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\admin;

class Controllerroles extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    public function create(){
        if (is_null($this->user) || !$this->user->can('role.create')) {
            $exceptionMessage = 'Sorry, you are unauthorized to create any role.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $roles = Role::all();
        return view('backend.pages.roles.manage', compact('roles'));
    }

    public function index(){
        if (is_null($this->user) || !$this->user->can('role.view')) {
            $exceptionMessage = 'Sorry, you are unauthorized to access this page.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $permissions = Permission::all();
        $permission_groups = admin::getpermissiongroups();
        return view('backend.pages.roles.add', compact('permissions', 'permission_groups'));
    }
    
    public function store(Request $rqst){
        if (is_null($this->user) || !$this->user->can('role.create')) {
            $exceptionMessage = 'Sorry, you are unauthorized to create any role.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }

        //Validation Data
        $rqst->validate([
            'name' => 'required|max:100|unique:roles'
        ],
        [
            'name.required' => 'Please give a role name'
        ]
    );
       
        $role = Role::create(["name" => $rqst->name, "guard_name" => "admin"]);
        $permissions = $rqst->input('permissions');

        if (!empty($permissions)) {
            $role->syncPermissions($permissions);
        }
        return redirect()->Route('rolemanage');
    }

    public function edit($id){
        if (is_null($this->user) || !$this->user->can('role.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit any role.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $role = Role::find($id);
        $all_permissions = Permission::all();
        $permission_groups = admin::getpermissiongroups();
        return view('backend.pages.roles.edit', compact('role', 'all_permissions', 'permission_groups'));
    }

    public function update(Request $request, $id){
        if (is_null($this->user) || !$this->user->can('role.edit')) {
            $exceptionMessage = 'Sorry, you are unauthorized to edit any role.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        // Validation Data
        $request->validate([
            'name' => 'required|max:100|unique:roles,name,' . $id
        ], [
            'name.required' => 'Please give a role name'
        ]);

        $role = Role::find($id);
        $permissions = $request->input('permissions');

        if (!empty($permissions)) {
            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }

        toastr()->success('Roles Update Successfully!', '', ['timeOut' => 5000]);
        return redirect()->Route('rolemanage');
    }

    public function delete($id){
        if (is_null($this->user) || !$this->user->can('role.delete')) {
            $exceptionMessage = 'Sorry, you are unauthorized to delete any role.';
            return response()->view('backend.pages.errors.403', compact('exceptionMessage'), Response::HTTP_FORBIDDEN);
        }
        $role = Role::find($id);
        $role->delete();
        toastr()->success('Role has been Deleted successfully!', '', ['timeOut' => 5000]);
        return back();
    }
}
