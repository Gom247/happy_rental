<?php

namespace App\Http\Controllers;

use App\Mobil;
use App\Motor;
use App\Pesan;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RentalController extends Controller
{
    public function mobil()
    {
        $mobil = Mobil::all();

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

    public function getdatamobil()
    {
        $mobil = Mobil::select('mobil.*');

        return DataTables::eloquent($mobil)
        ->addColumn('edit', function($m){
            return '<a href="/data_mobil/'.$m->id.'/edit" class="btn btn-warning">Edit</a>';
        })
        ->addColumn('foto', function($m){
            return ' <img src="'.$m->getAvatar().'" width="100" height="100" alt="">';
        })
        ->rawColumns(['edit', 'foto'])
        ->toJson();
    }

    public function motor()
    {
        $motor = Motor::all();

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

    public function motorupdate($id, Request $request)
    {
        $motor = Motor::find($id);
        $motor->update($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('motor/', $request->file('foto')->getClientOriginalName());
            $motor->foto = $request->file('foto')->getClientOriginalName();
            $motor->save();
        }

        return redirect('/data_motor');
    }

    public function motordelete($id)
    {
        $motor = Motor::find($id);
        $motor->delete($motor);

        return redirect()->back();
    }

    public function getdatamotor()
    {
        $motor = Motor::select('motor.*');

        return DataTables::eloquent($motor)
        ->addColumn('edit', function($m){
            return '<a href="/data_motor/'.$m->id.'/edit" class="btn btn-warning">Edit</a>';
        })
        ->addColumn('foto', function($m){
            return ' <img src="'.$m->getAvatar().'" width="100" height="100" alt="">';
        })
        ->rawColumns(['edit', 'foto'])
        ->toJson();
    }

    public function pesan(Request $request)
    {
        Pesan::create([
            'nama' => $request->nama,
            'no_member' => $request->no_member,
            'sopir' => $request->sopir,
            'tanggal' => $request->tanggal,
            'hari' => $request->hari,
            'denda' => "0",
        ]);
        return view('home.succes')->with('succes', 'Pesan Berhasil');
    }

    public function datapesan()
    {
        $pesan = Pesan::all();

        return view('pesan.index', compact(['pesan']));
    }

    public function datapesanedit($member)
    {
        $pesan = Pesan::where('no_member', $member)->count();

        return view('pesan.edit');
    }
}
