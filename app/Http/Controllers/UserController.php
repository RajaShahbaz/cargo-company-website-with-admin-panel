<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return redirect(route('admin.dashboard'));
        }else{
            return redirect()->back();
        }

    }
    public function logout()
    {
        $user=Auth::user();
        if(!empty($user)){
            Session::flush();
        return redirect(route('login'))->with('message','Logout successfully');
        }
        else{
         return redirect(route('login'))->with('message','login again');
        }
    }
    public function index(){
        $user = Auth::user();
            $users = User::latest()->get();

        return view('admin.users',compact('users'));
    }
    public function store(Request $request){
        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->image = $request->image;
        $user->branch_id = $request->branch;
        $user->role_id = $request->role;
        $user->save();
        return redirect(route('admin.users'));
    }
    public function show($id){
        $user = User::find($id);
        return view('admin.dashboard',compact('user'));
    }
    public function update($id,Request $request){
        $user =User::find($id);
        $user->fname = $request->fname ??$user->fname;
        $user->lname = $request->lname ?? $user->lname;
        $user->email = $request->email ?? $user->email;
        if(!empty($request->password)){
            $user->password = Hash::make($request->password);
        }
        $user->image = $request->image ?? $user->image;
        $user->save();
        return view('admin.index');
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
