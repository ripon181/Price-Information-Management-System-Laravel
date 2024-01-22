<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class Controllerlogin extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function adminlogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        try {
            if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
                return redirect()->route('dashboard');
            } else {
                throw ValidationException::withMessages([
                    'username' => 'Invalid username or password.',
                ]);
            }
        } catch (ValidationException $e) {
            return redirect()->route('adminlogin')->withErrors($e->errors());
        }
    }

    public function adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('adminlogin');
    }
}
