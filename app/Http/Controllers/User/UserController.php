<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Session;
use App\User;
use DB;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showRegistarionForm()
    {
    	return view('user.registration');
    }
    public function userSave(Request $request){


    	$this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect('user-list');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function user_list()
    {
    	$users= User::all();
    	return view('user.user_list',['users'=>$users]);
    }

    public function user_edit($id)
    {

        $user_edit= User::where('id', $id)->first();

        return view('user.user_edit',['user_data'=>$user_edit]);
    }
    public function useUpdate(Request $request)
    {
        $user_update = User::find($request->id);
        $user_update->name = $request->name;
        $user_update->save();
        if($user_update)
        {
            return redirect('user-list');
        }
    }
}
