<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $fillable = [
        'nama_proyek', 'deskripsi_proyek', 'tanggal_dimulai', 'tanggal_deadline', 'status'
    ];

    public function karyawan_staff()
    {
        return $this->belongsToMany('App\Karyawan_staff', 'karyawan_staff_proyek', 'karyawan_staff_id', 'proyek_id');
    }
}
