<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trackstatus;

class Trackdata extends Model
{
    use HasFactory;

    public function trackstatuses(){

            return $this->belongsTo(Trackstatus::class);
        
    }
}
