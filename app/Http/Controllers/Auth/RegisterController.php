<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Role;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(Role $role)
    {
        return view('auth.register', compact('role'));
    }

    public function selectRole()
    {
        $tutorRole = Role::find(2);
        $aspirantRole = Role::find(3);

        return view('auth.select-role', compact('tutorRole', 'aspirantRole'));
    }

    public function register(Request $request)
    {
        //'email' => 'required|email|max:255|unique:users,email',
        // $attributes = request()->validate([
        //     'name' => 'required',
        //     'first_lastname' => 'required',
        //     'second_lastname' => 'required',
        //     'email' => 'required',
        //     'role' => 'required',
        //     'password' => 'required|min:5|max:255'
        // ]);
        
        $user = User::create([
            'gender' => $request->gender,
            'name' => $request->name,
            'first_lastname' => $request->first_lastname,
            'second_lastname' => $request->second_lastname,
            'cell_phone' => $request->cell_phone,
            'landline_phone' => $request->landline_phone,
            'institutional_phone' => $request->institutional_phone,
            'school_code' => $request->school_code,
            'income_calendar' => $request->income_calendar,
            'email' => $request->email,
            'institutional_email' => $request->institutional_email,
            'location' => $request->location,
            'state' => $request->state,
            'role_id' => $request->role,
            'password' => $request->password,
            'status' => "activo",
        ]);
        
        auth()->login($user);

        return redirect('/');
    }
}
