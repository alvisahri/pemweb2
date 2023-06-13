<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\TipeMobil; 

class TipeMobilController extends Controller
{
    function index()
    {
        $tipeMobilData = TipeMobil::get();
        return view('pages.tipe_mobil.index', ['tipeMobilData' =>$tipeMobilData]);
    }

    function create()
    {
        return view('pages.tipe_mobil.create');
    }

    function store(Request $request)
    {
        $tipeMobilData = new TipeMobil;
        $tipeMobilData->tipe = $request->tipe;
        $tipeMobilData->save();

         return redirect()->to('/tipemobil')->with('success','Data tipe Berhasil Ditambahkan');
    }

    function FormEdit($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        return view('pages.tipe_mobil.form_edit',['tipeMobilData' => $tipeMobilData]);
    }

    function update($id,Request $request)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->tipe = $request->tipe;
        $tipeMobilData->save();
        return redirect()->to('/tipemobil')->with('success','Data tipe Berhasil Diupdate');
    }

    function delete($id)
    {
        $tipeMobilData = TipeMobil::find($id);
        $tipeMobilData->delete();
        return redirect()->to('/tipemobil')->with('success','Data tipe Berhasil Didelete');
    }
     
}
