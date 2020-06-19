<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::paginate(10);

        return view('pegawai.index', compact(['pegawai']));
    }

    public function create(Request $request)
    {
        $user = new User();
        $user->role = $request->jabatan;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(10);
        $user->save();

        $request->request->add(['user_id' => $user->id ]);
        $pegawai = Pegawai::create($request->all());

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('pegawai/', $request->file('foto')->getClientOriginalName());
            $pegawai->foto = $request->file('foto')->getClientOriginalName();
            $pegawai->save();
        }

        return redirect()->back();
    }

    public function profile($id)
    {
        $pegawai = Pegawai::find($id);

        return view('pegawai.profile', compact(['pegawai']));
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);

        return view('pegawai.edit', compact(['pegawai']));
    }

    public function update($id, Request $request)
    {
        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());

        $user = User::where('id', $pegawai->user_id);
        $user->update([
            'email' => $request->email
            ]);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('pegawai/', $request->file('foto')->getClientOriginalName());
             $pegawai->foto = $request->file('foto')->getClientOriginalName();
            $pegawai->save();
        }

        return redirect('/data_pegawai');
    }
}
