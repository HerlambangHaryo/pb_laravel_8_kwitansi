<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\League; 

class Rapidapi_predictions extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [ 
                
        //def                
            'fixtureapi_id', 

            'passess_accurate_home',
            'passess_accurate_away',

            'passess_home',
            'passess_away',

            'prediction_winner_name',
            'prediction_winner_comment',

            'prediction_underover',

            'prediction_goals_home',
            'prediction_goals_away',

            'prediction_advice',

            'prediction_percent_home',
            'prediction_percent_draw',
            'prediction_percent_away',

            'comparison_form_home',
            'comparison_form_away',

            'comparison_att_home',
            'comparison_att_away',

            'comparison_def_home',
            'comparison_def_away',

            'comparison_h2h_home',
            'comparison_h2h_away',

            'comparison_goals_home',
            'comparison_goals_away',

            'comparison_poisson_distribution_home',
            'comparison_poisson_distribution_away',
            
            'comparison_total_home',
            'comparison_total_away',
  
    ]; 
 
 

    protected $hidden = ["deleted_at"];
}
