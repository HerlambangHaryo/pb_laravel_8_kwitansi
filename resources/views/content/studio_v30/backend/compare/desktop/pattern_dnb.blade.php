@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    @include('content.studio_v30.backend.compare.desktop.top_menu') 
     
    <div id="datatable" class="mb-5">
        <div class="card">
            @include('content.studio_v30.backend.compare.desktop.card_header') 
            
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table table-dark"
                        style="font-size:10px;" >
                        <thead class="table-dark">
                            <tr>               
                                <x-html.th-content title="Date" /> 
                                <x-html.th-content title="Home" /> 
                                <x-html.th-content title="Away" />  
                                <x-html.th-content title="H" /> 
                                <x-html.th-content title="D" /> 
                                <x-html.th-content title="A" /> 
                                <x-html.th-content title=" " />
                                <x-html.th-content title="H" /> 
                                <x-html.th-content title="D" /> 
                                <x-html.th-content title="A" /> 
                                <x-html.th-content title=" " />
                                <x-html.th-content title="H" /> 
                                <x-html.th-content title="D" /> 
                                <x-html.th-content title="A" /> 
                                <x-html.th-content title=" " />
                                <x-html.th-content title="pre" /> 
                                <x-html.th-content title="end" /> 
                                <x-html.th-content title="sts" />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="">
                                        <?php 
                                            $temp = explode(' ', $row->tanggal);
                                            echo $temp[0];
                                            echo '</br>';
                                            echo $temp[1];
                                        ?>  

                                        @if($row->fixtureapi_id == $first->fixtureapi_id) 
                                            <i class="fa fa-circle fs-9px fa-fw text-teal me-2"></i> 
                                        @endif
                                        
                                        <br/>

                                        {{$row->season}}th 
                                        <br/>
                                        {{$row->leagueapi_id}}l 
                                        
                                        @if($row->pre_ah_pattern_mirror == $first->pre_ah_pattern) 
                                            <i class="fas fa-sync text-warning"></i> 
                                        @endif
                                    </td>
                                    <td class="
                                        @if(!is_null($row->goals_home) && $row->goals_home > $row->goals_away) 
                                            bg-gray-800 
                                        @endif  
                                        border-start">
                                        
                                        <img src="{{ $row->teams_home_logo }}" width="20px">
                                        {{ substr($row->teams_home,0,5) }} 
                                        [{{$row->team_home_id}}] 
                                        
                                        <div class="text-center">
                                            <br/>
                                            ({{ $row->score_halftime_home }})
                                            <br/>
                                            {{$row->goals_home}} 
                                        </div>
                                    </td>
                                    <td class="
                                        @if(!is_null($row->goals_home) && $row->goals_home < $row->goals_away) 
                                            bg-gray-800 
                                        @endif  
                                        ">
                                        
                                        <img src="{{ $row->teams_away_logo }}" width="20px">
                                        {{ substr($row->teams_away,0,5) }} 
                                        [{{$row->team_away_id}}] 

                                        <div class="text-center">
                                            <br/>
                                            ({{ $row->score_halftime_away }})
                                            <br/>
                                            {{$row->goals_away}}
                                        </div>
                                    </td> 

                                    <td class="
                                        @if(!is_null($row->goals_home) && $row->goals_home > $row->goals_away) 
                                            bg-gray-800 text-dark 
                                        @endif  
                                            
                                        border-start">
  
                                        {{$row->pre_mw_home_odd}}   
                                    </td> 
                                    <td class="
                                        @if(!is_null($row->goals_home) && $row->goals_home == $row->goals_away) 
                                            bg-gray-800 text-dark 
                                        @endif  
                                            
                                        border-start">

                                        {{$row->pre_mw_draw_odd}}  
                                    </td>  
                                    <td class="
                                        @if(!is_null($row->goals_home) && $row->goals_home < $row->goals_away) 
                                            bg-gray-800 text-dark 
                                        @endif  
                                            
                                        border-start"> 

                                        {{$row->pre_mw_away_odd}}   
                                    </td> 

                                    <td class=" border-start">
                                        {{ ($row->pre_mw_home_odd + $row->pre_mw_draw_odd + $row->pre_mw_away_odd )}} 
                                    </td> 
 

                                    <td class="
                                        @if(!is_null($row->goals_home) && $row->goals_home > $row->goals_away) 
                                            bg-gray-800 text-dark 
                                        @endif  
                                            
                                        border-start">
  
                                        {{$row->pre_mw_home_odd}}   
                                    </td> 
                                    <td class="
                                        @if(!is_null($row->goals_home) && $row->goals_home == $row->goals_away) 
                                            bg-gray-800 text-dark 
                                        @endif  
                                            
                                        border-start">

                                        {{$row->pre_mw_draw_odd}}  
                                    </td>  
                                    <td class="
                                        @if(!is_null($row->goals_home) && $row->goals_home < $row->goals_away) 
                                            bg-gray-800 text-dark 
                                        @endif  
                                            
                                        border-start"> 

                                        {{$row->pre_mw_away_odd}}   
                                    </td> 

                                    <td class=" border-start">
                                        {{ ($row->pre_mw_home_odd + $row->pre_mw_draw_odd + $row->pre_mw_away_odd )}} 
                                    </td> 
 
                                    <td class=" border-start">
                                        {{ ($row->end_mw_home_odd - $row->pre_mw_home_odd )}} 
                                    </td> 
 
                                    <td class=" border-start">
                                        {{ ($row->end_mw_draw_odd - $row->pre_mw_draw_odd )}} 
                                    </td> 
 
                                    <td class=" border-start">
                                        {{ ($row->end_mw_away_odd - $row->pre_mw_away_odd )}} 
                                    </td> 

                                    <td class=" border-start">
                                        {{ ($row->end_mw_home_odd + $row->end_mw_draw_odd + $row->end_mw_away_odd ) - ($row->pre_mw_home_odd + $row->pre_mw_draw_odd + $row->pre_mw_away_odd )  }} 
                                    </td> 

                                    <td class="border-start">
                                        {{$row->pre_ah_pattern}}p  
                                        
                                        @if($row->pre_ah_pattern_mirror == $first->pre_ah_pattern) 
                                            <i class="fas fa-sync text-warning"></i> 
                                        @endif
                                        <br/>
                                        {{$row->pre_ah_pattern_mirror }}p  
                                        <br/>
                                        {{$row->pre_gou_pattern}}p 

                                        <br/> 
                                        {{$row->fixture_status}} 
                                    </td> 
 
                                    <td class="border-start">
                                        {{$row->end_ah_pattern}}e  
                                        <br/>
                                        {{$row->end_ah_pattern_mirror }}e  
                                        <br/>
                                        {{$row->end_gou_pattern}}e 
                                    </td> 
                                    <td class="border-start">
                                        @if($row->pre_ah_pattern != $row->end_ah_pattern)A @endif
                                        <br/> 
                                        @if($row->pre_gou_pattern != $row->end_gou_pattern)G @endif
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
