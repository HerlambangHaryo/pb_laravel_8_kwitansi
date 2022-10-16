<?php
    $total_data_rows             = count($data);
    $minus_total_rows       = 0;
    $total_goals            = $first->goals_home + $first->goals_away;

    $prend_match_winner_home = 0;
    $prend_match_winner_draw = 0;
    $prend_match_winner_away = 0;

    $prend_1x2_home = 0;
    $prend_1x2_draw = 0;
    $prend_1x2_away = 0;
    
    $prend_win_to_nill_home = 0;
    $prend_win_to_nill_away = 0;

    $btts_yes = 0;
    $btts_no = 0; 

    //////////////////////////////////////////////////

    
    $perc_match_winner_home = 0;
    $perc_match_winner_draw = 0;
    $perc_match_winner_away = 0;

    $perc_1x2_home = 0;
    $perc_1x2_draw = 0;
    $perc_1x2_away = 0;

    $perc_win_to_nill_home = 0;
    $perc_win_to_nill_away = 0;
 
 
    foreach ($data as $row) 
    {
        // echo $row->fixtureapi_id .'________'.$row->end_ah_pattern .'----------'. $first->pre_ah_pattern.' <br/>';

        if(!is_null($row->goals_home))
        { 
            // echo 'goal ada<br/>';

            if(!is_null($row->end_ah_pattern))
            {
                // echo 'ada end_ah_pattern<br/>';

                // noMirror
                    if($row->end_ah_pattern == $first->end_ah_pattern)
                    {         
                        // echo 'Pattern Sama <br/>';

                        // Match Winner   
                            if($row->goals_home > $row->goals_away)
                            {
                                $prend_match_winner_home += 1;
                            }
                            elseif($row->goals_home == $row->goals_away)
                            {
                                $prend_match_winner_draw += 1;
                            }
                            elseif($row->goals_home < $row->goals_away)
                            {
                                $prend_match_winner_away += 1;
                            }
                        
                        // 1x2 
                            if($row->goals_home >= $row->goals_away)
                            {
                                $prend_1x2_home += 1;
                            }
                            elseif($row->goals_home != $row->goals_away)
                            {
                                $prend_1x2_draw += 1;
                            }
                            elseif($row->goals_home <= $row->goals_away)
                            {
                                $prend_1x2_away += 1;
                            }
                        
                        // Win to Nill
                            if($row->goals_home > $row->goals_away && $row->goals_away == 0)
                            {
                                $prend_win_to_nill_home += 1;
                            }
                            elseif($row->goals_home < $row->goals_away && $row->goals_home == 0)
                            {
                                $prend_win_to_nill_away += 1;
                            }
                    }
                // Mirror
                    elseif($row->end_ah_pattern_mirror == $first->end_ah_pattern)
                    {        
                        // echo 'Pattern tidak Sama <br/>';
                        // Match Winner       
                            if($row->goals_home < $row->goals_away)
                            {
                                $prend_match_winner_home += 1;
                            }
                            elseif($row->goals_home == $row->goals_away)
                            {
                                $prend_match_winner_draw += 1;
                            }
                            elseif($row->goals_home > $row->goals_away)
                            {
                                $prend_match_winner_away += 1;
                            }
                        
                        // 1x2 
                            if($row->goals_home <= $row->goals_away)
                            {
                                $prend_1x2_home += 1;
                            }
                            elseif($row->goals_home != $row->goals_away)
                            {
                                $prend_1x2_draw += 1;
                            }
                            elseif($row->goals_home >= $row->goals_away)
                            {
                                $prend_1x2_away += 1;
                            }
                        
                        // Win to Nill
                            if($row->goals_home > $row->goals_away && $row->goals_away == 0)
                            {
                                $prend_win_to_nill_away += 1;
                            }
                            elseif($row->goals_home < $row->goals_away && $row->goals_home == 0)
                            {
                                $prend_win_to_nill_home += 1;
                            }
                    }

            }
            else
            {
                
                // echo 'tidak ada end_ah_pattern<br/>';

                // noMirror
                    if($row->end_ah_pattern == $first->end_ah_pattern)
                    {         
                        // echo 'Pattern Sama <br/>';
                        // Match Winner   
                            if($row->goals_home > $row->goals_away)
                            {
                                $prend_match_winner_home += 1;
                            }
                            elseif($row->goals_home == $row->goals_away)
                            {
                                $prend_match_winner_draw += 1;
                            }
                            elseif($row->goals_home < $row->goals_away)
                            {
                                $prend_match_winner_away += 1;
                            }
                        
                        // 1x2 
                            if($row->goals_home >= $row->goals_away)
                            {
                                $prend_1x2_home += 1;
                            }
                            elseif($row->goals_home != $row->goals_away)
                            {
                                $prend_1x2_draw += 1;
                            }
                            elseif($row->goals_home <= $row->goals_away)
                            {
                                $prend_1x2_away += 1;
                            }
 
                        // Win to Nill
                            if($row->goals_home > $row->goals_away && $row->goals_away == 0)
                            {
                                $prend_win_to_nill_home += 1;
                            }
                            elseif($row->goals_home < $row->goals_away && $row->goals_home == 0)
                            {
                                $prend_win_to_nill_away += 1;
                            } 
                    }
                // Mirror
                    elseif($row->end_ah_pattern_mirror == $first->end_ah_pattern)
                    {        
                        // echo 'Pattern tidak Sama <br/>';
                        // Match Winner       
                            if($row->goals_home < $row->goals_away)
                            {
                                $prend_match_winner_home += 1;
                            }
                            elseif($row->goals_home == $row->goals_away)
                            {
                                $prend_match_winner_draw += 1;
                            }
                            elseif($row->goals_home > $row->goals_away)
                            {
                                $prend_match_winner_away += 1;
                            }
                        
                        // 1x2 
                            if($row->goals_home <= $row->goals_away)
                            {
                                $prend_1x2_home += 1;
                            }
                            elseif($row->goals_home != $row->goals_away)
                            {
                                $prend_1x2_draw += 1;
                            }
                            elseif($row->goals_home >= $row->goals_away)
                            {
                                $prend_1x2_away += 1;
                            }
                        
                        // Win to Nill
                            if($row->goals_home > $row->goals_away && $row->goals_away == 0)
                            {
                                $prend_win_to_nill_away += 1;
                            }
                            elseif($row->goals_home < $row->goals_away && $row->goals_home == 0)
                            {
                                $prend_win_to_nill_home += 1;
                            }
                    }
            }


            // BTTS
                if($row->goals_home > 0 && $row->goals_away > 0)
                {
                    $btts_yes += 1;
                }
                else
                {
                    $btts_no += 1; 
                }
        }
        else
        {
            // echo 'tidak ada goal<br/>';
            $minus_total_rows += 1;
        }

        // echo '<br/>';
        // echo '<br/>';
    }

    $total_rows = $total_data_rows - $minus_total_rows;
    
    if($total_rows != 0)
    {
        $perc_match_winner_home = number_format( ($prend_match_winner_home / $total_rows * 100) , 2, ".", ",");
        $perc_match_winner_draw = number_format( ($prend_match_winner_draw / $total_rows * 100) , 2, ".", ",");
        $perc_match_winner_away = number_format( ($prend_match_winner_away / $total_rows * 100) , 2, ".", ",");

        $perc_1x2_home = number_format( ($prend_1x2_home / $total_rows * 100) , 2, ".", ",");
        $perc_1x2_draw = number_format( ($prend_1x2_draw / $total_rows * 100) , 2, ".", ",");
        $perc_1x2_away = number_format( ($prend_1x2_away / $total_rows * 100) , 2, ".", ",");

        $perc_win_to_nill_home = number_format( ($prend_win_to_nill_home / $total_rows * 100) , 2, ".", ","); 
        $perc_win_to_nill_away = number_format( ($prend_win_to_nill_away / $total_rows * 100) , 2, ".", ",");
    }
    
?>

<div class="row">
    <div class="col-6">
        <table width="90%">
            <tr>
                <td width="35%">                          
                </td>
                <td></td>
                <td>
                    %
                </td>
                <td>
                    Form
                </td>
                <td>
                    Att
                </td>
                <td>
                    Def
                </td>
                <td>
                    h2h
                </td>
                <td>
                    P.Goal
                </td>
                <td>
                    C.Goal
                </td>
                <td>
                    Pois
                </td>
            </tr>
            <tr>
                <td>
                    <img src="{{ $first->teams_home_logo }}" width="20px">
                    {!! $first->teams_home !!}
                    [{{ $first->teams_home_id }}]
                </td>
                <td>
                    :
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->prediction_percent_home }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_form_home }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_att_home }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_def_home }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_h2h_home }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->prediction_goals_home }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_goals_home }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_poisson_distribution_home }}
                </td>
            </tr>
            <tr>
                <td>  
                    <img src="{{ $first->teams_away_logo }}" width="20px">
                    {!! $first->teams_away !!}
                    [{{ $first->teams_away_id }}]
                </td>
                <td>
                    :
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->prediction_percent_away }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_form_away }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_att_away }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_def_away }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_h2h_away }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->prediction_goals_away }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_goals_away }}
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->comparison_poisson_distribution_away }}
                </td>
            </tr>
            <tr>
                <td>
                    Draw
                </td>
                <td>
                    :
                </td>
                <td>  
                    {{ $first->rapidapi_predictions->prediction_percent_draw }}
                </td>
            </tr>
        </table>  
    </div> 
    <div class="col-3">
        W : {{ $first->rapidapi_predictions->prediction_winner_name }}
        <br/>
        C : {{ $first->rapidapi_predictions->prediction_winner_comment }}
        <br/>
        OU :{{ $first->rapidapi_predictions->prediction_underover }}
        <br/>
        Adv :{{ $first->rapidapi_predictions->prediction_advice }}  
    </div> 
    <div class="col-3">
        <table>
            <tr>
                <td width="35%">
                    End Ah
                </td>
                <td>
                    :
                </td>
                <td>
                    {!! $first->end_ah_pattern !!}e
                </td>
            </tr>
            <tr>
                <td>
                    End Ah M 
                </td>
                <td>
                    :
                </td>
                <td>
                    {!! $first->end_ah_pattern_mirror !!}e
                </td>
            </tr>
            <tr>
                <td>
                    End Gou
                </td>
                <td>
                    :
                </td>
                <td>
                    {!! $first->end_gou_pattern !!}e
                </td>
            </tr>
        </table>  
    </div> 
</div>

<div class="row mb-3">
    <div class="col-6 text-end  mb-3"> 
        <img src="{{ $first->teams_home_logo }}" width="20px">
        {!! $first->teams_home !!} 
        
        {!! $first->goals_home !!} 
        <br/>
        {{ $first->score_halftime_home }}
        <br/>
        <?php
            $score_halftime_home = $first->score_halftime_home; 
            $score_secondtime_home = abs($first->score_halftime_home - $first->goals_home);
        ?>
        {{ $score_secondtime_home }}
    </div>
    <div class="col-6 mb-3"> 
        {!! $first->goals_away !!} 
        {!! $first->teams_away !!} 
        <img src="{{ $first->teams_away_logo }}" width="20px">
        <br/>
        {{ $first->score_halftime_away }}
        <br/>
        <?php
            $score_halftime_away = $first->score_halftime_away; 
            $score_secondtime_away = abs($first->score_halftime_away - $first->goals_away);
        ?>
        {{ $score_secondtime_away }}
    </div>

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"> 
                        Match Winner
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'mw',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_mw_home_odd  }}
                        <br/>
                        {{ $first->end_mw_home_odd  }}
                        
                        <?php 
                            if(!is_null($first->end_mw_home_odd) && !is_null($first->pre_mw_home_odd) )
                            {
                                $mw_home_odd = number_format( $first->end_mw_home_odd - $first->pre_mw_home_odd, 2,".",",");
                            }
                            else
                            {
                                $mw_home_odd = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home > $first->goals_away) 
                            <div class="mt-1
                                @if($first->goals_home > $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 
                    </div>
                    <div class="col">
                        {{ $first->pre_mw_draw_odd  }}
                        <br/>
                        {{ $first->end_mw_draw_odd  }}
                        
                        <?php 
                            if(!is_null($first->end_mw_draw_odd) && !is_null($first->pre_mw_draw_odd) )
                            {
                                $mw_draw_odd = number_format( $first->end_mw_draw_odd - $first->pre_mw_draw_odd, 2,".",",");
                            }
                            else
                            {
                                $mw_draw_odd = Null;
                            }
                        ?>
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home == $first->goals_away) 
                            <div class="mt-1
                                @if($first->goals_home == $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 

                    </div>
                    <div class="col">
                        {{ $first->pre_mw_away_odd  }}
                        <br/>
                        {{ $first->end_mw_away_odd  }} 

                        <?php 
                            if(!is_null($first->end_mw_away_odd) && !is_null($first->pre_mw_away_odd) )
                            {
                                $mw_away_odd = number_format( $first->end_mw_away_odd - $first->pre_mw_away_odd, 2,".",",");
                            }
                            else
                            {
                                $mw_away_odd = Null;
                            }
                        ?> 
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home < $first->goals_away) 
                            <div class="mt-1
                                @if($first->goals_home < $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 

                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $mw_home_odd }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $mw_draw_odd }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $mw_away_odd }} 
                        </small>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted"> 
                            {{ $perc_match_winner_home }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_draw }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_match_winner_away }} 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"> 
                        1x2
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => '1x2',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div> 
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_dc_home_draw  }}
                        <br/>
                        {{ $first->end_dc_home_draw  }} 

                        <?php 
                            if(!is_null($first->pre_dc_home_draw) && !is_null($first->end_dc_home_draw) )
                            {
                                $dc_home_draw  = number_format( $first->end_dc_home_draw - $first->pre_dc_home_draw, 2,".",",");
                            }
                            else
                            {
                                $dc_home_draw  = Null;
                            }
                        ?>
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home >= $first->goals_away) 
                            <div class="mt-1
                                @if($first->goals_home >= $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 

                    </div>
                    <div class="col">
                        {{ $first->pre_dc_home_away  }}
                        <br/>
                        {{ $first->end_dc_home_away  }}

                        <?php 
                            if(!is_null($first->end_dc_home_away) && !is_null($first->pre_dc_home_away) )
                            {
                                $dc_home_away  = number_format( $first->end_dc_home_away - $first->pre_dc_home_away, 2,".",",");
                            }
                            else
                            {
                                $dc_home_away  = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home != $first->goals_away ) 
                            <div class="mt-1
                                @if($first->goals_home != $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 

                    </div>
                    <div class="col">
                        {{ $first->pre_dc_away_draw  }}
                        <br/>
                        {{ $first->end_dc_away_draw  }} 

                        <?php 
                            if(!is_null($first->end_dc_away_draw) && !is_null($first->pre_dc_away_draw) )
                            {
                                $dc_away_draw  = number_format( $first->end_dc_away_draw - $first->pre_dc_away_draw, 2,".",",");
                            }
                            else
                            {
                                $dc_away_draw  = Null;
                            }
                        ?>
 
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home <= $first->goals_away) 
                            <div class="mt-1
                                @if($first->goals_home <= $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 

                    </div>
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $dc_home_draw  }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $dc_home_away }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $dc_away_draw }} 
                        </small>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_1x2_home }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_1x2_draw }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_1x2_away }} 
                        </small>   
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Win to Nill
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'wtn',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_win_to_nil_odd  }}
                        <br/>
                        {{ $first->end_home_win_to_nil_odd  }}

                        <?php 
                            if(!is_null($first->end_home_win_to_nil_odd) && !is_null($first->pre_home_win_to_nil_odd) )
                            {
                                $home_win_to_nil_odd  = number_format( $first->end_home_win_to_nil_odd - $first->pre_home_win_to_nil_odd, 2,".",",");
                            }
                            else
                            {
                                $home_win_to_nil_odd  = Null;
                            }
                        ?>
                    </div>
                    <div class="col">
                        {{ $first->pre_away_win_to_nil_odd  }}
                        <br/>
                        {{ $first->end_away_win_to_nil_odd  }} 

                        <?php 
                            if(!is_null($first->end_away_win_to_nil_odd) && !is_null($first->pre_away_win_to_nil_odd) )
                            {
                                $away_win_to_nil_odd  = number_format( $first->end_away_win_to_nil_odd - $first->pre_away_win_to_nil_odd, 2,".",",");
                            }
                            else
                            {
                                $away_win_to_nil_odd  = Null;
                            }
                        ?>
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $home_win_to_nil_odd }} 
                        </small>  
                    </div> 
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $away_win_to_nil_odd }} 
                        </small>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_win_to_nill_home }} 
                        </small>  
                    </div> 
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_win_to_nill_away }} 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Win Either Half
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'wee',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_win_either_half_odd  }}
                        <br/>
                        {{ $first->end_home_win_either_half_odd  }}
                        
                        <?php 
                            if(!is_null($first->end_home_win_either_half_odd) && !is_null($first->pre_home_win_either_half_odd) )
                            {
                                $home_win_either_half_odd  = number_format( $first->end_home_win_either_half_odd - $first->pre_home_win_either_half_odd, 2,".",",");
                            }
                            else
                            {
                                $home_win_either_half_odd  = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $score_halftime_home > $score_halftime_away) 
                            <div class="mt-1
                                @if($score_halftime_home > $score_halftime_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div>  
                        @elseif(!is_null($first->goals_home) && $score_secondtime_home > $score_secondtime_away) 
                            <div class="mt-1
                                @if($score_secondtime_home > $score_secondtime_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 
                    </div>
                    <div class="col">
                        {{ $first->pre_away_win_either_half_odd  }}
                        <br/>
                        {{ $first->end_away_win_either_half_odd  }} 
                        
                        <?php 
                            if(!is_null($first->end_away_win_either_half_odd) && !is_null($first->pre_away_win_either_half_odd) )
                            {
                                $away_win_either_half_odd  = number_format( $first->end_away_win_either_half_odd - $first->pre_away_win_either_half_odd, 2,".",",");
                            }
                            else
                            {
                                $away_win_either_half_odd  = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $score_halftime_home < $score_halftime_away) 
                            <div class="mt-1
                                @if($score_halftime_home < $score_halftime_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div>  
                        @elseif(!is_null($first->goals_home) && $score_secondtime_home < $score_secondtime_away) 
                            <div class="mt-1
                                @if($score_secondtime_home < $score_secondtime_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $home_win_either_half_odd }} 
                        </small>  
                    </div> 
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $away_win_either_half_odd }} 
                        </small>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_home }} 
                        </small>  
                    </div> 
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_match_winner_away }} 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        W. Both Halves
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'wbh',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_win_both_halves_odd  }}
                        <br/>
                        {{ $first->end_home_win_both_halves_odd  }}
                        
                        <?php 
                            if(!is_null($first->end_home_win_both_halves_odd) && !is_null($first->pre_home_win_both_halves_odd) )
                            {
                                $home_win_both_halves_odd  = number_format( $first->end_home_win_both_halves_odd - $first->pre_home_win_both_halves_odd, 2,".",",");
                            }
                            else
                            {
                                $home_win_both_halves_odd  = Null;
                            }
                        ?>
                    </div>
                    <div class="col">
                        {{ $first->pre_away_win_both_halves_odd  }}
                        <br/>
                        {{ $first->end_away_win_both_halves_odd  }} 

                        <?php 
                            if(!is_null($first->end_away_win_both_halves_odd) && !is_null($first->pre_away_win_both_halves_odd) )
                            {
                                $away_win_both_halves_odd  = number_format( $first->end_away_win_both_halves_odd - $first->pre_away_win_both_halves_odd, 2,".",",");
                            }
                            else
                            {
                                $away_win_both_halves_odd  = Null;
                            }
                        ?>
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $home_win_both_halves_odd }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $away_win_both_halves_odd }} 
                        </small>  
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_home }} 
                        </small>  
                    </div> 
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_match_winner_away }} 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
    </div> 

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"> 
                        BTTS
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'btts',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_btts_yes  }}
                        <br/>
                        {{ $first->end_btts_yes  }} 

                        <?php
                            $btts = 'no';

                            if($first->goals_home > 0 && $first->goals_away > 0 )
                            {
                                $btts = 'yes';
                            }
                        ?>
                        
                        <?php 
                            if(!is_null($first->end_btts_yes) && !is_null($first->pre_btts_yes) )
                            {
                                $btts_yes  = number_format( $first->end_btts_yes - $first->pre_btts_yes, 2,".",",");
                            }
                            else
                            {
                                $btts_yes  = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $btts == 'yes') 
                            <div class="mt-1
                                @if($btts == 'yes') 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 
                    </div>
                    <div class="col">
                        {{ $first->pre_btts_no  }}
                        <br/>
                        {{ $first->end_btts_no  }} 
                        
                        <?php 
                            if(!is_null($first->end_btts_no) && !is_null($first->pre_btts_no) )
                            {
                                $btts_no  = number_format( $first->end_btts_no - $first->pre_btts_no, 2,".",",");
                            }
                            else
                            {
                                $btts_no  = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $btts == 'no') 
                            <div class="mt-1
                                @if($btts == 'no') 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted"> 
                            {{ $btts_yes }}
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted"> 
                            {{ $btts_no }}
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Clean Sheet yes
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'csy',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_csh_yes  }}
                        <br/>
                        {{ $first->end_csh_yes  }}
                        
                        <?php 
                            if(!is_null($first->end_csh_yes) && !is_null($first->pre_csh_yes) )
                            {
                                $csh_yes  = number_format( $first->end_csh_yes - $first->pre_csh_yes, 2,".",",");
                            }
                            else
                            {
                                $csh_yes  = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_away == 0) 
                            <div class="mt-1
                                @if($first->goals_away == 0) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 
                    </div>
                    <div class="col">
                        {{ $first->pre_csa_yes  }}
                        <br/>
                        {{ $first->end_csa_yes  }} 
                        
                        <?php 
                            if(!is_null($first->end_csa_yes) && !is_null($first->pre_csa_yes) )
                            {
                                $csa_yes  = number_format( $first->end_csa_yes - $first->pre_csa_yes, 2,".",",");
                            }
                            else
                            {
                                $csa_yes  = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home == 0) 
                            <div class="mt-1
                                @if($first->goals_home == 0) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted"> 
                            {{ $csh_yes }}
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted"> 
                            {{ $csa_yes }}
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Clean Sheet no
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'csn',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_csh_no  }}
                        <br/>
                        {{ $first->end_csh_no  }}
                        
                        <?php 
                            if(!is_null($first->end_csh_no) && !is_null($first->pre_csh_no) )
                            {
                                $csh_no  = number_format( $first->end_csh_no - $first->pre_csh_no, 2,".",",");
                            }
                            else
                            {
                                $csh_no  = Null;
                            }
                        ?>

                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home > 0) 
                            <div class="mt-1
                                @if($first->goals_home > 0) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 
                    </div>
                    <div class="col">
                        {{ $first->pre_csa_no  }}
                        <br/>
                        {{ $first->end_csa_no  }} 
                        
                        <?php 
                            if(!is_null($first->end_csa_no) && !is_null($first->pre_csa_no) )
                            {
                                $csa_no  = number_format( $first->end_csa_no - $first->pre_csa_no, 2,".",",");
                            }
                            else
                            {
                                $csa_no  = Null;
                            }
                        ?>


                        @if(!is_null($first->goals_home) && $first->goals_away > 0) 
                            <div class="mt-1
                                @if($first->goals_away > 0) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif 
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted"> 
                            {{ $csh_no }}
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted"> 
                            {{ $csa_no }}
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
    </div> 

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Res / o2.5
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'ro2',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_over_25_odd  }}
                        <br/>
                        {{ $first->end_home_over_25_odd  }}

                        <?php 
                            if(!is_null($first->end_home_over_25_odd) && !is_null($first->pre_home_over_25_odd) )
                            {
                                $home_over_25_odd  = number_format( $first->end_home_over_25_odd - $first->pre_home_over_25_odd, 2,".",",");
                            }
                            else
                            {
                                $home_over_25_odd  = Null;
                            }
                        ?>
                    </div>
                    <div class="col">
                        {{ $first->pre_draw_over_25_odd  }}
                        <br/>
                        {{ $first->end_draw_over_25_odd  }}

                        <?php 
                            if(!is_null($first->end_draw_over_25_odd) && !is_null($first->pre_draw_over_25_odd) )
                            {
                                $draw_over_25_odd  = number_format( $first->end_draw_over_25_odd - $first->pre_draw_over_25_odd, 2,".",",");
                            }
                            else
                            {
                                $draw_over_25_odd  = Null;
                            }
                        ?>

                    </div>
                    <div class="col">
                        {{ $first->pre_away_over_25_odd  }}
                        <br/>
                        {{ $first->end_away_over_25_odd  }}
                        
                        <?php 
                            if(!is_null($first->end_away_over_25_odd) && !is_null($first->pre_away_over_25_odd) )
                            {
                                $away_over_25_odd  = number_format( $first->end_away_over_25_odd - $first->pre_away_over_25_odd, 2,".",",");
                            }
                            else
                            {
                                $away_over_25_odd  = Null;
                            }
                        ?>
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted"> 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted"> 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Res / u2.5
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'ru2',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_under_25_odd  }}
                        <br/>
                        {{ $first->end_home_under_25_odd  }}

                        <?php 
                            if(!is_null($first->end_home_under_25_odd) && !is_null($first->pre_home_under_25_odd) )
                            {
                                $home_under_25_odd  = number_format( $first->end_home_under_25_odd - $first->pre_home_under_25_odd, 2,".",",");
                            }
                            else
                            {
                                $home_under_25_odd  = Null;
                            }
                        ?>
                    </div>
                    <div class="col">
                        {{ $first->pre_draw_under_25_odd  }}
                        <br/>
                        {{ $first->end_draw_under_25_odd  }}

                        <?php 
                            if(!is_null($first->end_draw_under_25_odd) && !is_null($first->pre_draw_under_25_odd) )
                            {
                                $draw_under_25_odd  = number_format( $first->end_draw_under_25_odd - $first->pre_draw_under_25_odd, 2,".",",");
                            }
                            else
                            {
                                $draw_under_25_odd  = Null;
                            }
                        ?>

                    </div>
                    <div class="col">
                        {{ $first->pre_away_under_25_odd  }}
                        <br/>
                        {{ $first->end_away_under_25_odd  }} 

                        <?php 
                            if(!is_null($first->end_away_under_25_odd) && !is_null($first->pre_away_under_25_odd) )
                            {
                                $away_under_25_odd  = number_format( $first->end_away_under_25_odd - $first->pre_away_under_25_odd, 2,".",",");
                            }
                            else
                            {
                                $away_under_25_odd  = Null;
                            }
                        ?>
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $home_under_25_odd }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $draw_under_25_odd }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $away_under_25_odd }} 
                        </small>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_home }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_draw }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_match_winner_away }} 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Res / o3.5
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'ro3',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_over_35_odd  }}
                        <br/>
                        {{ $first->end_home_over_35_odd  }}

                        <?php 
                            if(!is_null($first->end_home_over_35_odd) && !is_null($first->pre_home_over_35_odd) )
                            {
                                $home_over_35_odd  = number_format( $first->end_home_over_35_odd - $first->pre_home_over_35_odd, 2,".",",");
                            }
                            else
                            {
                                $home_over_35_odd  = Null;
                            }
                        ?>
                    </div>
                    <div class="col">
                        {{ $first->pre_draw_over_35_odd  }}
                        <br/>
                        {{ $first->end_draw_over_35_odd  }}

                        <?php 
                            if(!is_null($first->end_draw_over_35_odd) && !is_null($first->pre_draw_over_35_odd) )
                            {
                                $draw_over_35_odd  = number_format( $first->end_draw_over_35_odd - $first->pre_draw_over_35_odd, 2,".",",");
                            }
                            else
                            {
                                $draw_over_35_odd  = Null;
                            }
                        ?>

                    </div>
                    <div class="col">
                        {{ $first->pre_away_over_35_odd  }}
                        <br/>
                        {{ $first->end_away_over_35_odd  }} 

                        <?php 
                            if(!is_null($first->end_away_over_35_odd) && !is_null($first->pre_away_over_35_odd) )
                            {
                                $away_over_35_odd  = number_format( $first->end_away_over_35_odd - $first->pre_away_over_35_odd, 2,".",",");
                            }
                            else
                            {
                                $away_over_35_odd  = Null;
                            }
                        ?>
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $mw_home_odd }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $mw_draw_odd }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $mw_away_odd }} 
                        </small>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_home }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_draw }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_match_winner_away }} 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Res / u3.5
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'ru3',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_under_35_odd  }}
                        <br/>
                        {{ $first->end_home_under_35_odd  }}

                        <?php 
                            if(!is_null($first->end_home_under_35_odd) && !is_null($first->pre_home_under_35_odd) )
                            {
                                $home_under_35_odd  = number_format( $first->end_home_under_35_odd - $first->pre_home_under_35_odd, 2,".",",");
                            }
                            else
                            {
                                $home_under_35_odd  = Null;
                            }
                        ?>
                        
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home > $first->goals_away && $btts == 'yes') 
                            <div class="mt-1
                                @if($first->goals_home > $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_draw_under_35_odd  }}
                        <br/>
                        {{ $first->end_draw_under_35_odd  }}

                        <?php 
                            if(!is_null($first->end_draw_under_35_odd) && !is_null($first->pre_draw_under_35_odd) )
                            {
                                $draw_under_35_odd  = number_format( $first->end_draw_under_35_odd - $first->pre_draw_under_35_odd, 2,".",",");
                            }
                            else
                            {
                                $draw_under_35_odd  = Null;
                            }
                        ?>

                        
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home == $first->goals_away && $btts == 'yes') 
                            <div class="mt-1
                                @if($first->goals_home == $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_away_under_35_odd  }}
                        <br/>
                        {{ $first->end_away_under_35_odd  }} 

                        <?php 
                            if(!is_null($first->end_away_under_35_odd) && !is_null($first->pre_away_under_35_odd) )
                            {
                                $away_under_35_odd  = number_format( $first->end_away_under_35_odd - $first->pre_away_under_35_odd, 2,".",",");
                            }
                            else
                            {
                                $away_under_35_odd  = Null;
                            }
                        ?>
                        
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home < $first->goals_away && $btts == 'yes') 
                            <div class="mt-1
                                @if($first->goals_home < $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $mw_home_odd }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $mw_draw_odd }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $mw_away_odd }} 
                        </small>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_home }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_draw }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_match_winner_away }} 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
    </div> 

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Res / BTTS yes
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'rby',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div> 
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_btts_yes  }}
                        <br/>
                        {{ $first->end_home_btts_yes  }}

                        
                        @if(!is_null($first->goals_home) && $first->goals_home > $first->goals_away && $btts == 'yes') 
                            <div class="mt-1
                                @if($first->goals_home > $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_draw_btts_yes  }}
                        <br/>
                        {{ $first->end_draw_btts_yes  }}

                        
                        @if(!is_null($first->goals_home) && $first->goals_home == $first->goals_away && $btts == 'yes') 
                            <div class="mt-1
                                @if($first->goals_home == $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div> 
                    <div class="col">
                        {{ $first->pre_away_btts_yes  }}
                        <br/>
                        {{ $first->end_away_btts_yes  }}

                        
                        @if(!is_null($first->goals_home) && $first->goals_home < $first->goals_away && $btts == 'yes') 
                            <div class="mt-1
                                @if($first->goals_home < $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div> 
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header"> 
                <div class="row">
                    <div class="col-9"> 
                        Res / BTTS no
                    </div>
                    <div class="col-3">
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'rbn',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div> 
                </div> 
            </div>
            <div class="card-body text-center">
                <div class="row">
                    <div class="col">
                        {{ $first->pre_home_btts_no  }}
                        <br/>
                        {{ $first->end_home_btts_no  }}

                        <?php 
                            if(!is_null($first->end_home_btts_no) && !is_null($first->pre_home_btts_no) )
                            {
                                $home_btts_no  = number_format( $first->end_home_btts_no - $first->pre_home_btts_no, 2,".",",");
                            }
                            else
                            {
                                $home_btts_no  = Null;
                            }
                        ?>
                        
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home > $first->goals_away && $btts == 'no') 
                            <div class="mt-1
                                @if($first->goals_home > $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_draw_btts_no  }}
                        <br/>
                        {{ $first->end_draw_btts_no  }}

                        <?php 
                            if(!is_null($first->end_draw_btts_no) && !is_null($first->pre_draw_btts_no) )
                            {
                                $draw_btts_no  = number_format( $first->end_draw_btts_no - $first->pre_draw_btts_no, 2,".",",");
                            }
                            else
                            {
                                $draw_btts_no  = Null;
                            }
                        ?>
                        
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home == $first->goals_away && $btts == 'no') 
                            <div class="mt-1
                                @if($first->goals_home == $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div> 
                    <div class="col">
                        {{ $first->pre_away_btts_no  }}
                        <br/>
                        {{ $first->end_away_btts_no  }}

                        <?php 
                            if(!is_null($first->end_away_btts_no) && !is_null($first->pre_away_btts_no) )
                            {
                                $away_btts_no  = number_format( $first->end_away_btts_no - $first->pre_away_btts_no, 2,".",",");
                            }
                            else
                            {
                                $away_btts_no  = Null;
                            }
                        ?>
                        
                        <br/>

                        @if(!is_null($first->goals_home) && $first->goals_home < $first->goals_away && $btts == 'no') 
                            <div class="mt-1
                                @if($first->goals_home < $first->goals_away) 
                                    bg-success 
                                @endif ">
                                win
                            </div> 
                        @endif
                    </div> 
                </div>
            </div>
            <div class="card-footer text-center">
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $home_btts_no }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $draw_btts_no }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $away_btts_no }} 
                        </small>   
                    </div> 
                </div>
                <div class="row">
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_home }} 
                        </small>  
                    </div>
                    <div class="col">
                        <small class="text-muted">
                            {{ $perc_match_winner_draw }} 
                        </small>  
                    </div>
                    <div class="col"> 
                        <small class="text-muted">
                            {{ $perc_match_winner_away }} 
                        </small>   
                    </div> 
                </div>
                
            </div>
        </div>
    </div> 

</div>

<div class="row mb-3">
    <div class="col-6 text-end  mb-3"> 
        <img src="{{ $first->teams_home_logo }}" width="20px">
        {!! $first->teams_home !!} 
        
        {!! $first->goals_home !!} 
        <br/>
        {{ $first->score_halftime_home }}
        <br/>
        <?php
            $score_halftime_home = $first->score_halftime_home; 
            $score_secondtime_home = abs($first->score_halftime_home - $first->goals_home);
        ?>
        {{ $score_secondtime_home }}
    </div>
    <div class="col-6 mb-3"> 
        {!! $first->goals_away !!} 
        {!! $first->teams_away !!} 
        <img src="{{ $first->teams_away_logo }}" width="20px">
        <br/>
        {{ $first->score_halftime_away }}
        <br/>
        <?php
            $score_halftime_away = $first->score_halftime_away; 
            $score_secondtime_away = abs($first->score_halftime_away - $first->goals_away);
        ?>
        {{ $score_secondtime_away }}
    </div>



    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    </div>
                    <div class="col">
                        Home
                    </div>
                    <div class="col">
                        Away
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2">
                    <div class="col">
                        -5.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_575_min  }}
                        <br/>
                        {{ $first->end_ah_home_575_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_575_min  }}
                        <br/>
                        {{ $first->end_ah_away_575_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -5.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_55_min  }}
                        <br/>
                        {{ $first->end_ah_home_55_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_55_min  }}
                        <br/>
                        {{ $first->end_ah_away_55_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -5.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_525_min  }}
                        <br/>
                        {{ $first->end_ah_home_525_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_525_min  }}
                        <br/>
                        {{ $first->end_ah_away_525_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_5_min  }}
                        <br/>
                        {{ $first->end_ah_home_5_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_5_min  }}
                        <br/>
                        {{ $first->end_ah_away_5_min  }} 
                    </div> 
                </div> 
                <div class="row mb-2">
                    <div class="col">
                        -4.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_475_min  }}
                        <br/>
                        {{ $first->end_ah_home_475_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_475_min  }}
                        <br/>
                        {{ $first->end_ah_away_475_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -4.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_45_min  }}
                        <br/>
                        {{ $first->end_ah_home_45_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_45_min  }}
                        <br/>
                        {{ $first->end_ah_away_45_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -4.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_425_min  }}
                        <br/>
                        {{ $first->end_ah_home_425_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_425_min  }}
                        <br/>
                        {{ $first->end_ah_away_425_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -4
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_4_min  }}
                        <br/>
                        {{ $first->end_ah_home_4_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_4_min  }}
                        <br/>
                        {{ $first->end_ah_away_4_min  }} 
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        AH
                    </div>
                    <div class="col">
                        Home
                    </div>
                    <div class="col">
                        Away
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2">
                    <div class="col">
                        -3.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_375_min  }}
                        <br/>
                        {{ $first->end_ah_home_375_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_375_min  }}
                        <br/>
                        {{ $first->end_ah_away_375_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -3.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_35_min  }}
                        <br/>
                        {{ $first->end_ah_home_35_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_35_min  }}
                        <br/>
                        {{ $first->end_ah_away_35_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -3.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_325_min  }}
                        <br/>
                        {{ $first->end_ah_home_325_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_325_min  }}
                        <br/>
                        {{ $first->end_ah_away_325_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -3
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_3_min  }}
                        <br/>
                        {{ $first->end_ah_home_3_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_3_min  }}
                        <br/>
                        {{ $first->end_ah_away_3_min  }} 
                    </div> 
                </div> 
                <div class="row mb-2">
                    <div class="col">
                        -2.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_275_min  }}
                        <br/>
                        {{ $first->end_ah_home_275_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_275_min  }}
                        <br/>
                        {{ $first->end_ah_away_275_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -2.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_25_min  }}
                        <br/>
                        {{ $first->end_ah_home_25_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_25_min  }}
                        <br/>
                        {{ $first->end_ah_away_25_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -2.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_225_min  }}
                        <br/>
                        {{ $first->end_ah_home_225_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_225_min  }}
                        <br/>
                        {{ $first->end_ah_away_225_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -2
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_2_min  }}
                        <br/>
                        {{ $first->end_ah_home_2_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_2_min  }}
                        <br/>
                        {{ $first->end_ah_away_2_min  }} 
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        AH
                    </div>
                    <div class="col">
                        Home
                    </div>
                    <div class="col">
                        Away
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2">
                    <div class="col">
                        -1.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_175_min  }}
                        <br/>
                        {{ $first->end_ah_home_175_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_175_min  }}
                        <br/>
                        {{ $first->end_ah_away_175_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -1.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_15_min  }}
                        <br/>
                        {{ $first->end_ah_home_15_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_15_min  }}
                        <br/>
                        {{ $first->end_ah_away_15_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -1.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_125_min  }}
                        <br/>
                        {{ $first->end_ah_home_125_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_125_min  }}
                        <br/>
                        {{ $first->end_ah_away_125_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -1
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_1_min  }}
                        <br/>
                        {{ $first->end_ah_home_1_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_1_min  }}
                        <br/>
                        {{ $first->end_ah_away_1_min  }} 
                    </div> 
                </div> 
                <div class="row mb-2">
                    <div class="col">
                        -0.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_075_min  }}
                        <br/>
                        {{ $first->end_ah_home_075_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_075_min  }}
                        <br/>
                        {{ $first->end_ah_away_075_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -0.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_05_min  }}
                        <br/>
                        {{ $first->end_ah_home_05_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_05_min  }}
                        <br/>
                        {{ $first->end_ah_away_05_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -0.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_025_min  }}
                        <br/>
                        {{ $first->end_ah_home_025_min  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_025_min  }}
                        <br/>
                        {{ $first->end_ah_away_025_min  }} 
                    </div> 
                </div>
                <div class="row mb-2">
                    <div class="col">
                        -0
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_0  }}
                        <br/>
                        {{ $first->end_ah_home_0  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_0  }}
                        <br/>
                        {{ $first->end_ah_away_0  }} 
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        AH
                    </div>
                    <div class="col">
                        Home
                    </div>
                    <div class="col">
                        Away
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_175) && $first->pre_ah_home_175 + $first->pre_ah_away_175 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_175) && $first->end_ah_home_175 + $first->end_ah_away_175 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        1.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_175  }}
                        <br/>
                        {{ $first->end_ah_home_175  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_175  }}
                        <br/>
                        {{ $first->end_ah_away_175  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_15) && $first->pre_ah_home_15 + $first->pre_ah_away_15 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_15) && $first->end_ah_home_15 + $first->end_ah_away_15 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        1.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_15  }}
                        <br/>
                        {{ $first->end_ah_home_15  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_15  }}
                        <br/>
                        {{ $first->end_ah_away_15  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_125) && $first->pre_ah_home_125 + $first->pre_ah_away_125 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_125) && $first->end_ah_home_125 + $first->end_ah_away_125 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        1.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_125  }}
                        <br/>
                        {{ $first->end_ah_home_125  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_125  }}
                        <br/>
                        {{ $first->end_ah_away_125  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_1) && $first->pre_ah_home_1 + $first->pre_ah_away_1 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_1) && $first->end_ah_home_1 + $first->end_ah_away_1 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        1
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_1  }}
                        <br/>
                        {{ $first->end_ah_home_1  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_1  }}
                        <br/>
                        {{ $first->end_ah_away_1  }} 
                    </div> 
                </div> 
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_075) && $first->pre_ah_home_075 + $first->pre_ah_away_075 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_075) && $first->end_ah_home_075 + $first->end_ah_away_075 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        0.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_075  }}
                        <br/>
                        {{ $first->end_ah_home_075  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_075  }}
                        <br/>
                        {{ $first->end_ah_away_075  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_05) && $first->pre_ah_home_05 + $first->pre_ah_away_05 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_05) && $first->end_ah_home_05 + $first->end_ah_away_05 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        0.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_05  }}
                        <br/>
                        {{ $first->end_ah_home_05  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_05  }}
                        <br/>
                        {{ $first->end_ah_away_05  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_025) && $first->pre_ah_home_025 + $first->pre_ah_away_025 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_025) && $first->end_ah_home_025 + $first->end_ah_away_025 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        0.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_025  }}
                        <br/>
                        {{ $first->end_ah_home_025  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_025  }}
                        <br/>
                        {{ $first->end_ah_away_025  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_0) && $first->pre_ah_home_0 + $first->pre_ah_away_0 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_0) && $first->end_ah_home_0 + $first->end_ah_away_0 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        0
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_0  }}
                        <br/>
                        {{ $first->end_ah_home_0  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_0  }}
                        <br/>
                        {{ $first->end_ah_away_0  }} 
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        AH
                    </div>
                    <div class="col">
                        Home
                    </div>
                    <div class="col">
                        Away
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_375) && $first->pre_ah_home_375 + $first->pre_ah_away_375 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_375) && $first->end_ah_home_375 + $first->end_ah_away_375 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        3.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_375  }}
                        <br/>
                        {{ $first->end_ah_home_375  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_375  }}
                        <br/>
                        {{ $first->end_ah_away_375  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_35) && $first->pre_ah_home_35 + $first->pre_ah_away_35 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_35) && $first->end_ah_home_35 + $first->end_ah_away_35 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        3.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_35  }}
                        <br/>
                        {{ $first->end_ah_home_35  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_35  }}
                        <br/>
                        {{ $first->end_ah_away_35  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_325) && $first->pre_ah_home_325 + $first->pre_ah_away_325 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_325) && $first->end_ah_home_325 + $first->end_ah_away_325 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        3.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_325  }}
                        <br/>
                        {{ $first->end_ah_home_325  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_325  }}
                        <br/>
                        {{ $first->end_ah_away_325  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_3) && $first->pre_ah_home_3 + $first->pre_ah_away_3 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_3) && $first->end_ah_home_3 + $first->end_ah_away_3 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        3
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_3  }}
                        <br/>
                        {{ $first->end_ah_home_3  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_3  }}
                        <br/>
                        {{ $first->end_ah_away_3  }} 
                    </div> 
                </div> 
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_275) && $first->pre_ah_home_275 + $first->pre_ah_away_275 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_275) && $first->end_ah_home_275 + $first->end_ah_away_275 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        2.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_275  }}
                        <br/>
                        {{ $first->end_ah_home_275  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_275  }}
                        <br/>
                        {{ $first->end_ah_away_275  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_25) && $first->pre_ah_home_25 + $first->pre_ah_away_25 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_25) && $first->end_ah_home_25 + $first->end_ah_away_25 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        2.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_25  }}
                        <br/>
                        {{ $first->end_ah_home_25  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_25  }}
                        <br/>
                        {{ $first->end_ah_away_25  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_225) && $first->pre_ah_home_225 + $first->pre_ah_away_225 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_225) && $first->end_ah_home_225 + $first->end_ah_away_225 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        2.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_225  }}
                        <br/>
                        {{ $first->end_ah_home_225  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_225  }}
                        <br/>
                        {{ $first->end_ah_away_225  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_2) && $first->pre_ah_home_2 + $first->pre_ah_away_2 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_2) && $first->end_ah_home_2 + $first->end_ah_away_2 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        2
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_2  }}
                        <br/>
                        {{ $first->end_ah_home_2  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_2  }}
                        <br/>
                        {{ $first->end_ah_away_2  }} 
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        AH
                    </div>
                    <div class="col">
                        Home
                    </div>
                    <div class="col">
                        Away
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_575) && $first->pre_ah_home_575 + $first->pre_ah_away_575 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_575) && $first->end_ah_home_575 + $first->end_ah_away_575 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        5.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_575  }}
                        <br/>
                        {{ $first->end_ah_home_575  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_575  }}
                        <br/>
                        {{ $first->end_ah_away_575  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_55) && $first->pre_ah_home_55 + $first->pre_ah_away_55 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_55) && $first->end_ah_home_55 + $first->end_ah_away_55 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        5.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_55  }}
                        <br/>
                        {{ $first->end_ah_home_55  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_55  }}
                        <br/>
                        {{ $first->end_ah_away_55  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_525) && $first->pre_ah_home_525 + $first->pre_ah_away_525 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_525) && $first->end_ah_home_525 + $first->end_ah_away_525 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        5.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_525  }}
                        <br/>
                        {{ $first->end_ah_home_525  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_525  }}
                        <br/>
                        {{ $first->end_ah_away_525  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_5) && $first->pre_ah_home_5 + $first->pre_ah_away_5 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_5) && $first->end_ah_home_5 + $first->end_ah_away_5 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_5  }}
                        <br/>
                        {{ $first->end_ah_home_5  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_5  }}
                        <br/>
                        {{ $first->end_ah_away_5  }} 
                    </div> 
                </div> 
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_475) && $first->pre_ah_home_475 + $first->pre_ah_away_475 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_475) && $first->end_ah_home_475 + $first->end_ah_away_475 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        4.75
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_475  }}
                        <br/>
                        {{ $first->end_ah_home_475  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_475  }}
                        <br/>
                        {{ $first->end_ah_away_475  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_45) && $first->pre_ah_home_45 + $first->pre_ah_away_45 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_45) && $first->end_ah_home_45 + $first->end_ah_away_45 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        4.5
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_45  }}
                        <br/>
                        {{ $first->end_ah_home_45  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_45  }}
                        <br/>
                        {{ $first->end_ah_away_45  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_425) && $first->pre_ah_home_425 + $first->pre_ah_away_425 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_425) && $first->end_ah_home_425 + $first->end_ah_away_425 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        4.25
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_425  }}
                        <br/>
                        {{ $first->end_ah_home_425  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_425  }}
                        <br/>
                        {{ $first->end_ah_away_425  }} 
                    </div> 
                </div>
                <div class="row mb-2 
                    @if(!is_null($first->pre_ah_home_4) && $first->pre_ah_home_4 + $first->pre_ah_away_4 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_ah_home_4) && $first->end_ah_home_4 + $first->end_ah_away_4 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        4
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_home_4  }}
                        <br/>
                        {{ $first->end_ah_home_4  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_ah_away_4  }}
                        <br/>
                        {{ $first->end_ah_away_4  }} 
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-6 text-end  mb-3"> 
        <img src="{{ $first->teams_home_logo }}" width="20px">
        {!! $first->teams_home !!} 
        
        {!! $first->goals_home !!} 
    </div>
    <div class="col-6  mb-3"> 
        {!! $first->goals_away !!} 
        {!! $first->teams_away !!} 
        <img src="{{ $first->teams_away_logo }}" width="20px">
    </div>
    <div class="col-2">
        
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        
                        <a href="{{ route('Compare.pattern', 
                                [
                                    'fixtureapi_id' => $first->fixtureapi_id, 
                                    'code'          => 'ou',   
                                ]
                            ) }}" 
                            class="btn btn-secondary btn-sm ">
                            <i class="far fa-copy fa-sm"></i>
                        </a>
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_05) && $first->pre_gou_over_05 + $first->pre_gou_under_05 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_05) && $first->end_gou_over_05 + $first->end_gou_under_05 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        05
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_05 > 1.65 && $first->pre_gou_over_05  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_05 > 2 && $first->pre_gou_over_05  < 2.2 )     
                            text-warning 
                        @endif   

                        @if( $first->end_gou_over_05 > 1.65 && $first->end_gou_over_05  < 1.8 )     
                            text-warning 
                        @endif    
                        @if( $first->end_gou_over_05 > 2 && $first->end_gou_over_05  < 2.2 )     
                            text-warning 
                        @endif   
                                                 
                        ">
                        {{ $first->pre_gou_over_05  }}
                        <br/>
                        {{ $first->end_gou_over_05  }}  
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_05 > 1.65 && $first->pre_gou_under_05  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_05 > 2 && $first->pre_gou_under_05  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_05 > 1.65 && $first->end_gou_under_05  < 1.8 )     
                            text-warning 
                        @endif             
                        @if( $first->end_gou_under_05 > 2 && $first->end_gou_under_05  < 2.2 )     
                            text-warning 
                        @endif   
                                        
                        ">
                        {{ $first->pre_gou_under_05  }}
                        <br/>
                        {{ $first->end_gou_under_05  }} 
                    </div> 
                </div>  

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_075) && $first->pre_gou_over_075 + $first->pre_gou_under_075 < 4) 
                        text-info 
                    @endif 
                    
                    @if(!is_null($first->end_gou_over_075) && $first->end_gou_over_075 + $first->end_gou_under_075 < 4) 
                        text-info 
                    @endif 
                        
                    ">
                    <div class="col">
                        075
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_075 > 1.65 && $first->pre_gou_over_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_075 > 2 && $first->pre_gou_over_075  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_075 > 1.65 && $first->end_gou_over_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_over_075 > 2 && $first->end_gou_over_075  < 2.2 )     
                            text-warning 
                        @endif   
                                                  
                        ">
                        {{ $first->pre_gou_over_075  }}
                        <br/>
                        {{ $first->end_gou_over_075  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_075 > 2 && $first->pre_gou_under_075  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_under_075 > 2 && $first->end_gou_under_075  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_under_075  }}
                        <br/>
                        {{ $first->end_gou_under_075  }} 
                    </div> 
                </div>  

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_1) && $first->pre_gou_over_1 + $first->pre_gou_under_1 < 4) 
                        text-info 
                    @endif 
                    
                    @if(!is_null($first->end_gou_over_1) && $first->end_gou_over_1 + $first->end_gou_under_1 < 4) 
                        text-info 
                    @endif 
                        
                    ">
                    <div class="col">
                        1
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_1 > 1.65 && $first->pre_gou_over_1  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_1 > 2 && $first->pre_gou_over_1  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_1 > 1.65 && $first->end_gou_over_1  < 1.8 )     
                            text-warning 
                        @endif    
                        @if( $first->end_gou_over_1 > 2 && $first->end_gou_over_1  < 2.2 )     
                            text-warning 
                        @endif   
                                                 
                        ">
                        {{ $first->pre_gou_over_1  }}
                        <br/>
                        {{ $first->end_gou_over_1  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_1 > 1.65 && $first->pre_gou_under_1  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_1 > 2 && $first->pre_gou_under_1  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_1 > 1.65 && $first->end_gou_under_1  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_under_1 > 2 && $first->end_gou_under_1  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_under_1  }}
                        <br/>
                        {{ $first->end_gou_under_1  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_125) && $first->pre_gou_over_125 + $first->pre_gou_under_125 < 4) 
                        text-info 
                    @endif 
                    
                    @if(!is_null($first->end_gou_over_125) && $first->end_gou_over_125 + $first->end_gou_under_125 < 4) 
                        text-info 
                    @endif 
                    ">
                    <div class="col">
                        125
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_125 > 1.65 && $first->pre_gou_over_125  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_125 > 2 && $first->pre_gou_over_125  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_125 > 1.65 && $first->end_gou_over_125  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_over_125 > 2 && $first->end_gou_over_125  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_over_125  }}
                        <br/>
                        {{ $first->end_gou_over_125  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_125 > 1.65 && $first->pre_gou_under_125  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_125 > 2 && $first->pre_gou_under_125  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_125 > 1.65 && $first->end_gou_under_125  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_under_125 > 2 && $first->end_gou_under_125  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_under_125  }}
                        <br/>
                        {{ $first->end_gou_under_125  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                        @if(!is_null($first->pre_gou_over_15) && $first->pre_gou_over_15 + $first->pre_gou_under_15 < 4) 
                            text-info 
                        @endif 
                        
                        @if(!is_null($first->end_gou_over_15) && $first->end_gou_over_15 + $first->end_gou_under_15 < 4) 
                            text-info 
                        @endif 
                        
                    ">
                    <div class="col">
                        15
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_15 > 1.65 && $first->pre_gou_over_15  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_15 > 2 && $first->pre_gou_over_15  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_15 > 1.65 && $first->end_gou_over_15  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_over_15 > 2 && $first->end_gou_over_15  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_over_15  }}
                        <br/>
                        {{ $first->end_gou_over_15  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_15 > 1.65 && $first->pre_gou_under_15  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_15 > 2 && $first->pre_gou_under_15  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_15 > 1.65 && $first->end_gou_under_15  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_under_15 > 2 && $first->end_gou_under_15  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_under_15  }}
                        <br/>
                        {{ $first->end_gou_under_15  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_175) && $first->pre_gou_over_175 + $first->pre_gou_under_175 < 4) 
                        text-info 
                    @endif 
                    
                    @if(!is_null($first->end_gou_over_175) && $first->end_gou_over_175 + $first->end_gou_under_175 < 4) 
                        text-info 
                    @endif 
                        
                    ">
                    <div class="col">
                        175
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_175 > 1.65 && $first->pre_gou_over_175  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_175 > 2 && $first->pre_gou_over_175  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_175 > 1.65 && $first->end_gou_over_175  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_over_175 > 2 && $first->end_gou_over_175  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_over_175  }}
                        <br/>
                        {{ $first->end_gou_over_175  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_175 > 1.65 && $first->pre_gou_under_175  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_175 > 2 && $first->pre_gou_under_175  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_175 > 1.65 && $first->end_gou_under_175  < 1.8 )     
                            text-warning 
                        @endif  
                        @if( $first->end_gou_under_175 > 2 && $first->end_gou_under_175  < 2.2 )     
                            text-warning 
                        @endif   
                                                   
                        ">
                        {{ $first->pre_gou_under_175  }}
                        <br/>
                        {{ $first->end_gou_under_175  }} 
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_2) && $first->pre_gou_over_2 + $first->pre_gou_under_2 < 4) 
                        text-info 
                    @endif 
                    
                    @if(!is_null($first->end_gou_over_2) && $first->end_gou_over_2 + $first->end_gou_under_2 < 4) 
                        text-info 
                    @endif 
                        
                    ">
                    <div class="col">
                        2
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_2 > 1.65 && $first->pre_gou_over_2  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_2 > 2 && $first->pre_gou_over_2  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_2 > 1.65 && $first->end_gou_over_2  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_over_2 > 2 && $first->end_gou_over_2  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_over_2  }}
                        <br/>
                        {{ $first->end_gou_over_2  }} 

                        @if(!is_null($first->pre_gou_over_2) && $first->pre_gou_over_2 + $first->pre_gou_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_2) && $first->end_gou_over_2 + $first->end_gou_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_2 > 1.65 && $first->pre_gou_under_2  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_2 > 2 && $first->pre_gou_under_2  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_2 > 1.65 && $first->end_gou_under_2  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_under_2 > 2 && $first->end_gou_under_2  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_under_2  }}
                        <br/>
                        {{ $first->end_gou_under_2  }} 

                        @if(!is_null($first->pre_gou_over_2) && $first->pre_gou_over_2 + $first->pre_gou_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_2) && $first->end_gou_over_2 + $first->end_gou_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_225) && $first->pre_gou_over_225 + $first->pre_gou_under_225 < 4) 
                        text-info 
                    @endif 
                    
                    @if(!is_null($first->end_gou_over_225) && $first->end_gou_over_225 + $first->end_gou_under_225 < 4) 
                        text-info 
                    @endif  
                        
                    ">
                    <div class="col">
                        225
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_225 > 1.65 && $first->pre_gou_over_225  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_225 > 2 && $first->pre_gou_over_225  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_225 > 1.65 && $first->end_gou_over_225  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_over_225 > 2 && $first->end_gou_over_225  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_over_225  }}
                        <br/>
                        {{ $first->end_gou_over_225  }} 

                        @if(!is_null($first->pre_gou_over_225) && $first->pre_gou_over_225 + $first->pre_gou_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_225) && $first->end_gou_over_225 + $first->end_gou_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_225 > 1.65 && $first->pre_gou_under_225  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_225 > 2 && $first->pre_gou_under_225  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_225 > 1.65 && $first->end_gou_under_225  < 1.8 )     
                            text-warning 
                        @endif    
                        @if( $first->end_gou_under_225 > 2 && $first->end_gou_under_225  < 2.2 )     
                            text-warning 
                        @endif   
                                                 
                        ">
                        {{ $first->pre_gou_under_225  }}
                        <br/>
                        {{ $first->end_gou_under_225  }} 

                        @if(!is_null($first->pre_gou_over_225) && $first->pre_gou_over_225 + $first->pre_gou_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 1.85 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_225) && $first->end_gou_over_225 + $first->end_gou_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 1.85 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_25) && $first->pre_gou_over_25 + $first->pre_gou_under_25 < 4) 
                        text-info 
                    @endif 
                    @if(!is_null($first->end_gou_over_25) && $first->end_gou_over_25 + $first->end_gou_under_25 < 4) 
                        text-info 
                    @endif 
                    ">
                    <div class="col">
                        25
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_25 > 1.65 && $first->pre_gou_over_25  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_25 > 2 && $first->pre_gou_over_25  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_25 > 1.65 && $first->end_gou_over_25  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_over_25 > 2 && $first->end_gou_over_25  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_over_25  }}
                        <br/>
                        {{ $first->end_gou_over_25  }} 

                        @if(!is_null($first->pre_gou_over_25) && $first->pre_gou_over_25 + $first->pre_gou_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_25) && $first->end_gou_over_25 + $first->end_gou_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_25 > 1.65 && $first->pre_gou_under_25  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_25 > 2 && $first->pre_gou_under_25  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_25 > 1.65 && $first->end_gou_under_25  < 1.8 )     
                            text-warning 
                        @endif       
                        @if( $first->end_gou_under_25 > 2 && $first->end_gou_under_25  < 2.2 )     
                            text-warning 
                        @endif   
                                              
                        ">
                        {{ $first->pre_gou_under_25  }}
                        <br/>
                        {{ $first->end_gou_under_25  }} 

                        @if(!is_null($first->pre_gou_over_25) && $first->pre_gou_over_25 + $first->pre_gou_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_25) && $first->end_gou_over_25 + $first->end_gou_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_275) && $first->pre_gou_over_275 + $first->pre_gou_under_275 < 4) 
                        text-info 
                    @endif 
                    
                    @if(!is_null($first->end_gou_over_275) && $first->end_gou_over_275 + $first->end_gou_under_275 < 4) 
                        text-info 
                    @endif 
                        
                    ">
                    <div class="col">
                        275
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_275 > 1.65 && $first->pre_gou_over_275  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_275 > 2 && $first->pre_gou_over_275  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_275 > 1.65 && $first->end_gou_over_275  < 1.8 )     
                            text-warning 
                        @endif       
                        @if( $first->end_gou_over_275 > 2 && $first->end_gou_over_275  < 2.2 )     
                            text-warning 
                        @endif   
                                              
                        ">
                        {{ $first->pre_gou_over_275  }}
                        <br/>
                        {{ $first->end_gou_over_275  }} 

                        @if(!is_null($first->pre_gou_over_275) && $first->pre_gou_over_275 + $first->pre_gou_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_275) && $first->end_gou_over_275 + $first->end_gou_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_275 > 1.65 && $first->pre_gou_under_275  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_275 > 2 && $first->pre_gou_under_275  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_275 > 1.65 && $first->end_gou_under_275  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_under_275 > 2 && $first->end_gou_under_275  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_under_275  }}
                        <br/>
                        {{ $first->end_gou_under_275  }} 

                        @if(!is_null($first->pre_gou_over_275) && $first->pre_gou_over_275 + $first->pre_gou_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_275) && $first->end_gou_over_275 + $first->end_gou_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2"> 
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_3) && $first->pre_gou_over_3 + $first->pre_gou_under_3 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_3) && $first->end_gou_over_3 + $first->end_gou_under_3 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        3
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_3 > 1.65 && $first->pre_gou_over_3  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_3 > 2 && $first->pre_gou_over_3  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_3 > 1.65 && $first->end_gou_over_3  < 1.8 )     
                            text-warning 
                        @endif        
                        @if( $first->end_gou_over_3 > 2 && $first->end_gou_over_3  < 2.2 )     
                            text-warning 
                        @endif   
                                             
                        ">
                        {{ $first->pre_gou_over_3  }}
                        <br/>
                        {{ $first->end_gou_over_3  }} 

                        @if(!is_null($first->pre_gou_over_3) && $first->pre_gou_over_3 + $first->pre_gou_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_3) && $first->end_gou_over_3 + $first->end_gou_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_3 > 1.65 && $first->pre_gou_under_3  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_3 > 2 && $first->pre_gou_under_3  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_3 > 1.65 && $first->end_gou_under_3  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_under_3 > 2 && $first->end_gou_under_3  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_under_3  }}
                        <br/>
                        {{ $first->end_gou_under_3  }} 

                        @if(!is_null($first->pre_gou_over_3) && $first->pre_gou_over_3 + $first->pre_gou_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_3) && $first->end_gou_over_3 + $first->end_gou_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_325) && $first->pre_gou_over_325 + $first->pre_gou_under_325 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_325) && $first->end_gou_over_325 + $first->end_gou_under_325 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        325
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_325 > 1.65 && $first->pre_gou_over_325  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_325 > 2 && $first->pre_gou_over_325  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_325 > 1.65 && $first->end_gou_over_325  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_over_325 > 2 && $first->end_gou_over_325  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_over_325  }}
                        <br/>
                        {{ $first->end_gou_over_325  }} 
 
                        @if(!is_null($first->pre_gou_over_325) && $first->pre_gou_over_325 + $first->pre_gou_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_325) && $first->end_gou_over_325 + $first->end_gou_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                         
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_325 > 1.65 && $first->pre_gou_under_325  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_325 > 2 && $first->pre_gou_under_325  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_325 > 1.65 && $first->end_gou_under_325  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_under_325 > 2 && $first->end_gou_under_325  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_under_325  }}
                        <br/>
                        {{ $first->end_gou_under_325  }} 

                        @if(!is_null($first->pre_gou_over_325) && $first->pre_gou_over_325 + $first->pre_gou_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_325) && $first->end_gou_over_325 + $first->end_gou_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_35) && $first->pre_gou_over_35 + $first->pre_gou_under_35 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_35) && $first->end_gou_over_35 + $first->end_gou_under_35 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        35
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_35 > 1.65 && $first->pre_gou_over_35  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_35 > 2 && $first->pre_gou_over_35  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_35 > 1.65 && $first->end_gou_over_35  < 1.8 )     
                            text-warning 
                        @endif     
                        @if( $first->end_gou_over_35 > 2 && $first->end_gou_over_35  < 2.2 )     
                            text-warning 
                        @endif   
                                                
                        ">
                        {{ $first->pre_gou_over_35  }}
                        <br/>
                        {{ $first->end_gou_over_35  }} 

                        @if(!is_null($first->pre_gou_over_35) && $first->pre_gou_over_35 + $first->pre_gou_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_35) && $first->end_gou_over_35 + $first->end_gou_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_35 > 1.65 && $first->pre_gou_under_35  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_35 > 2 && $first->pre_gou_under_35  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_35 > 1.65 && $first->end_gou_under_35  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_under_35 > 2 && $first->end_gou_under_35  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_under_35  }}
                        <br/>
                        {{ $first->end_gou_under_35  }}  

                        @if(!is_null($first->pre_gou_over_35) && $first->pre_gou_over_35 + $first->pre_gou_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_35) && $first->end_gou_over_35 + $first->end_gou_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_375) && $first->pre_gou_over_375 + $first->pre_gou_under_375 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_375) && $first->end_gou_over_375 + $first->end_gou_under_375 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        375
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_375 > 1.65 && $first->pre_gou_over_375  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_375 > 2 && $first->pre_gou_over_375  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_375 > 1.65 && $first->end_gou_over_375  < 1.8 )     
                            text-warning 
                        @endif       
                        @if( $first->end_gou_over_375 > 2 && $first->end_gou_over_375  < 2.2 )     
                            text-warning 
                        @endif   
                                              
                        ">
                        {{ $first->pre_gou_over_375  }}
                        <br/>
                        {{ $first->end_gou_over_375  }} 

                        @if(!is_null($first->pre_gou_over_375) && $first->pre_gou_over_375 + $first->pre_gou_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_375) && $first->end_gou_over_375 + $first->end_gou_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_375 > 1.65 && $first->pre_gou_under_375  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_375 > 2 && $first->pre_gou_under_375  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_375 > 1.65 && $first->end_gou_under_375  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_under_375 > 2 && $first->end_gou_under_375  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_under_375  }}
                        <br/>
                        {{ $first->end_gou_under_375  }} 

                        @if(!is_null($first->pre_gou_over_375) && $first->pre_gou_over_375 + $first->pre_gou_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_375) && $first->end_gou_over_375 + $first->end_gou_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_4) && $first->pre_gou_over_4 + $first->pre_gou_under_4 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_4) && $first->end_gou_over_4 + $first->end_gou_under_4 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        4
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_4 > 1.65 && $first->pre_gou_over_4  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_4 > 2 && $first->pre_gou_over_4  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_4 > 1.65 && $first->end_gou_over_4  < 1.8 )     
                            text-warning 
                        @endif         
                        @if( $first->end_gou_over_4 > 2 && $first->end_gou_over_4  < 2.2 )     
                            text-warning 
                        @endif   
                                            
                        ">
                        {{ $first->pre_gou_over_4  }}
                        <br/>
                        {{ $first->end_gou_over_4  }} 

                        @if(!is_null($first->pre_gou_over_4) && $first->pre_gou_over_4 + $first->pre_gou_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_4) && $first->end_gou_over_4 + $first->end_gou_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_4 > 1.65 && $first->pre_gou_under_4  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_4 > 2 && $first->pre_gou_under_4  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_4 > 1.65 && $first->end_gou_under_4  < 1.8 )     
                            text-warning 
                        @endif       
                        @if( $first->end_gou_under_4 > 2 && $first->end_gou_under_4  < 2.2 )     
                            text-warning 
                        @endif   
                                              
                        ">
                        {{ $first->pre_gou_under_4  }}
                        <br/>
                        {{ $first->end_gou_under_4  }} 

                        @if(!is_null($first->pre_gou_over_4) && $first->pre_gou_over_4 + $first->pre_gou_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_4) && $first->end_gou_over_4 + $first->end_gou_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_425) && $first->pre_gou_over_425 + $first->pre_gou_under_425 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_425) && $first->end_gou_over_425 + $first->end_gou_under_425 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        425
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_425 > 1.65 && $first->pre_gou_over_425  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_over_425 > 2 && $first->pre_gou_over_425  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_over_425 > 1.65 && $first->end_gou_over_425  < 1.8 )     
                            text-warning 
                        @endif    
                        @if( $first->end_gou_over_425 > 2 && $first->end_gou_over_425  < 2.2 )     
                            text-warning 
                        @endif   
                                                 
                        ">
                        {{ $first->pre_gou_over_425  }}
                        <br/>
                        {{ $first->end_gou_over_425  }} 

                        @if(!is_null($first->pre_gou_over_425) && $first->pre_gou_over_425 + $first->pre_gou_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_425) && $first->end_gou_over_425 + $first->end_gou_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_425 > 1.65 && $first->pre_gou_under_425  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->pre_gou_under_425 > 2 && $first->pre_gou_under_425  < 2.2 )     
                            text-warning 
                        @endif   
                        
                        @if( $first->end_gou_under_425 > 1.65 && $first->end_gou_under_425  < 1.8 )     
                            text-warning 
                        @endif      
                        @if( $first->end_gou_under_425 > 2 && $first->end_gou_under_425  < 2.2 )     
                            text-warning 
                        @endif   
                                               
                        ">
                        {{ $first->pre_gou_under_425  }}
                        <br/>
                        {{ $first->end_gou_under_425  }} 
                        
                        @if(!is_null($first->pre_gou_over_425) && $first->pre_gou_over_425 + $first->pre_gou_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_425) && $first->end_gou_over_425 + $first->end_gou_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_45) && $first->pre_gou_over_45 + $first->pre_gou_under_45 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_45) && $first->end_gou_over_45 + $first->end_gou_under_45 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        45
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_45 > 1.65 && $first->pre_gou_over_45  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_over_45 > 1.65 && $first->end_gou_over_45  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_45  }}
                        <br/>
                        {{ $first->end_gou_over_45  }} 
                        
                        @if(!is_null($first->pre_gou_over_45) && $first->pre_gou_over_45 + $first->pre_gou_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_45) && $first->end_gou_over_45 + $first->end_gou_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_45 > 1.65 && $first->pre_gou_under_45  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_45 > 1.65 && $first->end_gou_under_45  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_45  }}
                        <br/>
                        {{ $first->end_gou_under_45  }} 

                        @if(!is_null($first->pre_gou_over_45) && $first->pre_gou_over_45 + $first->pre_gou_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_45) && $first->end_gou_over_45 + $first->end_gou_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_475) && $first->pre_gou_over_475 + $first->pre_gou_under_475 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_475) && $first->end_gou_over_475 + $first->end_gou_under_475 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        475
                    </div>
                    <div class="col
                        @if( $first->pre_gou_over_475 > 1.65 && $first->pre_gou_over_475  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_over_475 > 1.65 && $first->end_gou_over_475  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_475  }}
                        <br/>
                        {{ $first->end_gou_over_475  }} 

                        @if(!is_null($first->pre_gou_over_475) && $first->pre_gou_over_475 + $first->pre_gou_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_475) && $first->end_gou_over_475 + $first->end_gou_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_475 > 1.65 && $first->pre_gou_under_475  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_475 > 1.65 && $first->end_gou_under_475  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_475  }}
                        <br/>
                        {{ $first->end_gou_under_475  }} 

                        @if(!is_null($first->pre_gou_over_475) && $first->pre_gou_over_475 + $first->pre_gou_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_gou_over_475) && $first->end_gou_over_475 + $first->end_gou_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div>

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_5) && $first->pre_gou_over_5 + $first->pre_gou_under_5 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_5) && $first->end_gou_over_5 + $first->end_gou_under_5 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        5
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_5  }}
                        <br/>
                        {{ $first->end_gou_over_5  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_5  }}
                        <br/>
                        {{ $first->end_gou_under_5  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_525) && $first->pre_gou_over_525 + $first->pre_gou_under_525 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_525) && $first->end_gou_over_525 + $first->end_gou_under_525 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        525
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_525  }}
                        <br/>
                        {{ $first->end_gou_over_525  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_525  }}
                        <br/>
                        {{ $first->end_gou_under_525  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_55) && $first->pre_gou_over_55 + $first->pre_gou_under_55 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_55) && $first->end_gou_over_55 + $first->end_gou_under_55 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        55
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_55  }}
                        <br/>
                        {{ $first->end_gou_over_55  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_55  }}
                        <br/>
                        {{ $first->end_gou_under_55  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_575) && $first->pre_gou_over_575 + $first->pre_gou_under_575 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_575) && $first->end_gou_over_575 + $first->end_gou_under_575 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        575
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_575  }}
                        <br/>
                        {{ $first->end_gou_over_575  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_575  }}
                        <br/>
                        {{ $first->end_gou_under_575  }} 
                    </div> 
                </div> 
            </div> 
        </div>
    </div>

    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_6) && $first->pre_gou_over_6 + $first->pre_gou_under_6 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_6) && $first->end_gou_over_6 + $first->end_gou_under_6 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        6
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_6  }}
                        <br/>
                        {{ $first->end_gou_over_6  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_6  }}
                        <br/>
                        {{ $first->end_gou_under_6  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_625) && $first->pre_gou_over_625 + $first->pre_gou_under_625 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_625) && $first->end_gou_over_625 + $first->end_gou_under_625 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        625
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_625  }}
                        <br/>
                        {{ $first->end_gou_over_625  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_625  }}
                        <br/>
                        {{ $first->end_gou_under_625  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_65) && $first->pre_gou_over_65 + $first->pre_gou_under_65 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_65) && $first->end_gou_over_65 + $first->end_gou_under_65 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        65
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_65  }}
                        <br/>
                        {{ $first->end_gou_over_65  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_65  }}
                        <br/>
                        {{ $first->end_gou_under_65  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_675) && $first->pre_gou_over_675 + $first->pre_gou_under_675 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_675) && $first->end_gou_over_675 + $first->end_gou_under_675 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        675
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_675  }}
                        <br/>
                        {{ $first->end_gou_over_675  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_675  }}
                        <br/>
                        {{ $first->end_gou_under_675  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_7) && $first->pre_gou_over_7 + $first->pre_gou_under_7 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_7) && $first->end_gou_over_7 + $first->end_gou_under_7 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        7
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_7  }}
                        <br/>
                        {{ $first->end_gou_over_7  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_7  }}
                        <br/>
                        {{ $first->end_gou_under_7  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_75) && $first->pre_gou_over_75 + $first->pre_gou_under_75 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_75) && $first->end_gou_over_75 + $first->end_gou_under_75 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        75
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_75  }}
                        <br/>
                        {{ $first->end_gou_over_75  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_75  }}
                        <br/>
                        {{ $first->end_gou_under_75  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_85) && $first->pre_gou_over_85 + $first->pre_gou_under_85 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_85) && $first->end_gou_over_85 + $first->end_gou_under_85 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        85
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_85  }}
                        <br/>
                        {{ $first->end_gou_over_85  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_85  }}
                        <br/>
                        {{ $first->end_gou_under_85  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_gou_over_95) && $first->pre_gou_over_95 + $first->pre_gou_under_95 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_gou_over_95) && $first->end_gou_over_95 + $first->end_gou_under_95 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        95
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_over_95  }}
                        <br/>
                        {{ $first->end_gou_over_95  }} 
                    </div>
                    <div class="col
                        @if( $first->pre_gou_under_075 > 1.65 && $first->pre_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif   
                        @if( $first->end_gou_under_075 > 1.65 && $first->end_gou_under_075  < 1.8 )     
                            text-warning 
                        @endif                             
                        ">
                        {{ $first->pre_gou_under_95  }}
                        <br/>
                        {{ $first->end_gou_under_95  }} 
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>


<div class="row mb-3">
    
    <div class="col-6 text-end  mb-3"> 
        <img src="{{ $first->teams_home_logo }}" width="20px">
        {!! $first->teams_home !!} 
        
        {!! $first->goals_home !!} 
        <br/>
        {{ $first->score_halftime_home }}
        <br/>
        <?php
            $score_halftime_home = $first->score_halftime_home; 
            $score_secondtime_home = abs($first->score_halftime_home - $first->goals_home);
        ?>
        {{ $score_secondtime_home }}
    </div>
    <div class="col-6 mb-3"> 
        {!! $first->goals_away !!} 
        {!! $first->teams_away !!} 
        <img src="{{ $first->teams_away_logo }}" width="20px">
        <br/>
        {{ $first->score_halftime_away }}
        <br/>
        <?php
            $score_halftime_away = $first->score_halftime_away; 
            $score_secondtime_away = abs($first->score_halftime_away - $first->goals_away);
        ?>
        {{ $score_secondtime_away }}
    </div>
    <div class="col-2">
        
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    1st
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_05) && $first->pre_fhg_over_05 + $first->pre_fhg_under_05 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_05) && $first->end_fhg_over_05 + $first->end_fhg_under_05 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        05
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_05  }}
                        <br/>
                        {{ $first->end_fhg_over_05  }}  
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_05  }}
                        <br/>
                        {{ $first->end_fhg_under_05  }} 
                    </div> 
                </div>  

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_075) && $first->pre_fhg_over_075 + $first->pre_fhg_under_075 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_075) && $first->end_fhg_over_075 + $first->end_fhg_under_075 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        075
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_075  }}
                        <br/>
                        {{ $first->end_fhg_over_075  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_075  }}
                        <br/>
                        {{ $first->end_fhg_under_075  }} 
                    </div> 
                </div>  

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_1) && $first->pre_fhg_over_1 + $first->pre_fhg_under_1 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_1) && $first->end_fhg_over_1 + $first->end_fhg_under_1 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        1
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_1  }}
                        <br/>
                        {{ $first->end_fhg_over_1  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_1  }}
                        <br/>
                        {{ $first->end_fhg_under_1  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_125) && $first->pre_fhg_over_125 + $first->pre_fhg_under_125 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_125) && $first->end_fhg_over_125 + $first->end_fhg_under_125 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        125
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_125  }}
                        <br/>
                        {{ $first->end_fhg_over_125  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_125  }}
                        <br/>
                        {{ $first->end_fhg_under_125  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_15) && $first->pre_fhg_over_15 + $first->pre_fhg_under_15 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_15) && $first->end_fhg_over_15 + $first->end_fhg_under_15 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        15
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_15  }}
                        <br/>
                        {{ $first->end_fhg_over_15  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_15  }}
                        <br/>
                        {{ $first->end_fhg_under_15  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_175) && $first->pre_fhg_over_175 + $first->pre_fhg_under_175 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_175) && $first->end_fhg_over_175 + $first->end_fhg_under_175 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        175
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_175  }}
                        <br/>
                        {{ $first->end_fhg_over_175  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_175  }}
                        <br/>
                        {{ $first->end_fhg_under_175  }} 
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        1st
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_2) && $first->pre_fhg_over_2 + $first->pre_fhg_under_2 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_2) && $first->end_fhg_over_2 + $first->end_fhg_under_2 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        2
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_2  }}
                        <br/>
                        {{ $first->end_fhg_over_2  }} 

                        @if(!is_null($first->pre_fhg_over_2) && $first->pre_fhg_over_2 + $first->pre_fhg_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_2) && $first->end_fhg_over_2 + $first->end_fhg_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_2  }}
                        <br/>
                        {{ $first->end_fhg_under_2  }} 

                        @if(!is_null($first->pre_fhg_over_2) && $first->pre_fhg_over_2 + $first->pre_fhg_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_2) && $first->end_fhg_over_2 + $first->end_fhg_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_225) && $first->pre_fhg_over_225 + $first->pre_fhg_under_225 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_225) && $first->end_fhg_over_225 + $first->end_fhg_under_225 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        225
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_225  }}
                        <br/>
                        {{ $first->end_fhg_over_225  }} 

                        @if(!is_null($first->pre_fhg_over_225) && $first->pre_fhg_over_225 + $first->pre_fhg_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_225) && $first->end_fhg_over_225 + $first->end_fhg_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_225  }}
                        <br/>
                        {{ $first->end_fhg_under_225  }} 

                        @if(!is_null($first->pre_fhg_over_225) && $first->pre_fhg_over_225 + $first->pre_fhg_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 1.85 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_225) && $first->end_fhg_over_225 + $first->end_fhg_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 1.85 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_25) && $first->pre_fhg_over_25 + $first->pre_fhg_under_25 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_25) && $first->end_fhg_over_25 + $first->end_fhg_under_25 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        25
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_25  }}
                        <br/>
                        {{ $first->end_fhg_over_25  }} 

                        @if(!is_null($first->pre_fhg_over_25) && $first->pre_fhg_over_25 + $first->pre_fhg_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_25) && $first->end_fhg_over_25 + $first->end_fhg_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_25  }}
                        <br/>
                        {{ $first->end_fhg_under_25  }} 

                        @if(!is_null($first->pre_fhg_over_25) && $first->pre_fhg_over_25 + $first->pre_fhg_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_25) && $first->end_fhg_over_25 + $first->end_fhg_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_275) && $first->pre_fhg_over_275 + $first->pre_fhg_under_275 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_275) && $first->end_fhg_over_275 + $first->end_fhg_under_275 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        275
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_275  }}
                        <br/>
                        {{ $first->end_fhg_over_275  }} 

                        @if(!is_null($first->pre_fhg_over_275) && $first->pre_fhg_over_275 + $first->pre_fhg_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_275) && $first->end_fhg_over_275 + $first->end_fhg_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_275  }}
                        <br/>
                        {{ $first->end_fhg_under_275  }} 

                        @if(!is_null($first->pre_fhg_over_275) && $first->pre_fhg_over_275 + $first->pre_fhg_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_275) && $first->end_fhg_over_275 + $first->end_fhg_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2"> 
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    1st
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_3) && $first->pre_fhg_over_3 + $first->pre_fhg_under_3 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_3) && $first->end_fhg_over_3 + $first->end_fhg_under_3 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        3
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_3  }}
                        <br/>
                        {{ $first->end_fhg_over_3  }} 

                        @if(!is_null($first->pre_fhg_over_3) && $first->pre_fhg_over_3 + $first->pre_fhg_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_3) && $first->end_fhg_over_3 + $first->end_fhg_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_3  }}
                        <br/>
                        {{ $first->end_fhg_under_3  }} 

                        @if(!is_null($first->pre_fhg_over_3) && $first->pre_fhg_over_3 + $first->pre_fhg_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_3) && $first->end_fhg_over_3 + $first->end_fhg_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_325) && $first->pre_fhg_over_325 + $first->pre_fhg_under_325 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_325) && $first->end_fhg_over_325 + $first->end_fhg_under_325 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        325
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_325  }}
                        <br/>
                        {{ $first->end_fhg_over_325  }} 

                        @if(!is_null($first->pre_fhg_over_325) && $first->pre_fhg_over_325 + $first->pre_fhg_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_325) && $first->end_fhg_over_325 + $first->end_fhg_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                        
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_325  }}
                        <br/>
                        {{ $first->end_fhg_under_325  }} 

                        @if(!is_null($first->pre_fhg_over_325) && $first->pre_fhg_over_325 + $first->pre_fhg_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_325) && $first->end_fhg_over_325 + $first->end_fhg_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_35) && $first->pre_fhg_over_35 + $first->pre_fhg_under_35 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_35) && $first->end_fhg_over_35 + $first->end_fhg_under_35 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        35
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_35  }}
                        <br/>
                        {{ $first->end_fhg_over_35  }} 

                        @if(!is_null($first->pre_fhg_over_35) && $first->pre_fhg_over_35 + $first->pre_fhg_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_35) && $first->end_fhg_over_35 + $first->end_fhg_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_35  }}
                        <br/>
                        {{ $first->end_fhg_under_35  }}  

                        @if(!is_null($first->pre_fhg_over_35) && $first->pre_fhg_over_35 + $first->pre_fhg_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_35) && $first->end_fhg_over_35 + $first->end_fhg_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_375) && $first->pre_fhg_over_375 + $first->pre_fhg_under_375 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_375) && $first->end_fhg_over_375 + $first->end_fhg_under_375 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        375
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_375  }}
                        <br/>
                        {{ $first->end_fhg_over_375  }} 

                        @if(!is_null($first->pre_fhg_over_375) && $first->pre_fhg_over_375 + $first->pre_fhg_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_375) && $first->end_fhg_over_375 + $first->end_fhg_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_375  }}
                        <br/>
                        {{ $first->end_fhg_under_375  }} 

                        @if(!is_null($first->pre_fhg_over_375) && $first->pre_fhg_over_375 + $first->pre_fhg_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_375) && $first->end_fhg_over_375 + $first->end_fhg_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        1st
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_4) && $first->pre_fhg_over_4 + $first->pre_fhg_under_4 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_4) && $first->end_fhg_over_4 + $first->end_fhg_under_4 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        4
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_4  }}
                        <br/>
                        {{ $first->end_fhg_over_4  }} 

                        @if(!is_null($first->pre_fhg_over_4) && $first->pre_fhg_over_4 + $first->pre_fhg_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_4) && $first->end_fhg_over_4 + $first->end_fhg_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_4  }}
                        <br/>
                        {{ $first->end_fhg_under_4  }} 

                        @if(!is_null($first->pre_fhg_over_4) && $first->pre_fhg_over_4 + $first->pre_fhg_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_4) && $first->end_fhg_over_4 + $first->end_fhg_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_425) && $first->pre_fhg_over_425 + $first->pre_fhg_under_425 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_425) && $first->end_fhg_over_425 + $first->end_fhg_under_425 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        425
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_425  }}
                        <br/>
                        {{ $first->end_fhg_over_425  }} 

                        @if(!is_null($first->pre_fhg_over_425) && $first->pre_fhg_over_425 + $first->pre_fhg_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_425) && $first->end_fhg_over_425 + $first->end_fhg_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_425  }}
                        <br/>
                        {{ $first->end_fhg_under_425  }} 
                        
                        @if(!is_null($first->pre_fhg_over_425) && $first->pre_fhg_over_425 + $first->pre_fhg_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_425) && $first->end_fhg_over_425 + $first->end_fhg_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_45) && $first->pre_fhg_over_45 + $first->pre_fhg_under_45 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_45) && $first->end_fhg_over_45 + $first->end_fhg_under_45 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        45
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_45  }}
                        <br/>
                        {{ $first->end_fhg_over_45  }} 
                        
                        @if(!is_null($first->pre_fhg_over_45) && $first->pre_fhg_over_45 + $first->pre_fhg_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_45) && $first->end_fhg_over_45 + $first->end_fhg_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_45  }}
                        <br/>
                        {{ $first->end_fhg_under_45  }} 

                        @if(!is_null($first->pre_fhg_over_45) && $first->pre_fhg_over_45 + $first->pre_fhg_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_45) && $first->end_fhg_over_45 + $first->end_fhg_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_fhg_over_475) && $first->pre_fhg_over_475 + $first->pre_fhg_under_475 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_fhg_over_475) && $first->end_fhg_over_475 + $first->end_fhg_under_475 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        475
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_over_475  }}
                        <br/>
                        {{ $first->end_fhg_over_475  }} 

                        @if(!is_null($first->pre_fhg_over_475) && $first->pre_fhg_over_475 + $first->pre_fhg_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_475) && $first->end_fhg_over_475 + $first->end_fhg_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_fhg_under_475  }}
                        <br/>
                        {{ $first->end_fhg_under_475  }} 

                        @if(!is_null($first->pre_fhg_over_475) && $first->pre_fhg_over_475 + $first->pre_fhg_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_fhg_over_475) && $first->end_fhg_over_475 + $first->end_fhg_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div> 
</div>

<div class="row mb-3">
    <div class="col-6 text-end  mb-3"> 
        <img src="{{ $first->teams_home_logo }}" width="20px">
        {!! $first->teams_home !!} 
        
        {!! $first->goals_home !!} 
        <br/>
        {{ $first->score_halftime_home }}
        <br/>
        <?php
            $score_halftime_home = $first->score_halftime_home; 
            $score_secondtime_home = abs($first->score_halftime_home - $first->goals_home);
        ?>
        {{ $score_secondtime_home }}
    </div>
    <div class="col-6 mb-3"> 
        {!! $first->goals_away !!} 
        {!! $first->teams_away !!} 
        <img src="{{ $first->teams_away_logo }}" width="20px">
        <br/>
        {{ $first->score_halftime_away }}
        <br/>
        <?php
            $score_halftime_away = $first->score_halftime_away; 
            $score_secondtime_away = abs($first->score_halftime_away - $first->goals_away);
        ?>
        {{ $score_secondtime_away }}
    </div>
    <div class="col-2">
        
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    2nd
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">
                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_05) && $first->pre_shg_over_05 + $first->pre_shg_under_05 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_05) && $first->end_shg_over_05 + $first->end_shg_under_05 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        05
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_05  }}
                        <br/>
                        {{ $first->end_shg_over_05  }}  
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_05  }}
                        <br/>
                        {{ $first->end_shg_under_05  }} 
                    </div> 
                </div>  

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_075) && $first->pre_shg_over_075 + $first->pre_shg_under_075 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_075) && $first->end_shg_over_075 + $first->end_shg_under_075 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        075
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_075  }}
                        <br/>
                        {{ $first->end_shg_over_075  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_075  }}
                        <br/>
                        {{ $first->end_shg_under_075  }} 
                    </div> 
                </div>  

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_1) && $first->pre_shg_over_1 + $first->pre_shg_under_1 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_1) && $first->end_shg_over_1 + $first->end_shg_under_1 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        1
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_1  }}
                        <br/>
                        {{ $first->end_shg_over_1  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_1  }}
                        <br/>
                        {{ $first->end_shg_under_1  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_125) && $first->pre_shg_over_125 + $first->pre_shg_under_125 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_125) && $first->end_shg_over_125 + $first->end_shg_under_125 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        125
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_125  }}
                        <br/>
                        {{ $first->end_shg_over_125  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_125  }}
                        <br/>
                        {{ $first->end_shg_under_125  }} 
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_15) && $first->pre_shg_over_15 + $first->pre_shg_under_15 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_15) && $first->end_shg_over_15 + $first->end_shg_under_15 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        15
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_15  }}
                        <br/>
                        {{ $first->end_shg_over_15  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_15  }}
                        <br/>
                        {{ $first->end_shg_under_15  }} 
                    </div> 
                </div> 
                
                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_175) && $first->pre_shg_over_175 + $first->pre_shg_under_175 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_175) && $first->end_shg_over_175 + $first->end_shg_under_175 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        175
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_175  }}
                        <br/>
                        {{ $first->end_shg_over_175  }} 
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_175  }}
                        <br/>
                        {{ $first->end_shg_under_175  }} 
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        2nd
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_2) && $first->pre_shg_over_2 + $first->pre_shg_under_2 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_2) && $first->end_shg_over_2 + $first->end_shg_under_2 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        2
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_2  }}
                        <br/>
                        {{ $first->end_shg_over_2  }} 

                        @if(!is_null($first->pre_shg_over_2) && $first->pre_shg_over_2 + $first->pre_shg_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_2) && $first->end_shg_over_2 + $first->end_shg_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_2  }}
                        <br/>
                        {{ $first->end_shg_under_2  }} 

                        @if(!is_null($first->pre_shg_over_2) && $first->pre_shg_over_2 + $first->pre_shg_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_2) && $first->end_shg_over_2 + $first->end_shg_under_2 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_225) && $first->pre_shg_over_225 + $first->pre_shg_under_225 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_225) && $first->end_shg_over_225 + $first->end_shg_under_225 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        225
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_225  }}
                        <br/>
                        {{ $first->end_shg_over_225  }} 

                        @if(!is_null($first->pre_shg_over_225) && $first->pre_shg_over_225 + $first->pre_shg_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_225) && $first->end_shg_over_225 + $first->end_shg_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_225  }}
                        <br/>
                        {{ $first->end_shg_under_225  }} 

                        @if(!is_null($first->pre_shg_over_225) && $first->pre_shg_over_225 + $first->pre_shg_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 1.85 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_225) && $first->end_shg_over_225 + $first->end_shg_under_225 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 1.85 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_25) && $first->pre_shg_over_25 + $first->pre_shg_under_25 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_25) && $first->end_shg_over_25 + $first->end_shg_under_25 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        25
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_25  }}
                        <br/>
                        {{ $first->end_shg_over_25  }} 

                        @if(!is_null($first->pre_shg_over_25) && $first->pre_shg_over_25 + $first->pre_shg_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_25) && $first->end_shg_over_25 + $first->end_shg_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_25  }}
                        <br/>
                        {{ $first->end_shg_under_25  }} 

                        @if(!is_null($first->pre_shg_over_25) && $first->pre_shg_over_25 + $first->pre_shg_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_25) && $first->end_shg_over_25 + $first->end_shg_under_25 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_275) && $first->pre_shg_over_275 + $first->pre_shg_under_275 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_275) && $first->end_shg_over_275 + $first->end_shg_under_275 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        275
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_275  }}
                        <br/>
                        {{ $first->end_shg_over_275  }} 

                        @if(!is_null($first->pre_shg_over_275) && $first->pre_shg_over_275 + $first->pre_shg_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_275) && $first->end_shg_over_275 + $first->end_shg_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_275  }}
                        <br/>
                        {{ $first->end_shg_under_275  }} 

                        @if(!is_null($first->pre_shg_over_275) && $first->pre_shg_over_275 + $first->pre_shg_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_275) && $first->end_shg_over_275 + $first->end_shg_under_275 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 2.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2"> 
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                    2nd
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_3) && $first->pre_shg_over_3 + $first->pre_shg_under_3 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_3) && $first->end_shg_over_3 + $first->end_shg_under_3 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        3
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_3  }}
                        <br/>
                        {{ $first->end_shg_over_3  }} 

                        @if(!is_null($first->pre_shg_over_3) && $first->pre_shg_over_3 + $first->pre_shg_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_3) && $first->end_shg_over_3 + $first->end_shg_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_3  }}
                        <br/>
                        {{ $first->end_shg_under_3  }} 

                        @if(!is_null($first->pre_shg_over_3) && $first->pre_shg_over_3 + $first->pre_shg_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_3) && $first->end_shg_over_3 + $first->end_shg_under_3 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_325) && $first->pre_shg_over_325 + $first->pre_shg_under_325 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_325) && $first->end_shg_over_325 + $first->end_shg_under_325 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        325
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_325  }}
                        <br/>
                        {{ $first->end_shg_over_325  }} 

                        @if(!is_null($first->pre_shg_over_325) && $first->pre_shg_over_325 + $first->pre_shg_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_325) && $first->end_shg_over_325 + $first->end_shg_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                        
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_325  }}
                        <br/>
                        {{ $first->end_shg_under_325  }} 

                        @if(!is_null($first->pre_shg_over_325) && $first->pre_shg_over_325 + $first->pre_shg_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_325) && $first->end_shg_over_325 + $first->end_shg_under_325 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_35) && $first->pre_shg_over_35 + $first->pre_shg_under_35 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_35) && $first->end_shg_over_35 + $first->end_shg_under_35 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        35
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_35  }}
                        <br/>
                        {{ $first->end_shg_over_35  }} 

                        @if(!is_null($first->pre_shg_over_35) && $first->pre_shg_over_35 + $first->pre_shg_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_35) && $first->end_shg_over_35 + $first->end_shg_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_35  }}
                        <br/>
                        {{ $first->end_shg_under_35  }}  

                        @if(!is_null($first->pre_shg_over_35) && $first->pre_shg_over_35 + $first->pre_shg_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_35) && $first->end_shg_over_35 + $first->end_shg_under_35 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_375) && $first->pre_shg_over_375 + $first->pre_shg_under_375 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_375) && $first->end_shg_over_375 + $first->end_shg_under_375 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        375
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_375  }}
                        <br/>
                        {{ $first->end_shg_over_375  }} 

                        @if(!is_null($first->pre_shg_over_375) && $first->pre_shg_over_375 + $first->pre_shg_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_375) && $first->end_shg_over_375 + $first->end_shg_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_375  }}
                        <br/>
                        {{ $first->end_shg_under_375  }} 

                        @if(!is_null($first->pre_shg_over_375) && $first->pre_shg_over_375 + $first->pre_shg_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_375) && $first->end_shg_over_375 + $first->end_shg_under_375 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 3.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-2">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row"> 
                    <div class="col">
                        2nd
                    </div>
                    <div class="col">
                        Over
                    </div>
                    <div class="col">
                        Under
                    </div> 
                </div>
            </div>
            <div class="card-body text-center">

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_4) && $first->pre_shg_over_4 + $first->pre_shg_under_4 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_4) && $first->end_shg_over_4 + $first->end_shg_under_4 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        4
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_4  }}
                        <br/>
                        {{ $first->end_shg_over_4  }} 

                        @if(!is_null($first->pre_shg_over_4) && $first->pre_shg_over_4 + $first->pre_shg_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_4) && $first->end_shg_over_4 + $first->end_shg_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_4  }}
                        <br/>
                        {{ $first->end_shg_under_4  }} 

                        @if(!is_null($first->pre_shg_over_4) && $first->pre_shg_over_4 + $first->pre_shg_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_4) && $first->end_shg_over_4 + $first->end_shg_under_4 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_425) && $first->pre_shg_over_425 + $first->pre_shg_under_425 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_425) && $first->end_shg_over_425 + $first->end_shg_under_425 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        425
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_425  }}
                        <br/>
                        {{ $first->end_shg_over_425  }} 

                        @if(!is_null($first->pre_shg_over_425) && $first->pre_shg_over_425 + $first->pre_shg_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_425) && $first->end_shg_over_425 + $first->end_shg_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_425  }}
                        <br/>
                        {{ $first->end_shg_under_425  }} 
                        
                        @if(!is_null($first->pre_shg_over_425) && $first->pre_shg_over_425 + $first->pre_shg_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_425) && $first->end_shg_over_425 + $first->end_shg_under_425 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.25 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_45) && $first->pre_shg_over_45 + $first->pre_shg_under_45 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_45) && $first->end_shg_over_45 + $first->end_shg_under_45 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        45
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_45  }}
                        <br/>
                        {{ $first->end_shg_over_45  }} 
                        
                        @if(!is_null($first->pre_shg_over_45) && $first->pre_shg_over_45 + $first->pre_shg_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_45) && $first->end_shg_over_45 + $first->end_shg_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_45  }}
                        <br/>
                        {{ $first->end_shg_under_45  }} 

                        @if(!is_null($first->pre_shg_over_45) && $first->pre_shg_over_45 + $first->pre_shg_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_45) && $first->end_shg_over_45 + $first->end_shg_under_45 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.5 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 

                <div class="row mb-2 
                    @if(!is_null($first->pre_shg_over_475) && $first->pre_shg_over_475 + $first->pre_shg_under_475 < 4) 
                        text-info 
                    @endif
                    @if(!is_null($first->end_shg_over_475) && $first->end_shg_over_475 + $first->end_shg_under_475 < 4) 
                        text-info 
                    @endif
                    ">
                    <div class="col">
                        475
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_over_475  }}
                        <br/>
                        {{ $first->end_shg_over_475  }} 

                        @if(!is_null($first->pre_shg_over_475) && $first->pre_shg_over_475 + $first->pre_shg_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_475) && $first->end_shg_over_475 + $first->end_shg_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals > 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div>
                    <div class="col">
                        {{ $first->pre_shg_under_475  }}
                        <br/>
                        {{ $first->end_shg_under_475  }} 

                        @if(!is_null($first->pre_shg_over_475) && $first->pre_shg_over_475 + $first->pre_shg_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @elseif(!is_null($first->end_shg_over_475) && $first->end_shg_over_475 + $first->end_shg_under_475 < 4) 
                            @if(!is_null($first->goals_home) && $total_goals < 4.75 ) 
                                <div class="mt-1 bg-success"> win </div> 
                            @endif
                        @endif
                    </div> 
                </div> 
            </div>
        </div>
    </div> 
</div>
