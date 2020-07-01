<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $table = 'pesan';
    protected $fillable = ['nama', 'no_member', 'sopir', 'tanggal', 'hari', 'denda'];


}
