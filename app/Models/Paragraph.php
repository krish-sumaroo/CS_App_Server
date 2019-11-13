<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paragraph extends Model
{
    protected $fillable = ['text'];
    
    
    public function uhs()
    {
        return $this->hasMany('App\Models\Uh','paragraph_id');
    }
    
    public function dossier()
    {
        return $this->belongsTo('App\Models\Dossier','dossier_id');
    }  
    
}
