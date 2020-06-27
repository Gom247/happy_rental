<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "member";
    protected $fillable = ['no_member', 'name', 'email', 'alamat', 'kode_pos', 'no_tlp', 'identitas', 'foto'];
    protected $date = ['created_at'];

    public function getAvatar()
    {
        if (!$this->foto) {
            return asset('no-thumbnail.jpg');
        }

        return asset('member/'.$this->foto);
    }

    public function getIdentitas()
    {
        if (!$this->identitas) {
            return asset('no-thumbnail.jpg');
        }

        return asset('member/'.$this->identitas);
    }
}
