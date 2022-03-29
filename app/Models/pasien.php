<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function RekamMedisPasien(){
        return $this->hasMany(RekamMedis::class);
    }
}
