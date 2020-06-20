<?php

namespace App\Http\Controllers;

use App\Mobil;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    public function mobil()
    {
        $mobil = Mobil::paginate(10);

        return view('mobil.index', compact(['mobil']));
    }

    public function mobilcreate(Request $request)
    {
        $mobil = Mobil::create($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('mobil/', $request->file('foto')->getClientOriginalName());
            $mobil->foto = $request->file('foto')->getClientOriginalName();
            $mobil->save();
        }

        return redirect()->back();
    }
}
