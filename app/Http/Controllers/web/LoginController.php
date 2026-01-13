<?php

namespace App\Http\Controllers\web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\web\BaseController;

class LoginController extends BaseController
{
    public function show() {
        return view('auth.login');
    }

    public function submit(Request $request)
    {
        $response = Http::asForm()->post(
            $this->base_url('login'),
            $request->only('email', 'password')
        );

        if ($response->status() === 401) {
            return back()->with('error', 'Invalid credentials');
        }

        // Correctly extract token from nested 'data'
        $token = $response->json('data.token');

        if (!$token) {
            return back()->with('error', 'Invalid credentials');
        }

        session()->put('api_token', $token);
        $request->session()->regenerate();

        return redirect()->route('test.index');
    }
}
