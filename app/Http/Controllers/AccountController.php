<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $user = auth()->user();
        return view('account.index', compact('user'));
    }

}
