<?php

namespace App\Models;

use App\Models\Tbl_akun;
use App\Models\Tbl_pesanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tbl_mobil extends Model
{
    use HasFactory;

    protected $guards = [];

    public function tbl_akun() {
        return $this->belongsTo(Tbl_akun::class);
    }
}
