@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    

    <div class="row mb-4">
        <div class="col-12 text-center">    
            <a href="{{ route('Notstarted.date', date('Y-m-d') ) }}" 
                class="btn btn-default btn-sm active" >  
                Today
            </a>           
        </div>
    </div>  

    <hr class="">

    <div class="mb-3">
        @foreach($data_tipster as $row)
            <div class="btn-group mb-2 me-2">
                <a href="{{ route('Tipster.date_set_tipster', [ 
                        'id' => $row->id,
                        'nama' => str_replace(' ', '_', $row->nama)
                    ]) }}" type="button" 
                    class="btn btn-sm  
                        btn-black 
                    ">
                    #{{$loop->iteration}} {{$row->nama}}
                </a>
                <button type="button" class="btn btn-sm btn-info">
                    {{$row->points}}
                </button>
                <button type="button" class="btn btn-sm btn-teal">
                    {{$row->win}}
                </button>
                <button type="button" class="btn btn-sm btn-yellow">
                    {{$row->draw}}
                </button>
                <button type="button" class="btn btn-sm btn-pink">
                    {{$row->lose}}
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                    {{ number_format( $row->win_percentages , 2,",",".") }}
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                    {{ number_format( $row->lose_percentages , 2,",",".") }}
                </button>
            </div> 

            @if($loop->iteration % 10 == 0)
                <hr/>
            @endif
        @endforeach
    </div>
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                Data : {!!$panel_name!!}
                <br/>
                Date now : {{date("Y-m-d H:i:s" )}}
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table table-dark">
                        <thead class="table-dark">
                            <tr>               
                                <x-html.th-content-width title="Date" width="20%" /> 
                                <x-html.th-content-width title="Country" width="15%" />
                                <x-html.th-content-width title="League" width="15%" /> 
                                <x-html.th-content-width title="Status" width="10%" /> 
                                <x-html.th-content-width title="Match" width="20%" /> 
                                <x-html.th-content-width title="Odds" width="5%" /> 
                                <x-html.th-content-width title="Action" width="15%"  />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $row->tanggal }} 
                                    </td> 
                                    <td class="text-left"> 
                                        <a  href="{{ route('Leagues.season', 
                                                    [
                                                    'leagueapi_id' => $row->leagueapi_id, 
                                                    'season' => $row->season
                                                ]) }}" 
                                            class="text-decoration-none text-white">   
                                            {{ $row->league_country }} {{ $row->season }}
                                        </a>  
                                        <br/>
                                        #{{ $row->league->bookmakersapi_id }}
                                        {{ $row->league->bookmakers_name }}   
                                    </td>
                                    <td class="text-left"> 
                                        <a  href="{{ route('Notstarted.leaguedate', 
                                                    [
                                                    'leagueapi_id' => $row->leagueapi_id, 
                                                    'date' => date('Y-m-d')
                                                ]) }}" 
                                            class="text-decoration-none text-white">   
                                            {{ $row->league_name }}  
                                        </a>      
                                    </td> 
                                    <td class="text-left"> 
                                        {{ $row->fixture_status }}       
                                    </td> 
                                    <td class="text-left"> 
                                        <?php
                                            $keyword = $row->teams_home.' '.$row->teams_away.' flashscore'; 
                                        ?>

                                        <a href="https://www.google.com/search?q={{$keyword}}"  
                                            target="_blank" >  
                                            {{ $row->teams_home }}
                                            <br/>
                                            {{ $row->teams_away }} 
                                        </a>  
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->pre_mw_home_odd }}
                                        <br/>
                                        {{ $row->pre_mw_away_odd }} 
                                        <br/>
                                        {{ $row->pre_mw_draw_odd }} 
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->pre_ah_pattern }}
                                        <br/>
                                        {{ $row->pre_gou_pattern }} 
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
