<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trackdata;
use App\Models\Trackstatedetail;

class Trackstatus extends Model
{
    use HasFactory;
    public function trackdatas(){

        return $this->hasOne(Trackdata::class);
    
}
public function trackstatedetails(){

    return $this->hasMany(Trackstatedetail::class);

}
}
