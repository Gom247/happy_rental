<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\Motor;
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

    public function mobiledit($id)
    {
        $mobil = Mobil::find($id);

        return view('mobil.edit', compact(['mobil']));
    }

    public function mobilupdate($id, Request $request)
    {
        $mobil = Mobil::find($id);
        $mobil->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('mobil/', $request->file('foto')->getClientOriginalName());
            $mobil->foto = $request->file('foto')->getClientOriginalName();
            $mobil->save();
        }

        return redirect('/data_mobil');
    }

    public function mobildelete($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete($mobil);

        return redirect()->back();
    }

    public function motor()
    {
        $motor = Motor::paginate(10);

        return view('motor.index', compact(['motor']));
    }

    public function motorcreate(Request $request)
    {
        $motor = Motor::create($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('motor/', $request->file('foto')->getClientOriginalName());
            $motor->foto = $request->file('foto')->getClientOriginalName();
            $motor->save();
        }

        return redirect()->back();
    }

    public function motoredit($id)
    {
        $motor = Motor::find($id);

        return view('motor.edit', compact(['motor']));
    }
}
