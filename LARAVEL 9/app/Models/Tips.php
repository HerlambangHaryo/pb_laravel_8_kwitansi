<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Fixture_fin; 
use App\Models\Tipster; 

class Tips extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'nama',
        'source', 
        'win',
        'lose',  
        'fixtureapi_id',  
        'tipster_id',  
        'value',  
    ];

    public function fixture()
    {
        return $this->belongsTo(Fixture_fin::class, 'fixtureapi_id', 'fixtureapi_id');
    }

    public function tipster()
    {
        return $this->belongsTo(Tipster::class, 'tipster_id', 'id');
    }
}
