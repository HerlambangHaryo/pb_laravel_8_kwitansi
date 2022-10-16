@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    

    <div class="row mb-2">
        <div class="col-12 text-center">    
            <a href="{{ route('Fixtures.apifixture',
                                                [
                                                    'leagueapi_id'  => $leagueapi_id,  
                                                    'season'        => $season
                                                ] 
                                            ) }}" 
                class="btn btn-default btn-sm" >  
                Add Fixtures
            </a>    
            <a href="{{ route('Fixtures.apifixtureupdate',
                                                [
                                                    'leagueapi_id'  => $leagueapi_id,  
                                                    'season'        => $season
                                                ] 
                                            ) }}" 
                class="btn btn-default btn-sm" >  
                Re-update Fixtures
            </a>    
            <a href="{{ route('Fixtures.apifixturenext',
                                                [
                                                    'leagueapi_id'  => $leagueapi_id,  
                                                    'season'        => $season
                                                ] 
                                            ) }}" 
                class="btn btn-default btn-sm" >  
                Next 50 Fixtures
            </a>    
             
            @if($model_league->bookmakersapi_id == 0)   
                <a href="{{ route('Leagues.setbookmakers',
                                [
                                    'bookmakersapi_id'  => 8, 
                                    'leagueapi_id'      => $leagueapi_id,  
                                    'season'            => $season
                                ] 
                            ) }}" 
                    class="btn btn-default btn-sm" >  
                    365
                </a>       
                <a href="{{ route('Leagues.setbookmakers',
                                [
                                    'bookmakersapi_id'  => 11, 
                                    'leagueapi_id'      => $leagueapi_id,  
                                    'season'            => $season
                                ] 
                            ) }}" 
                    class="btn btn-default btn-sm" >  
                    1xB
                </a>   
            @else      
                <a href="#" 
                    class="btn btn-default btn-sm" >  
                    --{{$model_league->bookmakersapi_id}}--
                </a>    
            @endif
        </div>
    </div> 
    <div class="row mb-2">
        <div class="col-12 text-center">    
            <a href="{{ route('Fixtures.match_finished_ended',
                        [
                            'leagueapi_id'  => $leagueapi_id,  
                            'season'        => $season
                        ] 
                    ) }}" 
                class="btn btn-default btn-sm" >  
                Match Finished Ended
            </a>     
            <a href="{{ route('Fixtures.not_started',
                        [
                            'leagueapi_id'  => $leagueapi_id,  
                            'season'        => $season
                        ] 
                    ) }}" 
                class="btn btn-default btn-sm" >  
                Not Started
            </a>      
            <a href="{{ route('Fixtures.others',
                        [
                            'leagueapi_id'  => $leagueapi_id,  
                            'season'        => $season
                        ] 
                    ) }}" 
                class="btn btn-default btn-sm" >  
                Others
            </a>      
        </div>
    </div> 
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        <table>
                            <tr>
                                <td width="30%">
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
                    <div class="col-6">
                    </div> 
                </div>
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table table-dark">
                        <thead class="table-dark">
                            <tr>               
                                <x-html.th-content title="ID"  />  
                                <x-html.th-content title="Resume"  />  
                                <x-html.th-content title="Match"  /> 
                                <x-html.th-content title="Score"  />
                                <x-html.th-content title="Odds"  /> 
                                <x-html.th-content title="Corner"  />
                                <x-html.th-content title="Cards"  />
                                <x-html.th-content title="Action"  /> 
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $row->tanggal }}<br/>
                                        {{ $row->fixtureapi_id }} 
                                    </td> 
                                    <td class="text-left">   
                                        
                                        <img src="{{ $row->league_flag }}" width="20px"> 

                                        {{ $row->league_country }} 
                                        <br/> 
                                        
                                        <img src="{{ $row->league_logo }}" width="20px"> 

                                        {{ $row->league_name }} {{ $row->season }}    
                                        <br/>
                                        {{ $row->round }}    
                                    </td> 
                                    <td class="text-left"> 
                                        <?php
                                            $keyword = $row->teams_home.' '.$row->teams_away.' flashscore'; 
                                        ?>

                                        <a href="https://www.google.com/search?q={{$keyword}}"  
                                            target="_blank" >  

                                            <img src="{{ $row->teams_home_logo }}" width="20px"> 

                                            {{ $row->teams_home }}
                                            <br/>

                                            <img src="{{ $row->teams_away_logo }}" width="20px"> 
                                            {{ $row->teams_away }} 
                                        </a>  
                                        <br/>
                                        {{ $row->fixture_status }}     
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->goals_home }}
                                        <br/>
                                        {{ $row->goals_away }}  
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->pre_mw_home_odd }}
                                        <br/>
                                        {{ $row->pre_mw_away_odd }} 
                                        <br/>
                                        {{ $row->pre_mw_draw_odd }} 
                                    </td>  
                                    <td class="text-center"> 
                                        {{ $row->corner_kicks_home }}
                                        <br/>
                                        {{ $row->corner_kicks_away }}  
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->yellow_cards_home }} + 
                                        {{ $row->red_cards_home }}
                                        <br/>
                                        {{ $row->yellow_cards_away }} +
                                        {{ $row->red_cards_away }}
                                    </td> 
                                    <td> 
                                        <a href="{{ route('Compare.pattern', [
                                                'fixtureapi_id' => $row->fixtureapi_id,
                                                'code' => 'mw',
                                            ] ) }}" class="btn btn-default btn-sm">
                                            mw
                                        </a>
                                        
                                        @if(is_null($row->yellow_cards_away) )
                                            <a href="{{ route('Fixtures.apifixturestatistic', $row->fixtureapi_id  ) }}" 
                                                class="btn btn-default btn-sm" >  
                                                Stats
                                            </a>  
                                        @endif  
                                    </td>
                                </tr>
                                @empty 
                                    
                            @endforelse     
                        </tbody>
                    </table>   
                </div>
            </div>            
        </div>
    </div>
@endsection
