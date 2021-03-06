<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
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
    public function index()
    {
        return view('dashboard.dashcontent.home')
        ->with([
            'judul' => 'Dashboard',
            'cok_plugins' => 'standart'
        ]);
    }

}
