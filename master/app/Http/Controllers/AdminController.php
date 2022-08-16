<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Hash;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('loginId')) {
            $admin = Admin::all();
            return view('admin.adminPages.adminInfo')->with('admins', $admin);
        } else {
            return view('admin.adminpages.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if (session()->has('loginId')) {
            return view('admin.adminPages.create');
        // } else {
        //     return view('admin.adminpages.login');
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session()->has('loginId')) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:admins',
                'password' => 'required|min:8',
            ]);
            $admin = new Admin;
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->password = $request->input('password');
            $admin->save();
            return redirect('/admin')->with('success', 'Admin Created');
        } else {
            return view('admin.adminpages.login');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {if (session()->has('loginId')) {
        $admin = Admin::find($id);
        return view('admin.adminPages.adminEdit')->with('admins', $admin);
    } else {
        return view('admin.adminpages.login');
    }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (session()->has('loginId')) {
            $admin = Admin::find($id);
            $admin->name = $request->input('name');
            $admin->email = $request->input('email');
            $admin->password = $request->input('password');

            $admin->save();
            return redirect('/admin')->with('success', "Admin Edited");
        } else {
            return view('admin.adminpages.login');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (session()->has('loginId')) {
            $admins = Admin::find($id);
            $admins->delete();
            return redirect('/admin')->with('success', 'admin Deleted');
        } else {
            return view('admin.adminpages.login');
        }
    }

    public function login()
    {
        if (session()->has('loginId')) {
            return view('admin.adminpages.login');
        } else {
            return view('admin.adminpages.login');
        }
    }
    public function authLogin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $admin = Admin::where('email', '=', $request->email)->first();
        if ($admin) {
            $adminPass = Admin::where('password', '=', $request->password)->first();
            if ($adminPass) {

                //for navbar
                $name = $request->session()->put('name', $admin->name);
                $email = $request->session()->put('email', $admin->email);
                //for login
                $request->session()->put('loginId', $admin->id);
                return redirect('/admin');

            } else {
                return back()->with('fail', 'Password  not matches');
            }
        } else {
            return back()->with('fail', 'Email does not matches');

        }
    }

    public function logout()
    {
        if (session()->has('loginId')) {
            session()->pull('loginId');
            return redirect('loginad');
        }
    }


    public function viewDash(){
        return view('admin.adminPages.index');
    }


}
