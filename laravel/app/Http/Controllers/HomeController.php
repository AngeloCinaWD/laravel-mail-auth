<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Support\Facades\Mail;

use App\Mail\TestMail;

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
    public function index()
    {
        return view('home');
    }

    public function sendMail(Request $request) {
      $mail = Auth::user() -> email;
      // $data = $request -> all();
      // dd($data);
      $data = $request -> validate([
        'textMail' => 'required|min:5'
      ]);
      Mail::to($mail) -> send(new TestMail($data['textMail']));
      return redirect() -> back();
    }
}
