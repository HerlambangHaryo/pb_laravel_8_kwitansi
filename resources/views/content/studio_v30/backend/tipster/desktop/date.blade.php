@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')    


    <div class="row mb-3">
        <div class="col-12 text-center">   
            <a href="{{ route('Tipster.indexdate' ) }}" 
                class="btn btn-default btn-sm active" >  
                Index Date
            </a>   
            <a href="{{ route('Tipster.date', date('Y-m-d', strtotime($date . ' - 1 day')) ) }}" 
                class="btn btn-default btn-sm active" >  
                Yesterday
            </a>   
            <a href="{{ route('Tipster.date', date('Y-m-d') ) }}" 
                class="btn btn-default btn-sm active" >  
                Today
            </a>   
            <a href="{{ route('Tipster.date', date('Y-m-d', strtotime($date)) ) }}" 
                class="btn btn-default btn-sm active" >  
                {{ date('D, Y-m-d', strtotime($date)) }}
            </a>     
            <a href="{{ route('Tipster.date', date('Y-m-d', strtotime($date . ' + 1 day')) ) }}" 
                class="btn btn-default btn-sm" >  
                {{date("D, Y-m-d", strtotime( $date . " + 1 day"))}} 
            </a>     
            <a href="{{ route('Tipster.date', date('Y-m-d', strtotime($date . ' + 2 day')) ) }}" 
                class="btn btn-default btn-sm" >  
                {{date("D, Y-m-d", strtotime( $date . " + 2 day"))}}
            </a>         
        </div>
    </div> 

    <hr class="">

    <div class="mb-3">
        @foreach($data_tipster as $row)
            <div class="btn-group mb-2 me-2">
                <a href="{{ route('Tipster.set_tipster', [
                        'date' => $date,
                        'id' => $row->id,
                        'nama' => str_replace(' ', '_', $row->nama)
                    ]) }}" type="button" class="btn btn-sm btn-black">
                    #{{$loop->iteration}} {{$row->nama}}
                </a>
                <button type="button" class="btn btn-sm btn-info">
                    {{$row->points}}
                </button>
                <button type="button" class="btn btn-sm btn-teal">
                    {{$row->win}}
                </button>
                <button type="button" class="btn btn-sm btn-pink">
                    {{$row->lose}}
                </button>
                <button type="button" class="btn btn-sm btn-yellow">
                    {{$row->draw}}
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                    {{ number_format( $row->win_percentages , 2,",",".") }}
                </button>
                <button type="button" class="btn btn-sm btn-secondary">
                    {{ number_format( $row->lose_percentages , 2,",",".") }}
                </button>
            </div> 
        @endforeach
    </div>

    <hr class="">

    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                Data : {!!$panel_name!!} 
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table table-dark">
                        <thead class="table-dark">
                            <tr>                
                                <x-html.th-content title="Date"  /> 
                                <x-html.th-content title="Nama"  /> 
                                <x-html.th-content title="Play"  />  
                                <x-html.th-content title="Win"  />  
                                <x-html.th-content title="Lose"  />  
                                <x-html.th-content title="Draw"  /> 
                                <x-html.th-content title="Win Percentage"  />  
                                <x-html.th-content title="Lose Percentage"  />  
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">   
                                        <?php 
                                            $temp = explode(' ', $row->tanggal);
                                            echo $temp[0];
                                            echo '<br/>';
                                            echo $temp[1];
                                        ?>  
                                    </td> 
                                    <td class="text-left">  
                                        {{ $row->league_country }} 
                                        <br/> 
                                        {{ $row->league_name }}
                                        <br/> 
                                        {{ $row->season }} 
                                    </td>  
                                    <td class="text-center">  
                                        {{ $row->teams_home }} 
                                        <br/>
                                        {{ $row->teams_away }} 
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->pre_mw_home_odd }} 
                                        <br/>
                                        {{ $row->pre_mw_away_odd }} 
                                        <br/>
                                        {{ $row->pre_mw_draw_odd }} 
                                    </td> 
                                    <td class="text-center">    
                                        Pattern : {{ $row->pattern_total }}
                                        <br/>
                                        level_{{ $row->level1 }}
                                        <br/>
                                        <br/> 
                                        {{ $row->mybt }}
                                    </td> 
                                    <td class="text-center">     
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->win_percentages }} 
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->lose_percentages }} 
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
