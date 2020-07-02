<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pesan;

class PesanController extends Controller
{
    public function index()
    {
        $pesan = Pesan::all()->sortByDesc('created_at');

        return view('pesan.index', compact(['pesan']));
    }

    public function edit($id)
    {
        $pesan = Pesan::find($id);

        return view('pesan.edit', compact(['pesan']));
    }

    public function update($id, Request $request)
    {
        $pesan = Pesan::find($id);
        $pesan->update($request->all());

        return redirect('/data_pesan');
    }
}
