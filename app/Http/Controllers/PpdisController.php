<?php

namespace App\Http\Controllers;

use App\Models\Ppdis;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PpdisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }
    public function register()
    {
        return view('register');
    }

    
    public function inputRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'school' => 'required',
            'gender' => 'required',
            'major' => 'required',
            'nisn' => 'required',
            'email' => 'required',

        ]);

        $ppdb = new Ppdis();
        $ppdb->name = $request->name;
        $ppdb->school = $request->school;
        $ppdb->gender = $request->gender;
        $ppdb->gender = $request->gender;
        $ppdb->major = $request->major;
        $ppdb->email = $request->email;
        $ppdb->nisn = $request->nisn;
        $ppdb->save();

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->nisn);
        $user->role = 'user';
        $user->save();

        return redirect('/login')->with('success', 'berhasil membuat akun!');
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => "This email doesn't exists"
        ]);
        $role = User::where('email', $request->email)->first();
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            if ($role->role == "user") {
                return redirect('/dashboard');
            } else {
                return redirect('/admin');
            }
        } else {
            return redirect('/login')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

    public function dashboard()
    {
        $data = Ppdis::latest()->paginate(1);
        return view('dashboard', compact('data'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function admin()
    {
        $data = Ppdis::all();
        return view('admin', compact('data'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ppdis $ppdis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppdis $ppdis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ppdis $ppdis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppdis $ppdis)
    {
        //
    }
}
