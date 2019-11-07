<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mypertanyaan extends Model
{
    protected $table = "pertanyaan";
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}

