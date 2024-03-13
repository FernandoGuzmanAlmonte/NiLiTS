<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $this->authorize('manage-users', User::class);
        $users = User::all();
        $role = false;
        $filteredNumbers = array_filter(preg_split("/\D+/", $request->fullUrl()));
        $role_id = end($filteredNumbers);        

        if ( strcmp($role_id , "1" ) == 0) {
            $role = Role::find(1);
        } 
        else if ( strcmp($role_id , "2") == 0 ) {
            $role = Role::find(2);
        }
        else if ( strcmp($role_id , "3") == 0 ) {
            $role = Role::find(3);
        }
        else if ( strcmp($role_id , "4") == 0 ) {
            $role = Role::find(4);
        }
    
        return view('laravel.users.index', compact('role', 'users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('laravel.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'firstname' => ['required'],
            'email' => ['required', 'unique:users', 'email'],
            'confirmation' => ['same:email'],
            'password' => ['required', 'min:5'],
            'confirm-password' => ['same:password'],
            'role' => ['required'],
            'image' => ['image'],
            'phone' => ['max:10']
        ]);

        if($request->get('choices-year') || $request->get('choices-month') || $request->get('choices-day'))
        {
            $birthday = $request->get('choices-year').'-'.$request->get('choices-month').'-'.$request->get('choices-day');
        }
        else{
            $birthday = null;
        }

        $user = User::create([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'password' => $request->get('password'),
            'role_id' => $request->get('role'),
            'email' => $request->get('email'),
            'gender' => $request->get('gender'),
            'location' => $request->get('location'),
            'phone' => $request->get('phone'),
            'language' => $request->get('language'),
            'birthday' => $birthday,
            'skills' => $request->get('skills')
        ]);

        if($request->file('avatar')) {
            $user->update([
                'avatar' => $request->file('avatar')->store('/', 'avatars')
            ]);
        }

        return redirect()->route('user-management')->with('succes', 'User succesfully saved');
    }

    public function edit($id)
    {
        $this->authorize('manage-users', User::class);
        $user = User::find($id);
        // dd($user->role()->first()->id);
        // dd($user->director()->first()->id);
        // dd($user->director->id);
        $roles = Role::all();
        $directors = User::where('role_id', '=', 5)->get();
        $tutors = User::where('role_id', '=', 2)->get();

        $birthday = $user->birthday;
        if(!empty($birthday))
        {
            $year = Carbon::createFromFormat('Y-m-d', $birthday)->format('Y');
            $day = Carbon::createFromFormat('Y-m-d', $birthday)->format('d');
            $month = Carbon::createFromFormat('Y-m-d', $birthday)->format('m');
            $birthdayArray = array(
                "year" => $year,
                "day" => $day,
                "month" =>$month
              );
        }
        else{
            $birthdayArray = array(
                'year' => 0,
                'day' => 0,
                'month' => 0
              );

        }

        return view ('laravel.users.edit', compact('user', 'roles', 'birthdayArray', 'directors', 'tutors'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        // $attributes = request()->validate([
        //     'firstname' => ['required'],
        //     'email' => ['required', 'email',  Rule::unique('users')->ignore($user->id)],
        //     'confirmation' => [],
        //     'password' => [],
        //     'confirm-password' => ['same:password'],
        //     'role' => ['required'],
        //     'image' => ['image'],
        //     'phone' => ['max:10']
        // ]);

        if($request->get('choices-year') || $request->get('choices-month') || $request->get('choices-day'))
        {
            $birthday = $request->get('choices-year').'-'.$request->get('choices-month').'-'.$request->get('choices-day');
        }
        else{
            $birthday = null;
        }        
    

        $user->update([
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
            'status' => $request->status ?? 'activo',
            'role_id' => $request->role,
            'birthday' => $birthday,

            'module_one' => $request->module_one,
            'module_two' => $request->module_two,
            'module_three' => $request->module_three,
            'module_four' => $request->module_four,
            'module_five' => $request->module_five,
            'module_six' => $request->module_six,
            'module_seven' => $request->module_seven,
            'module_eight' => $request->module_eight,
            'module_nine' => $request->module_nine,
            'module_ten' => $request->module_ten,
            'module_eleven' => $request->module_eleven,
            'module_twelve' => $request->module_twelve,

            'graduation_mode' => $request->graduation_mode ?? null,
            'certificate_book' => $request->certificate_book ?? null,
            'act_number' => $request->act_number ?? null,
            'graduation_calendar' => $request->graduation_calendar ?? null,
            'director_id' => $request->director_id ?? null,
            'tutor_id' => $request->tutor_id ?? null
        ]);

        if($request->file('avatar')) {
            $user->update([
                'avatar' => $request->file('avatar')->store('/', 'avatars')
            ]);
        }

        return redirect()->route('user-edit', $user->id)->with('succes', 'User succesfully updated');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user-management')->with('succes', 'The user was succesfully deleted');
    }
}
