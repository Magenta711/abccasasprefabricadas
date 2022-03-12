<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Motor;
use App\User;
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
        // $this->middleware('auth');
        // $this->middleware('verified');

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function notification_read($id)
    {
        foreach (auth()->user()->unreadNotifications as $notification) {
            if ($notification->id == $id){
                $notification->markAsRead();
            }
        }
    }
}
