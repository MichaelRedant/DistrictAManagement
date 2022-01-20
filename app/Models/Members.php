<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    public function member_straat(){
        return $this->belongsTo(LedenStraten::class,'street_id','id');
    }

    public function member_label(){
        return $this->belongsTo(Label::class,'label','id');
    }

    public function member_sluit(){
        return $this->belongsTo(Dagen::class,'street_id','id');
    }
}
