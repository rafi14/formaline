<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mymatkul extends Model
{
    protected $table = "matkul";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function matkuluser()
    {
        return $this->hasMany(User::class, 'id_user');
    }
}
