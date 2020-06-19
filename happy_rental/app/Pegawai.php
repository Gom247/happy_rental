<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $fillable = ['user_id', 'name', 'email', 'jenis_kelamin', 'no_tlp', 'alamat', 'ttl', 'jabatan', 'foto'];
    protected $date = ['created_at'];

    public function getAvatar()
    {
        if (!$this->foto) {
            return asset('no-thumbnail.jpg');
        }

        return asset('pegawai/'.$this->foto);
    }
}
