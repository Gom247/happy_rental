<?php

namespace App\Http\Controllers;

use App\Pegawai;
use App\User;
use Illuminate\Http\Request;
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
        $user->password = bcrypt('123456');
        $user->remember_token = Str::random(10);
        $user->save();

        $request->request->add(['user_id' => $user->id ]);
        $pegawai = Pegawai::create($request->all());

    }
}
