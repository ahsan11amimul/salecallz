<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;
    protected $guarded=[];
    /**
    * Get the lender_notes associated with the notes.
    */
    public function files()
    {
        return $this->hasMany(DealFiles::class);
    }
    public function lenders()
    {
        return $this->belongsToMany(Lender::class,'deal_lenders');
    }
    


}
