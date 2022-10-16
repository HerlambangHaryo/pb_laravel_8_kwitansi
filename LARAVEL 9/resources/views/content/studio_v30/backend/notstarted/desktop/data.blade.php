@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    

    <div class="row mb-4">
        <div class="col-12 text-center">   
            <a href="{{ route('Notstarted.index') }}" 
                class="btn btn-default btn-sm active" >  
                Index
            </a>    
            <a href="{{ route('Notstarted.date', date('Y-m-d') ) }}" 
                class="btn btn-default btn-sm active" >  
                Today
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
                                <x-html.th-content title="Date" /> 
                                <x-html.th-content title="Country" />
                                <x-html.th-content title="League" />  
                                <x-html.th-content title="Match" /> 
                                <x-html.th-content title="Pattern" /> 
                                <x-html.th-content title="Odds" /> 
                                <x-html.th-content title="Action" />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $row->tanggal }} 
                                        <br/>
                                        {{ $row->fixtureapi_id }} 
                                    </td> 
                                    <td class="text-left"> 
                                        <a  href="{{ route('Leagues.season', 
                                                    [
                                                    'leagueapi_id' => $row->leagueapi_id, 
                                                    'season' => $row->season
                                                ]) }}" 
                                            class="text-decoration-none text-white">   

                                            <img src="{{ $row->league_flag }}" width="20px">

                                             {{ $row->league_country }}
                                        </a>  

                                        <br/> 
                                         
                                            <img src="{{ $row->league_logo }}" width="20px">
                                            {{ $row->league_name }} {{ $row->season }}    

                                        <br/>
                                        #{{ $row->league->bookmakersapi_id }}
                                        {{ $row->league->bookmakers_name }}   
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
                                        {{ $row->pre_mw_home_odd }}
                                        <br/>
                                        {{ $row->pre_mw_away_odd }} 
                                        <br/>
                                        {{ $row->pre_mw_draw_odd }} 
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->pattern_total }}
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->pre_ah_pattern }}
                                        <br/>
                                        {{ $row->pre_gou_pattern }} 
                                    </td> 
                                    <td>
                                        <a href="{{ route('Compare.pattern', [
                                                'fixtureapi_id' => $row->fixtureapi_id,
                                                'code' => 'mw',
                                            ] ) }}" class="btn btn-default btn-sm">
                                            mw
                                        </a>
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
