<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lender extends Model
{
    use HasFactory;
    protected $guarded=[];
    /**
     * Get the lender_notes associated with the notes.
     */
    public function deals()
    {
        return $this->belongsToMany(Deal::class,'deal_lenders');
    }
}
