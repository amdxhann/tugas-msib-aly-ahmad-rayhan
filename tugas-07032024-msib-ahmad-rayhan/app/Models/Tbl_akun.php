<?php

namespace App\Models;

use App\Models\Tbl_mobil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tbl_akun extends Authenticatable
{
    use HasFactory;

    protected $guards = [];

    public function tbl_mobil() {
        return $this->hasMany(Tbl_mobil::class);
    }

}
