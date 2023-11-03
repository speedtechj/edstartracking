<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trackstatedetail extends Model
{
    use HasFactory;
    public function trackstatus(){

        return $this->belongsTo(Trackstatus::class);
    
}
}
