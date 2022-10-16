<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipster extends Model
{
    use HasFactory; 
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'nama',
        'source',
        'status',
        'play',
        'points',
        'win',
        'lose', 
        'draw', 
        'win_percentages',
        'lose_percentages', 
    ];
}
