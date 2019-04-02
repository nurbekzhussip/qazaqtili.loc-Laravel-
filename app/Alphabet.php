<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alphabet extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = TRUE;
    
    public $timestamps = FALSE;
    
    protected $fillable = ['latynupper','latynlower','cyrillicupper','cyrilliclower','word','img'];
    
}
