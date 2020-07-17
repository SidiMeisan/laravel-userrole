<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


// untuk export pdf
use PDF;

// untuk export excel
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

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

    // Melihat Semua user
    public function index()
    {
        $AllUser = User::all();
        // return all data
        return view('user',['datas'=> $AllUser]);
    }

    //untuk mendownload pdf
    public function downloadPDF() {
        $datas = User::all();
        $pdf = PDF::loadView('pdf', compact('datas'));
        
        return $pdf->download('user.pdf');
    }

    //untuk mendownload pdf
    public function downloadXLSX() {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}
