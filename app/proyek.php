<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proyek extends Model
{
    protected $fillable = [
        'Nama','Deskripsi_proyek','tanggal_mulai','tanggal_deadline','status'
    ];

    protected $table = 'proyek';
}
