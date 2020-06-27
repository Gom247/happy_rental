<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class MemberController extends Controller
{
    public function index()
    {
        $member = Member::all();

        return view('member.index');
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
