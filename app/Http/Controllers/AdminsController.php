<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admins;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PhpOffice\PhpSpreadsheet\Document\Properties;

class AdminsController extends Controller
{
    public $ho_ow;

    public function create()
    {
        return view('Admins.register');
    }
    public function authRegister(Request $request)
    {


        $ho_ow = new Admins();

        $ho_ow->name = $request->name;

        $ho_ow->email = $request->email;
        $ho_ow->telephone = $request->telephone;
        $ho_ow->password = Hash::make($request->password);
        $ho_ow->save();

        Auth::guard('Admins')->login($ho_ow);

        return redirect('Admins/login')->with('status', "Your account is created successfully.");
    }

    public function login()
    {
        return view('Admins.login');
    }

    public function auth(Request $request)
    {
        // Validate the form data
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('Admins')->attempt($credentials)) {
            $Admins = Auth::guard('Admins')->user();
            return redirect('/Admins/dashboard');

            // Failed login
            return redirect('login')->withErrors([
                'email' => 'Invalid email or password',
            ]);
        }
    }

    public function addNew(Request $request)
    {
    }

    public function editProfile()
    {
    }

    public function saveChanges()
    {
    }

    public function ViewProfile()
    {
    }

    public function ViewAdminsDashboard()
    {


        return view('Admins/dashboard');
    }

    public function deleteHOaccount()
    {
    }
}
