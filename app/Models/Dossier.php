<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{   
    
    public function paragraphs()
    {
        return $this->hasMany('App\Models\Paragraph');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
