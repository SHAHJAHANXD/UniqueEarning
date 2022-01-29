<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\Contact;
use App\Models\Investment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->count();
        $withdraw = DB::table('withdraw_histories')->count();
        $investment = DB::table('investments')->count();
        $messages = DB::table('contacts')->count();
        return view('admin.index', compact('user', 'withdraw', 'investment', 'messages'));
    }
    public function users()
    {
        $user = User::all();
        return view('admin.users', compact('user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function request()
    {
        $request = Investment::all();
        return view('admin.request', compact('request'));
    }
    public function login()
    {
        return view('admin.login');
    }
    public function authenticateAdmin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password' => 'required|min:5'
        ]);
        $credentials = $request->only('email', 'password');

        if (
            Auth::guard('admin')->attempt($credentials)
        ) {

            return redirect('/admin/dashboard');
        }
        return redirect()->back()->with('error', 'Email or Password is Invalid!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function message()
    {
        $request = Contact::all();
        return view('admin.messages', compact('request'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }
    public function logout()
    {
        Auth::logout();
        Session::flush();

        return redirect('/admin/login');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
