@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content') 

    <div class="mb-3">
        <a href="{{ route('Tips.archives') }}" type="button" 
            class="btn btn-sm  btn-primary  ">
            Archives
        </a>
        <a href="{{ route('Tipster.indexdate') }}" type="button" 
            class="btn btn-sm  btn-primary  ">
            indexdate
        </a>
    </div>

    <hr/>
    
    <div class="mb-3">
        @foreach($data_tipster as $row)
            <div class="btn-group mb-2 me-2">
                <button type="button" class="btn btn-sm btn-secondary">
                    #{{$loop->iteration}}
                </button>
                <button type="button" class="btn btn-sm btn-black">
                    {{$row->nama}}
                </button>
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
                                <x-html.th-content title="Odds"  />
                                <x-html.th-content title="Score"  />
                                <x-html.th-content title="Tips"  />
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
                                        {{ $row->league_country }} {{ $row->season }}  
                                        <br/> 
                                        {{ $row->league_name }}  
                                        <br/>
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
                                        {{ $row->goals_home }}
                                        <br/>
                                        {{ $row->goals_away }}  
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->nama_tipster }}
                                        <br/>
                                        {{ $row->nama }} 
                                        <br/>
                                        {{ $row->value }} 
                                    </td> 
                                    <td class="text-center"> 
                                        @if(is_null($row->status)) 
                                            <a href="{{ route('Tips.set_status',
                                                    [
                                                        'id'            => $row->id,
                                                        'tipster_id'    => $row->tipster_id,
                                                        'status'        => 3, 
                                                    ]
                                                ) }}" 
                                                class="btn   btn-sm btn-teal" >
                                                Win  
                                            </a>  
                                            <a href="{{ route('Tips.set_status',
                                                    [
                                                        'id'            => $row->id,
                                                        'tipster_id'    => $row->tipster_id,
                                                        'status'        => 1, 
                                                    ]
                                                ) }}" 
                                                class="btn  btn-sm  btn-yellow" >
                                                Draw  
                                            </a>  
                                            <a href="{{ route('Tips.set_status',
                                                    [
                                                        'id'            => $row->id,
                                                        'tipster_id'    => $row->tipster_id,
                                                        'status'        => 0, 
                                                    ]
                                                ) }}" 
                                                class="btn btn-sm  btn-pink" >
                                                Lose  
                                            </a>  
                                        @elseif(!is_null($row->status))
                                            Null
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
