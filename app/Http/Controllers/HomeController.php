<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (count($request->user()->tokens) < 1) {
            $newToken = $request->user()->createToken('new-user-token');
            $request->user()->update(['plain_token' => $newToken->plainTextToken]);
        }

        return view('home', [
            'token' => $request->user()->plain_token
        ]);
    }
}
