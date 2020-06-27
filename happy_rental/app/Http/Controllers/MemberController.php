<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::all();

        return view('member.index');
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

        return redirect()->back();
    }

    public function profile($id)
    {
        $member = Member::find($id);

        return view('member.profile', compact(['member']));
    }

    public function edit($id)
    {
        $member = Member::find($id);

        return view('member.edit', compact(['member']));
    }

    public function getdatamember()
    {
        $member = Member::select('member.*');

        return DataTables::eloquent($member)
        ->addColumn('foto', function($m){
            return ' <img src="'.$m->getAvatar().'" width="100" height="100" alt="">';
        })
        ->addColumn('profile', function($m){
            return '<a href="/data_member/'.$m->id.'/profile" class="btn btn-primary">Profile</a>';
        })
        ->rawColumns(['foto', 'profile'])
        ->toJson();
    }
}
