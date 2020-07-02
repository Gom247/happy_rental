<?php

namespace App\Http\Controllers;

use App\Member;
use App\Mobil;
use App\Motor;
use App\Pesan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mobil = Mobil::orderBy('created_at', 'DESC')->paginate(3);
        $motor = Motor::orderBy('created_at', 'DESC')->paginate(3);
        return view('home.index', compact(['mobil', 'motor']));
    }

    public function mobilindex()
    {
        $mobil = Mobil::paginate(10);

        return view('home.mobil', compact(['mobil']));
    }

    public function mobil($id)
    {
        $mobil = Mobil::find($id);


        return view('home.mobil_detail', compact(['mobil']));
    }

    public function registasi()
    {
        return view('home.registarasi');
    }

    public function create(Request $request)
    {
        $member = Member::create([
            'no_member' => Str::random(5),
            'name' => $request->name,
            'email' => $request->email,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'kode_pos' => $request->kode_pos,
            'no_tlp' => $request->no_tlp,
            'identitas' => $request->identitas,
            'foto' => $request->foto,
        ]);

        if ($request->hasFile('identitas')) {
            $request->file('identitas')->move('member/', $request->file('identitas')->getClientOriginalName());
            $member->identitas = $request->file('identitas')->getClientOriginalName();
            $member->save();
        }

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('member/', $request->file('foto')->getClientOriginalName());
            $member->foto = $request->file('foto')->getClientOriginalName();
            $member->save();
        }

        return redirect('/')->with('succes', 'Berhasil Mendaftar Member');

    }

    public function pesanmobil($id)
    {
        $mobil = Mobil::find($id);
        return view('home.pesanan_mobil', compact(['mobil']));
    }

    public function motorindex()
    {
        $motor = Motor::paginate(10);

        return view('home.motor', compact(['motor']));
    }

    public function motor($id)
    {
        $motor = Motor::find($id);

        return view('home.motor_detail', compact(['motor']));
    }

    public function pesanmotor($id)
    {
        $motor = Motor::find($id);

        return view('home.pesanan_motor', compact('motor'));
    }

    public function about()
    {
        return view('home.about');
    }


}
