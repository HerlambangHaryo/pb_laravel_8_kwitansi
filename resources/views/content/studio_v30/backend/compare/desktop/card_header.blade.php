
<div class="card-header">
    <div class="row">
        <div class="col-3">
            <table>
                <tr>
                    <td width="35%">
                        Data
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {!!$panel_name!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        Rows
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{count($data)}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Date
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{date("Y-m-d H:i:s" )}} 
                    </td>
                </tr>
            </table>  
        </div>
        <div class="col-3">
            <table>
                <tr>
                    <td width="35%">
                        Country
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <img src="{{ $first->league_flag }}" width="20px">
                        {!!$first->league_country!!}
                    </td>
                </tr>
                <tr>
                    <td>
                        League
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <a  href="{{ route('Fixtures.leagueseason', 
                                    [
                                    'leagueapi_id'  => $first->leagueapi_id, 
                                    'season'        => $first->season
                                ]) }}" 
                            class="text-decoration-none text-white">   
                            <img src="{{ $first->league_logo }}" width="20px">
                            {{ $first->league_name }} {{ $first->season }}   
                        </a>   
                    </td>
                </tr>
                <tr>
                    <td>
                        Tanggal
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {{ $first->tanggal }} 
                    </td>
                </tr>
            </table>  
        </div> 
        <div class="col-3">
            <table>
                <tr>
                    <td width="35%">
                        Home
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <img src="{{ $first->teams_home_logo }}" width="20px">
                        {!! $first->teams_home !!}
                        [{{ $first->teams_home_id }}]
                    </td>
                </tr>
                <tr>
                    <td>
                        Away 
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <img src="{{ $first->teams_away_logo }}" width="20px">
                        {!! $first->teams_away !!}
                        [{{ $first->teams_away_id }}]
                    </td>
                </tr>
                <tr>
                    <td> 
                        P. Tot
                    </td>
                    <td> 
                        :
                    </td>
                    <td> 
                        {{ $first->pattern_total }}
                    </td>
                </tr>
            </table>  
        </div> 
        <div class="col-3">
            <table>
                <tr>
                    <td width="35%">
                        Pre Ah
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {!! $first->pre_ah_pattern !!}p
                    </td>
                </tr>
                <tr>
                    <td>
                        Pre Ah M 
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {!! $first->pre_ah_pattern_mirror !!}p
                    </td>
                </tr>
                <tr>
                    <td>
                        Pre Gou
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        {!! $first->pre_gou_pattern !!}p
                    </td>
                </tr>
            </table>  
        </div> 
    </div>

    <hr/>

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
</div>