<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Traits\AppTools;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    protected $data = [];

    public function __construct()
    {
        $this->data['title'] = 'Manage User';
    }

    public function index()
    {
        $this->data['users'] = User::all();
        return view('administration.user.index', $this->data);
    }

    public function create()
    {
        $this->data['roles'] = Role::all();
        return view('administration.user.create', $this->data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5',
            'username' => 'required|min:3|unique:users',
            'phone' => 'required|min:10|max:14',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required|min:8',
        ]);

        $user = new User;

        $user->code = AppTools::getCode(User::class);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->company_id = session()->get('company_id');
        $user->branch_id = session()->get('branch_id');
        $user->password = Hash::make($request->password);
        $user->save();

        $user->assignRole($request->role_id);

        return redirect()->route('user.index')->with(['message' => 'Save Successfully!']);

    }


    public function edit(User $user)
    {
        $this->data['user'] = $user;
        $this->data['role_id'] = DB::table('model_has_roles')->where('model_id', $user->id)->first()->role_id;
        $this->data['roles'] = Role::all();
        return view('administration.user.edit', $this->data);
    }


    /*Need to Check*/
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|min:5',
            'phone' => 'required|min:10|max:14',
        ];

        if ($request->filled('password')) {

            $rules['password'] = 'required|min:8|confirmed';
            $rules['password_confirmation'] = 'required|min:8';

            $user->password = Hash::make($request->password);
        }

        $request->validate($rules);

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        /*Delete Old Role And Assign New One*/
        DB::table('model_has_roles')->where('model_id', $user->id)->delete();
        $user->assignRole($request->role_id);

        return redirect()->route('user.index')->with(['message' => 'Save Successfully!']);
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('message', 'Delete Successfully!');
    }


}
