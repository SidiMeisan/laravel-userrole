<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

class usersController extends Controller
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
        $AllUser = User::all();
        // return all data
        return view('user',['datas'=> $AllUser]);
    }

    public function downloadPDF() {
        $show = User::all();
        $pdf = PDF::loadView('pdf', compact('show'));
        
        return $pdf->download('disney.pdf');
    }
}
