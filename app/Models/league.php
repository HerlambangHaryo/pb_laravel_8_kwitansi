<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class League extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'country',
        'leagueapi_id',
        'name',
        'type',
        'league_fixture_updated_at',
        
        'bookmakersapi_id',
        'bookmakers_name'
    ];

    protected $hidden = ["deleted_at"];
}
