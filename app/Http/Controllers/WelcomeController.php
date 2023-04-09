<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class WelcomeController extends Controller
{
    public function index()
    {
      $pengunjung = Pengunjung::orderByDesc('skor')->limit(3)->get();
      //   var_dump($tamu);
      $data = array(
      'pengunjung' => $pengunjung,
    );
      return view('welcome', $data);
    }

    public function leaderboard()
    {
      $pengunjung = Pengunjung::orderByDesc('skor')->get();
      //   var_dump($tamu);
      $data = array(
      'pengunjung' => $pengunjung,
    );
      return view('leaderboard', $data);
    }

}
