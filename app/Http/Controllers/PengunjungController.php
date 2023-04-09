<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;

class PengunjungController extends Controller
{
    public function index()
    {
      $pengunjung = Pengunjung::get();
      //   var_dump($tamu);
      $data = array(
      'pengunjung' => $pengunjung,
    );
      return view('pengunjung.get', $data);
    }
    public function store(Request $request)
    {
      $pengunjung = Pengunjung::create($request->all());
        session()->flash('success', 'Pengunjung Data Saved Successfully');
        return redirect('/participant');
    }
    public function update(Request $request, $id)
      {
        $pengunjung = Pengunjung::findOrFail($id);
        $pengunjung->update($request->all());
        session()->flash('success', 'Pengunjung Data Updated Successfully');
        return redirect('/participant');
      }
      public function delete($id)
  {
      //$deleteStudent = DB::table('students')->where('id', $id)->delete();
      $pengunjung = Pengunjung::findOrFail($id);
      $pengunjung->delete();

      session()->flash('success', 'Pengunjung Data Deleted Successfully');
      return redirect('/participant');
  }
}
