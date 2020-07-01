<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $table = "motor";
    protected $fillable = ['kode', 'nama', 'merek', 'harga', 'plat_nomor', 'foto'];
    protected $date = ['created_at'];

    public function getAvatar()
    {
        if (!$this->foto) {
            return asset('no-thumbnail.jpg');
        }

        return asset('motor/'.$this->foto);
    }
}
