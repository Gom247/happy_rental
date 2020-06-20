<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = "mobil";
    protected $fillable = ['kode', 'nama', 'kapasitas', 'merek', 'harga', 'plat_nomor', 'foto'];

    public function getAvatar()
    {
        if (!$this->foto) {
            return asset('no-thumbnail.jpg');
        }

        return asset('mobil/'.$this->foto);
    }
}
