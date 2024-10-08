<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //Đăng nhập
    public function showFormLogin()
    {
        return view('auth.login');
    }
    public function Login(Request $request)
    {
        $user = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string']
        ]);
        if (Auth::attempt($user)) {
            // Kiểm tra vai trò của người dùng sau khi đăng nhập thành công
            if (Auth::user()->role === User::ROLE_ADMIN) {
                return redirect()->route('admins.dashboard'); // Trang quản trị admin
            } else {
                return redirect()->route('home'); // Trang home cho người dùng
            }
        }
        return redirect()->back()->withErrors([
            'email' => 'Thông tin người dùng không đúng'
        ]);
    }
    //Đăng ký
    public function showFormRegister()
    {
        return view('auth.register');
    }
    public function Register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
     
        $user = User::query()->create($data);
        Auth::login($user);
        return redirect()->intended('/');
    }
    //Đăng xuất
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
