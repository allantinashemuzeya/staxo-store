<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    //
    public function index(): Factory|View|Application
    {

        $userType = UserType::where('id', Auth::user()->id)->first();
        return view('store.home', ['userType'=>$userType]);
    }
}
