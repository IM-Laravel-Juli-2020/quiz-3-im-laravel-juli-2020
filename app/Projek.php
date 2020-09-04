<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projek extends Model
{
    protected $table = 'projek';

    protected $fillable = [
        'nama', 'deskripsi', 'mulai', 'deadline', 'staus', 'manager_id'
    ];
}
