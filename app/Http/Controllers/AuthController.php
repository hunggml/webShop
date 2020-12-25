<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function checkLogin(LoginRequest $request)
    {
        $product = Product::all();
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {
            $user = Auth::user();
            $name = $user->name;
            $request->session()->push('login', $name);
            return redirect()->route('admin',compact('product'));
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'user'])) {
            $user = Auth::user();
            $name = $user->name;
            $request->session()->push('login', $name);
            return redirect()->route('home',compact('product'));
        }
    }

    public function logout(Request $request)
    {
        $products = Product::all();

        $request->session()->flush();
        return redirect()->route('home',compact('products'));
    }

    public function logoutAdmin(Request $request)
    {
        $product = Product::all();
        $request->session()->flush();
        return redirect()->route('home',compact('product'));
    }


}
