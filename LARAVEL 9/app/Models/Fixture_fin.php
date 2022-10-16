<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\League; 
use App\Models\Tips; 
use App\Models\Rapidapi_prediction; 

class Fixture_fin extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'bookmakersapi_id',

        'venue_name',
        'venue_city',

        'teams_home_id',
        'teams_away_id',
        
        'teams_home_logo',
        'teams_away_logo',
        
        'league_logo',
        'league_flag',
        
        'fixture_elapsed',
                
        //def                
            'fixtureapi_id',

            'date',
            'fixture_status',
            'referee',

            'leagueapi_id',

            'league_name',
            'league_country',
            'league_country_code',

            'season',
            'round',

            'teams_home',
            'teams_away', 

            'goals_home',
            'goals_away',

            'score_halftime_home',
            'score_halftime_away',

            'score_fulltime_home',
            'score_fulltime_away',

            'score_extratime_home',
            'score_extratime_away',

            'score_penalty_home',
            'score_penalty_away',

            'lineups_coach_home_name',
            'lineups_coach_away_name',

            'lineups_formation_away',
            'lineups_formation_home',

            'shots_on_goal_home',
            'shots_on_goal_away',

            'shots_off_goal_home',
            'shots_off_goal_away',

            'total_shots_home',
            'total_shots_away',

            'blocked_shots_home',
            'blocked_shots_away',

            'shots_inside_box_home',
            'shots_inside_box_away',

            'shots_outside_box_home',
            'shots_outside_box_away',

            'fouls_home',
            'fouls_away',

            'corner_kicks_home',
            'corner_kicks_away',

            'offsides_home',
            'offsides_away',

            'ball_possession_home',
            'ball_possession_away',

            'yellow_cards_home',
            'yellow_cards_away',

            'red_cards_home',
            'red_cards_away',

            'goalkeeper_saves_home',
            'goalkeeper_saves_away',

            'total_passess_home',
            'total_passess_away',

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
 
        'lineups_coach_home_name',
        'lineups_coach_away_name',

        'lineups_coach_home_photo',
        'lineups_coach_away_photo',
        
        'lineups_formation_away',
        'lineups_formation_home', 

        'shots_on_goal_home',
        'shots_on_goal_away',

        'shots_off_goal_home',
        'shots_off_goal_away',

        'total_shots_home',
        'total_shots_away',

        'blocked_shots_home',
        'blocked_shots_away',

        'shots_inside_box_home',
        'shots_inside_box_away',

        'shots_outside_box_home',
        'shots_outside_box_away',

        'fouls_home',
        'fouls_away',

        'corner_kicks_home',
        'corner_kicks_away',

        'offsides_home',
        'offsides_away',

        'ball_possession_home',
        'ball_possession_away',

        'yellow_cards_home',
        'yellow_cards_away',

        'red_cards_home',
        'red_cards_away',

        'goalkeeper_saves_home',
        'goalkeeper_saves_away',

        'total_passess_home',
        'total_passess_away',

        'passes_accurate_home',
        'passes_accurate_away',

        'passes_home',
        'passes_away', 


        // 365
            // 1 match winner
                'pre_mw_home_odd',   
                'pre_mw_draw_odd', 
                'pre_mw_away_odd',  

            // 4 asian handicap
                'pre_ah_home_575_min', 
                'pre_ah_away_575_min',  

                'pre_ah_home_55_min', 
                'pre_ah_away_55_min',  

                'pre_ah_home_525_min', 
                'pre_ah_away_525_min',  

                'pre_ah_home_5_min', 
                'pre_ah_away_5_min',  

                'pre_ah_home_475_min', 
                'pre_ah_away_475_min',   

                'pre_ah_home_45_min', 
                'pre_ah_away_45_min',  

                'pre_ah_home_425_min', 
                'pre_ah_away_425_min',  

                'pre_ah_home_4_min', 
                'pre_ah_away_4_min',  

                'pre_ah_home_375_min', 
                'pre_ah_away_375_min',  

                'pre_ah_home_35_min', 
                'pre_ah_away_35_min',  

                'pre_ah_home_325_min', 
                'pre_ah_away_325_min',  

                'pre_ah_home_3_min', 
                'pre_ah_away_3_min',  

                'pre_ah_home_275_min', 
                'pre_ah_away_275_min',  

                'pre_ah_home_25_min', 
                'pre_ah_away_25_min',  

                'pre_ah_home_225_min', 
                'pre_ah_away_225_min',  

                'pre_ah_home_2_min', 
                'pre_ah_away_2_min',  

                'pre_ah_home_175_min', 
                'pre_ah_away_175_min',  

                'pre_ah_home_15_min', 
                'pre_ah_away_15_min',  

                'pre_ah_home_125_min', 
                'pre_ah_away_125_min',  

                'pre_ah_home_1_min', 
                'pre_ah_away_1_min',  

                'pre_ah_home_075_min', 
                'pre_ah_away_075_min',  

                'pre_ah_home_05_min', 
                'pre_ah_away_05_min',  

                'pre_ah_home_025_min', 
                'pre_ah_away_025_min',  

                'pre_ah_home_0', //-----------------------------0
                'pre_ah_away_0',  

                'pre_ah_home_025', 
                'pre_ah_away_025',  

                'pre_ah_home_05', 
                'pre_ah_away_05',  

                'pre_ah_home_075', 
                'pre_ah_away_075',  

                'pre_ah_home_1', 
                'pre_ah_away_1',  

                'pre_ah_home_125', 
                'pre_ah_away_125',  

                'pre_ah_home_15', 
                'pre_ah_away_15',  

                'pre_ah_home_175', 
                'pre_ah_away_175',  

                'pre_ah_home_2', 
                'pre_ah_away_2',  

                'pre_ah_home_225', 
                'pre_ah_away_225',  

                'pre_ah_home_25', 
                'pre_ah_away_25',  

                'pre_ah_home_275', 
                'pre_ah_away_275',  

                'pre_ah_home_3', 
                'pre_ah_away_3',  

                'pre_ah_home_325', 
                'pre_ah_away_325',  

                'pre_ah_home_35', 
                'pre_ah_away_35',  

                'pre_ah_home_375', 
                'pre_ah_away_375',  

                'pre_ah_home_4', 
                'pre_ah_away_4',  
                'pre_ah_home_425', 
                'pre_ah_away_425',  

                'pre_ah_home_45', 
                'pre_ah_away_45',  

                'pre_ah_home_475', 
                'pre_ah_away_475',  

                'pre_ah_home_5', 
                'pre_ah_away_5',  

                'pre_ah_home_525', 
                'pre_ah_away_525',  

                'pre_ah_home_55', 
                'pre_ah_away_55',  

                'pre_ah_home_575', 
                'pre_ah_away_575',  
            
            // 5 goals over under
                'pre_gou_over_05', 
                'pre_gou_under_05',  

                'pre_gou_over_075', 
                'pre_gou_under_075',    

                'pre_gou_over_1', 
                'pre_gou_under_1',   

                'pre_gou_over_125', 
                'pre_gou_under_125',  

                'pre_gou_over_15', 
                'pre_gou_under_15',    

                'pre_gou_over_175', 
                'pre_gou_under_175',  

                'pre_gou_over_2', 
                'pre_gou_under_2',    

                'pre_gou_over_225', 
                'pre_gou_under_225',  

                'pre_gou_over_25', 
                'pre_gou_under_25',   

                'pre_gou_over_275', 
                'pre_gou_under_275',    

                'pre_gou_over_3', 
                'pre_gou_under_3',  

                'pre_gou_over_325', 
                'pre_gou_under_325',   

                'pre_gou_over_35', 
                'pre_gou_under_35',   

                'pre_gou_over_375', 
                'pre_gou_under_375',      

                'pre_gou_over_4', 
                'pre_gou_under_4',   

                'pre_gou_over_425', 
                'pre_gou_under_425',     

                'pre_gou_over_45', 
                'pre_gou_under_45',     

                'pre_gou_over_475', 
                'pre_gou_under_475',   

                'pre_gou_over_5', 
                'pre_gou_under_5',      

                'pre_gou_over_525', 
                'pre_gou_under_525',  

                'pre_gou_over_55', 
                'pre_gou_under_55',    

                'pre_gou_over_575', 
                'pre_gou_under_575',     

                'pre_gou_over_6', 
                'pre_gou_under_6',     

                'pre_gou_over_625', 
                'pre_gou_under_625',      

                'pre_gou_over_65', 
                'pre_gou_under_65',     

                'pre_gou_over_675', 
                'pre_gou_under_675',  

                'pre_gou_over_7', 
                'pre_gou_under_7',     

                'pre_gou_over_75', 
                'pre_gou_under_75',     

                'pre_gou_over_85', 
                'pre_gou_under_85',  

                'pre_gou_over_95', 
                'pre_gou_under_95',  

            // 6 first half goals
                'pre_fhg_over_05', 
                'pre_fhg_under_05',  

                'pre_fhg_over_075', 
                'pre_fhg_under_075',  

                'pre_fhg_over_1', 
                'pre_fhg_under_1',   

                'pre_fhg_over_125', 
                'pre_fhg_under_125',   

                'pre_fhg_over_15', 
                'pre_fhg_under_15',     

                'pre_fhg_over_175', 
                'pre_fhg_under_175',  

                'pre_fhg_over_2', 
                'pre_fhg_under_2',     

                'pre_fhg_over_225', 
                'pre_fhg_under_225',  

                'pre_fhg_over_25', 
                'pre_fhg_under_25',   

                'pre_fhg_over_275', 
                'pre_fhg_under_275',     

                'pre_fhg_over_3', 
                'pre_fhg_under_3',    

                'pre_fhg_over_325', 
                'pre_fhg_under_325',  

                'pre_fhg_over_35', 
                'pre_fhg_under_35',    

                'pre_fhg_over_375', 
                'pre_fhg_under_375',       

                'pre_fhg_over_45', 
                'pre_fhg_under_45',     

            // x second half goals
                'pre_shg_over_05', 
                'pre_shg_under_05',  

                'pre_shg_over_075', 
                'pre_shg_under_075',   

                'pre_shg_over_1', 
                'pre_shg_under_1',   

                'pre_shg_over_125', 
                'pre_shg_under_125',   

                'pre_shg_over_15', 
                'pre_shg_under_15',   

                'pre_shg_over_175', 
                'pre_shg_under_175',   

                'pre_shg_over_2', 
                'pre_shg_under_2',    

                'pre_shg_over_225', 
                'pre_shg_under_225',    

                'pre_shg_over_25', 
                'pre_shg_under_25',  

                'pre_shg_over_275', 
                'pre_shg_under_275',     

                'pre_shg_over_3', 
                'pre_shg_under_3',   

                'pre_shg_over_325', 
                'pre_shg_under_325',   

                'pre_shg_over_35', 
                'pre_shg_under_35',  

                'pre_shg_over_375', 
                'pre_shg_under_375',     

                'pre_shg_over_45', 
                'pre_shg_under_45',    
            
            // x clean sheet Home
                'pre_csh_yes',  
                'pre_csh_no',  

            // x clean sheet Away
                'pre_csa_yes',  
                'pre_csa_no',  

            // x double change
                'pre_dc_home_draw',  
                'pre_dc_home_away',   
                'pre_dc_away_draw',   

            // 8 btts
                'pre_btts_yes',  
                'pre_btts_no',  

            // 49 total goals btts
                'pre_over_25_btts_yes',  
                'pre_over_25_btts_no',   
                'pre_under_25_btts_yes',   
                'pre_under_25_btts_no',  

            // 24 result btts
                'pre_home_btts_yes',  
                'pre_home_btts_no',  
                'pre_draw_btts_yes',  
                'pre_draw_btts_no',  
                'pre_away_btts_yes',  
                'pre_away_btts_no',  

            // 25 result_total_goals
                'pre_home_over_25_odd',  
                'pre_home_over_35_odd', 

                'pre_home_under_25_odd', 
                'pre_home_under_35_odd',   
                        
                'pre_draw_over_25_odd', 
                'pre_draw_over_35_odd', 

                'pre_draw_under_25_odd', 
                'pre_draw_under_35_odd', 
                        
                'pre_away_over_25_odd', 
                'pre_away_over_35_odd', 

                'pre_away_under_25_odd', 
                'pre_away_under_35_odd', 

            // 36 win to nil
                'pre_home_win_to_nil_odd', 
                'pre_away_win_to_nil_odd', 

            // 39 win either half
                'pre_home_win_either_half_odd', 
                'pre_away_win_either_half_odd', 

            // 32 win both_halves
                'pre_home_win_both_halves_odd', 
                'pre_away_win_both_halves_odd', 

        //end
            // 1 match winner ----------------------------------------------------------------------------
                'end_mw_home_odd', 
                    'end_mw_home_odd_status', 

                'end_mw_draw_odd',
                    'end_mw_draw_odd_status', 

                'end_mw_away_odd',
                    'end_mw_away_odd_status',  

            // 4 asian handicap
                'end_ah_home_575_min', 
                'end_ah_away_575_min', 
                    'end_ah_home_575_min_status', 

                'end_ah_home_55_min', 
                'end_ah_away_55_min', 
                    'end_ah_home_55_min_status', 

                'end_ah_home_525_min', 
                'end_ah_away_525_min', 
                    'end_ah_home_525_min_status', 

                'end_ah_home_5_min', 
                'end_ah_away_5_min', 
                    'end_ah_home_5_min_status', 

                'end_ah_home_475_min', 
                'end_ah_away_475_min', 
                    'end_ah_home_475_min_status', 

                'end_ah_home_45_min', 
                'end_ah_away_45_min', 
                    'end_ah_home_45_min_status', 

                'end_ah_home_425_min', 
                'end_ah_away_425_min', 
                    'end_ah_home_425_min_status', 

                'end_ah_home_4_min', 
                'end_ah_away_4_min', 
                    'end_ah_home_4_min_status', 

                'end_ah_home_375_min', 
                'end_ah_away_375_min', 
                    'end_ah_home_375_min_status', 

                'end_ah_home_35_min', 
                'end_ah_away_35_min', 
                    'end_ah_home_35_min_status', 

                'end_ah_home_325_min', 
                'end_ah_away_325_min', 
                    'end_ah_home_325_min_status', 

                'end_ah_home_3_min', 
                'end_ah_away_3_min', 
                    'end_ah_home_3_min_status', 

                'end_ah_home_275_min', 
                'end_ah_away_275_min', 
                    'end_ah_home_275_min_status', 

                'end_ah_home_25_min', 
                'end_ah_away_25_min', 
                    'end_ah_home_25_min_status', 

                'end_ah_home_225_min', 
                'end_ah_away_225_min', 
                    'end_ah_home_225_min_status', 

                'end_ah_home_2_min', 
                'end_ah_away_2_min', 
                    'end_ah_home_2_min_status', 

                'end_ah_home_175_min', 
                'end_ah_away_175_min', 
                    'end_ah_home_175_min_status', 

                'end_ah_home_15_min', 
                'end_ah_away_15_min', 
                    'end_ah_home_15_min_status', 

                'end_ah_home_125_min', 
                'end_ah_away_125_min', 
                    'end_ah_home_125_min_status', 

                'end_ah_home_1_min', 
                'end_ah_away_1_min', 
                    'end_ah_home_1_min_status', 

                'end_ah_home_075_min', 
                'end_ah_away_075_min', 
                    'end_ah_home_075_min_status', 

                'end_ah_home_05_min', 
                'end_ah_away_05_min', 
                    'end_ah_home_05_min_status', 

                'end_ah_home_025_min', 
                'end_ah_away_025_min', 
                    'end_ah_home_025_min_status', 

                'end_ah_home_0', //-----------------------------0
                'end_ah_away_0', 
                    'end_ah_home_0_status', 

                'end_ah_home_025', 
                'end_ah_away_025', 
                    'end_ah_home_025_status', 

                'end_ah_home_05', 
                'end_ah_away_05', 
                    'end_ah_home_05_status', 

                'end_ah_home_075', 
                'end_ah_away_075', 
                    'end_ah_home_075_status', 

                'end_ah_home_1', 
                'end_ah_away_1', 
                    'end_ah_home_1_status', 

                'end_ah_home_125', 
                'end_ah_away_125', 
                    'end_ah_home_125_status',

                'end_ah_home_15', 
                'end_ah_away_15', 
                    'end_ah_home_15_status',  

                'end_ah_home_175', 
                'end_ah_away_175', 
                    'end_ah_home_175_status', 

                'end_ah_home_2', 
                'end_ah_away_2', 
                    'end_ah_home_2_status', 

                'end_ah_home_225', 
                'end_ah_away_225', 
                    'end_ah_home_225_status', 

                'end_ah_home_25', 
                'end_ah_away_25', 
                    'end_ah_home_25_status', 

                'end_ah_home_275', 
                'end_ah_away_275', 
                    'end_ah_home_275_status', 

                'end_ah_home_3', 
                'end_ah_away_3', 
                    'end_ah_home_3_status', 

                'end_ah_home_325', 
                'end_ah_away_325', 
                    'end_ah_home_325_status', 

                'end_ah_home_35', 
                'end_ah_away_35', 
                    'end_ah_home_35_status', 

                'end_ah_home_375', 
                'end_ah_away_375', 
                    'end_ah_home_375_status', 

                'end_ah_home_4', 
                'end_ah_away_4', 
                    'end_ah_home_4_status', 

                'end_ah_home_425', 
                'end_ah_away_425', 
                    'end_ah_home_425_status', 

                'end_ah_home_45', 
                'end_ah_away_45', 
                    'end_ah_home_45_status', 

                'end_ah_home_475', 
                'end_ah_away_475', 
                    'end_ah_home_475_status', 

                'end_ah_home_5', 
                'end_ah_away_5', 
                    'end_ah_home_5_status', 

                'end_ah_home_525', 
                'end_ah_away_525', 
                    'end_ah_home_525_status', 

                'end_ah_home_55', 
                'end_ah_away_55', 
                    'end_ah_home_55_status', 

                'end_ah_home_575', 
                'end_ah_away_575', 
                    'end_ah_home_575_status', 
            
            // 5 goals over under
                'end_gou_over_05', 
                'end_gou_under_05', 
                    'end_gou_over_05_status', 

                'end_gou_over_075', 
                'end_gou_under_075', 
                    'end_gou_over_075_status',  

                'end_gou_over_1', 
                'end_gou_under_1', 
                    'end_gou_over_1_status',   

                'end_gou_over_125', 
                'end_gou_under_125', 
                    'end_gou_over_125_status',  

                'end_gou_over_15', 
                'end_gou_under_15', 
                    'end_gou_over_15_status',   

                'end_gou_over_175', 
                'end_gou_under_175', 
                    'end_gou_over_175_status',  

                'end_gou_over_2', 
                'end_gou_under_2', 
                    'end_gou_over_2_status',    

                'end_gou_over_225', 
                'end_gou_under_225', 
                    'end_gou_over_225_status',  

                'end_gou_over_25', 
                'end_gou_under_25', 
                    'end_gou_over_25_status',   

                'end_gou_over_275', 
                'end_gou_under_275', 
                    'end_gou_over_275_status',    

                'end_gou_over_3', 
                'end_gou_under_3', 
                    'end_gou_over_3_status',    

                'end_gou_over_325', 
                'end_gou_under_325', 
                    'end_gou_over_325_status',  

                'end_gou_over_35', 
                'end_gou_under_35', 
                    'end_gou_over_35_status',   

                'end_gou_over_375', 
                'end_gou_under_375', 
                    'end_gou_over_375_status',      

                'end_gou_over_4', 
                'end_gou_under_4', 
                    'end_gou_over_4_status',   

                'end_gou_over_425', 
                'end_gou_under_425', 
                    'end_gou_over_425_status',     

                'end_gou_over_45', 
                'end_gou_under_45', 
                    'end_gou_over_45_status',     

                'end_gou_over_475', 
                'end_gou_under_475', 
                    'end_gou_over_475_status',   

                'end_gou_over_5', 
                'end_gou_under_5', 
                    'end_gou_over_5_status',     

                'end_gou_over_525', 
                'end_gou_under_525', 
                    'end_gou_over_525_status',     

                'end_gou_over_55', 
                'end_gou_under_55', 
                    'end_gou_over_55_status',     

                'end_gou_over_575', 
                'end_gou_under_575', 
                    'end_gou_over_575_status',    

                'end_gou_over_6', 
                'end_gou_under_6', 
                    'end_gou_over_6_status',     

                'end_gou_over_625', 
                'end_gou_under_625', 
                    'end_gou_over_625_status',     

                'end_gou_over_65', 
                'end_gou_under_65', 
                    'end_gou_over_65_status',     

                'end_gou_over_675', 
                'end_gou_under_675', 
                    'end_gou_over_675_status',  

                'end_gou_over_7', 
                'end_gou_under_7', 
                    'end_gou_over_7_status',   

                'end_gou_over_75', 
                'end_gou_under_75', 
                    'end_gou_over_75_status',   

                'end_gou_over_85', 
                'end_gou_under_85', 
                    'end_gou_over_85_status',  

                'end_gou_over_95', 
                'end_gou_under_95', 
                    'end_gou_over_95_status',

            // 6 first half goals
                'end_fhg_over_05', 
                'end_fhg_under_05', 
                    'end_fhg_over_05_status', 

                'end_fhg_over_075', 
                'end_fhg_under_075', 
                    'end_fhg_over_075_status',  

                'end_fhg_over_1', 
                'end_fhg_under_1', 
                    'end_fhg_over_1_status',   

                'end_fhg_over_125', 
                'end_fhg_under_125', 
                    'end_fhg_over_125_status',  

                'end_fhg_over_15', 
                'end_fhg_under_15', 
                    'end_fhg_over_15_status',   

                'end_fhg_over_175', 
                'end_fhg_under_175', 
                    'end_fhg_over_175_status',  

                'end_fhg_over_2', 
                'end_fhg_under_2', 
                    'end_fhg_over_2_status',    

                'end_fhg_over_225', 
                'end_fhg_under_225', 
                    'end_fhg_over_225_status',  

                'end_fhg_over_25', 
                'end_fhg_under_25', 
                    'end_fhg_over_25_status',   

                'end_fhg_over_275', 
                'end_fhg_under_275', 
                    'end_fhg_over_275_status',    

                'end_fhg_over_3', 
                'end_fhg_under_3', 
                    'end_fhg_over_3_status',    

                'end_fhg_over_325', 
                'end_fhg_under_325', 
                    'end_fhg_over_325_status',  

                'end_fhg_over_35', 
                'end_fhg_under_35', 
                    'end_fhg_over_35_status',   

                'end_fhg_over_375', 
                'end_fhg_under_375', 
                    'end_fhg_over_375_status',     

                'end_fhg_over_45', 
                'end_fhg_under_45', 
                    'end_fhg_over_45_status',    

            // x second half goals
                'end_shg_over_05', 
                'end_shg_under_05', 
                    'end_shg_over_05_status', 

                'end_shg_over_075', 
                'end_shg_under_075', 
                    'end_shg_over_075_status',  

                'end_shg_over_1', 
                'end_shg_under_1', 
                    'end_shg_over_1_status',   

                'end_shg_over_125', 
                'end_shg_under_125', 
                    'end_shg_over_125_status',  

                'end_shg_over_15', 
                'end_shg_under_15', 
                    'end_shg_over_15_status',   

                'end_shg_over_175', 
                'end_shg_under_175', 
                    'end_shg_over_175_status',  

                'end_shg_over_2', 
                'end_shg_under_2', 
                    'end_shg_over_2_status',    

                'end_shg_over_225', 
                'end_shg_under_225', 
                    'end_shg_over_225_status',  

                'end_shg_over_25', 
                'end_shg_under_25', 
                    'end_shg_over_25_status',   

                'end_shg_over_275', 
                'end_shg_under_275', 
                    'end_shg_over_275_status',    

                'end_shg_over_3', 
                'end_shg_under_3', 
                    'end_shg_over_3_status',    

                'end_shg_over_325', 
                'end_shg_under_325', 
                    'end_shg_over_325_status',  

                'end_shg_over_35', 
                'end_shg_under_35', 
                    'end_shg_over_35_status',   

                'end_shg_over_375', 
                'end_shg_under_375', 
                    'end_shg_over_375_status',     

                'end_shg_over_45', 
                'end_shg_under_45', 
                    'end_shg_over_45_status',    
            
            // x clean sheet Home ----------------------------------------------------------------------------
                'end_csh_yes', 
                    'end_csh_yes_status', 

                'end_csh_no', 
                    'end_csh_no_status', 

            // x clean sheet Away ----------------------------------------------------------------------------
                'end_csa_yes', 
                    'end_csa_yes_status', 

                'end_csa_no', 
                    'end_csa_no_status', 

            // x double change
                'end_dc_home_draw', 
                    'end_dc_home_draw_status', 

                'end_dc_home_away', 
                    'end_dc_home_away_status', 

                'end_dc_away_draw', 
                    'end_dc_away_draw_status', 

            // 8 btts ----------------------------------------------------------------------------
                'end_btts_yes', 
                    'end_btts_yes_status', 

                'end_btts_no', 
                    'end_btts_no_status', 

            // 49 total goals btts
                'end_over_25_btts_yes', 
                    'end_over_25_btts_yes_status', 

                'end_over_25_btts_no', 
                    'end_over_25_btts_no_status', 

                'end_under_25_btts_yes', 
                    'end_under_25_btts_yes_status', 

                'end_under_25_btts_no', 
                    'end_under_25_btts_no_status', 

            // 24 result btts ----------------------------------------------------------------------------
                'end_home_btts_yes', 
                    'end_home_btts_yes_status', 

                'end_home_btts_no', 
                    'end_home_btts_no_status', 

                'end_draw_btts_yes', 
                    'end_draw_btts_yes_status', 

                'end_draw_btts_no', 
                    'end_draw_btts_no_status', 

                'end_away_btts_yes', 
                    'end_away_btts_yes_status', 

                'end_away_btts_no', 
                    'end_away_btts_no_status', 

            // 25 result_total_goals ----------------------------------------------------------------------------
                'end_home_over_25_odd',
                'end_home_over_25_odd_status',

                'end_home_over_35_odd',
                'end_home_over_35_odd_status', 

                'end_home_under_25_odd',
                'end_home_under_25_odd_status',

                'end_home_under_35_odd',
                'end_home_under_35_odd_status',   
                        
                'end_draw_over_25_odd',
                'end_draw_over_25_odd_status',

                'end_draw_over_35_odd',
                'end_draw_over_35_odd_status', 

                'end_draw_under_25_odd',
                'end_draw_under_25_odd_status',

                'end_draw_under_35_odd',
                'end_draw_under_35_odd_status', 
                        
                'end_away_over_25_odd',
                'end_away_over_25_odd_status',

                'end_away_over_35_odd',
                'end_away_over_35_odd_status', 

                'end_away_under_25_odd',
                'end_away_under_25_odd_status',

                'end_away_under_35_odd',
                'end_away_under_35_odd_status', 

            // 36 win to nil ----------------------------------------------------------------------------
                'end_home_win_to_nil_odd',
                'end_home_win_to_nil_status',

                'end_away_win_to_nil_odd',
                'end_away_win_to_nil_odd_status',

            // 39 win either half ----------------------------------------------------------------------------
                'end_home_win_either_half_odd',
                'end_home_win_either_half_status',

                'end_away_win_either_half_odd',
                'end_away_win_either_half_odd_status',

            // 32 win both_halves ----------------------------------------------------------------------------
                'end_home_win_both_halves_odd',
                'end_home_win_both_halves_status',

                'end_away_win_both_halves_odd',
                'end_away_win_both_halves_odd_status',

        // total              

            'pre_ah_total_575_min',
            'pre_ah_total_55_min',
            'pre_ah_total_525_min',
            'pre_ah_total_5_min',

            'pre_ah_total_475_min',
            'pre_ah_total_45_min',
            'pre_ah_total_425_min',
            'pre_ah_total_4_min',

            'pre_ah_total_375_min',
            'pre_ah_total_35_min',
            'pre_ah_total_325_min',
            'pre_ah_total_3_min',

            'pre_ah_total_275_min',
            'pre_ah_total_25_min',
            'pre_ah_total_225_min',
            'pre_ah_total_2_min',

            'pre_ah_total_175_min',
            'pre_ah_total_15_min',
            'pre_ah_total_125_min',
            'pre_ah_total_1_min',

            'pre_ah_total_075_min',
            'pre_ah_total_05_min',
            'pre_ah_total_025_min',

            'pre_ah_total_0',

            'pre_ah_total_025',
            'pre_ah_total_05',
            'pre_ah_total_075',
             
            'pre_ah_total_1',
            'pre_ah_total_125',
            'pre_ah_total_15',
            'pre_ah_total_175',
             
            'pre_ah_total_2',
            'pre_ah_total_225',
            'pre_ah_total_25',
            'pre_ah_total_275',
             
            'pre_ah_total_3',
            'pre_ah_total_325',
            'pre_ah_total_35',
            'pre_ah_total_375',
             
            'pre_ah_total_4',
            'pre_ah_total_425',
            'pre_ah_total_45',
            'pre_ah_total_475',
             
            'pre_ah_total_5',
            'pre_ah_total_525',
            'pre_ah_total_55',
            'pre_ah_total_575',

        // gou total 
            'pre_gou_total_05',
            'pre_gou_total_075',

            'pre_gou_total_1',
            'pre_gou_total_125',
            'pre_gou_total_15',
            'pre_gou_total_175',

            'pre_gou_total_2',
            'pre_gou_total_225',
            'pre_gou_total_25',
            'pre_gou_total_275',

            'pre_gou_total_3',
            'pre_gou_total_325',
            'pre_gou_total_35',
            'pre_gou_total_375',

            'pre_gou_total_4',
            'pre_gou_total_425',
            'pre_gou_total_45',
            'pre_gou_total_475',

            'pre_gou_total_5',
            'pre_gou_total_525',
            'pre_gou_total_55',
            'pre_gou_total_575',

            'pre_gou_total_6',
            'pre_gou_total_625',
            'pre_gou_total_65',
            'pre_gou_total_675',

            'pre_gou_total_7',
            'pre_gou_total_75',
            'pre_gou_total_85',
            'pre_gou_total_95',
 
            'end_gou_total_05',
            'end_gou_total_075',

            'end_gou_total_1',
            'end_gou_total_125',
            'end_gou_total_15',
            'end_gou_total_175',

            'end_gou_total_2',
            'end_gou_total_225',
            'end_gou_total_25',
            'end_gou_total_275',

            'end_gou_total_3',
            'end_gou_total_325',
            'end_gou_total_35',
            'end_gou_total_375',

            'end_gou_total_4',
            'end_gou_total_425',
            'end_gou_total_45',
            'end_gou_total_475',

            'end_gou_total_5',
            'end_gou_total_525',
            'end_gou_total_55',
            'end_gou_total_575',

            'end_gou_total_6',
            'end_gou_total_625',
            'end_gou_total_65',
            'end_gou_total_675',

            'end_gou_total_7',
            'end_gou_total_75',
            'end_gou_total_85',
            'end_gou_total_95',
            'mybt'
    ]; 

    // public function league()
    // {
    //     return $this->belongsTo(League::class,'leagueapi_id', 'leagueapi_id');
    // }

    public function league()
    {
        return $this->belongsTo(League::class,'leagueapi_id', 'leagueapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
         
    }

    public function rapidapi_predictions()
    {
        return $this->belongsTo(Rapidapi_predictions::class,'fixtureapi_id', 'fixtureapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
         
    }

    public function tips()
    {
        return $this->hasMany(Tips::class,'fixtureapi_id', 'fixtureapi_id') ;
         
    }

    protected $hidden = ["deleted_at"];
}
