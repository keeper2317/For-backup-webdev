<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View as FacadesView;

class AdminController extends Controller
{
    public function login()
    {
        
        if (FacadesView::exists('login')) {
            return view('login');
        } else {
            return abort(404);
        }

    }

    public function process(Request $request){
        $validated = $request->validate([
            "admin_uname" => 'required',
            'admin_pass' => 'required'
        ]);

        $admin = Admin::where('admin_uname', $validated['admin_uname'])->first();

        if($admin && $validated['admin_pass'] === $admin->admin_pass){
            // Authentication successful

            $request->session()->regenerate();

            return redirect('/salary-slip')->with('message', 'Welcome!');
        }

        return back()->withErrors(['admin_uname' => 'Login failed'])->onlyInput('Username');
    }


    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Logout successful');
    }

    public function signup(){
        return view('signup');
    }


    // // Admin login
    // public function login(Request $request)
    // {
    //      //validation
    //      $validated = $request->validate([
    //         'username' => 'required|unique',
    //         'password' => 'required'
    //     ]);

    //             //attempt authentication
    //     if(Auth::attempt($validated))
    //     {
    //         //get user object
    //         $user = Admin::where('username', $validated['username'])->first();
    //         $token = $user->createToken('admin-token')->plainTextToken;

    //         //return token response
    //         $response = [
    //             'data' => [
    //                 'access_token' => $token
    //             ]
    //         ];
    //         return response()->json($response);
    //     }
    //     else{
    //         return response()->json(['message' => 'Unauthenticated'], 401);
    //     }

    //     // if (Auth::attempt($credentials)) {
    //     //     $token = Auth::user()->createToken('admin-token')->plainTextToken;
    //     //     return response()->json(['token' => $token]);
    //     // } else {
    //     //     return response()->json(['error' => 'Unauthorized'], 401);
    //     // }
    // }

    // // Admin logout
    // public function logout(Request $request)
    // {
    //     $request->user()->tokens()->delete();

    //     return response()->json(['message' => 'Logged out successfully']);
    // }
}
