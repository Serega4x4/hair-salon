<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        $users = User::all();

        return view('index', ['users' => $users]);
    }
}
