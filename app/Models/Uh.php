<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uh extends Model
{   
    
    public function paragraphs()
    {
        return $this->belongsTo('App\Model\Paragraph', 'paragraph_id');
    }
}
