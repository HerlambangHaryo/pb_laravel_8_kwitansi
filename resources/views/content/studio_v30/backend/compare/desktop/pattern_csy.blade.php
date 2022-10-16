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
                                <x-html.th-content title="t" />
                                <x-html.th-content title="H" />  
                                <x-html.th-content title="A" /> 
                                <x-html.th-content title=" " />
                                <x-html.th-content title="H" />  
                                <x-html.th-content title="A" /> 
                                <x-html.th-content title=" " />
                                <x-html.th-content title="H" />  
                                <x-html.th-content title="A" />  
                                <x-html.th-content title="pre" /> 
                                <x-html.th-content title="end" />  
                                <x-html.th-content title="s" />
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

                                        <br/>
                                        
                                        {{$row->fixtureapi_id}} 
                                    </td>
                                    
                                    <td class="text-center border-start">
                                        
                                        <img src="{{ $row->teams_home_logo }}" height="20px">

                                        <br/>
                                        [{{$row->teams_home_id}}] 

                                        <br/>

                                        <div class="mt-1 text-center
                                            @if(!is_null($row->goals_home) && $row->goals_home > $row->goals_away) 
                                                bg-success 
                                            @endif ">
                                            {{ substr($row->teams_home,0,7) }} 
                                        </div> 
                                        
                                        <div class="text-center">
                                            <br/>
                                            ({{ $row->score_halftime_home }})
                                            <br/>
                                            {{$row->goals_home}} 
                                        </div>
                                    </td>
                                    <td class="text-center ">
                                        
                                        <img src="{{ $row->teams_away_logo }}" height="20px">

                                        <br/>
                                        [{{$row->teams_away_id}}] 

                                        <br/>

                                        <div class="mt-1 text-center
                                            @if(!is_null($row->goals_away) && $row->goals_home < $row->goals_away) 
                                                bg-success 
                                            @endif ">
                                            {{ substr($row->teams_away,0,7) }} 
                                        </div>
                                        
                                        <div class="text-center">
                                            <br/>
                                            ({{ $row->score_halftime_away }})
                                            <br/>
                                            {{$row->goals_away}}
                                        </div>
                                    </td>  
                                    <td class="bg-gray-800 text-center border-start"> 
                                        {{$row->goals_home + $row->goals_away}} 
                                    </td> 

                                    <td class="text-center border-start"> 
                                        {{$row->pre_csh_yes}} 
                                        
                                        <br/>

                                        @if(!is_null($row->goals_away) )
                                            @if($row->goals_away == 0) 
                                                <div class="mt-1
                                                    @if($row->goals_away == 0) 
                                                        bg-success 
                                                    @endif ">
                                                    win
                                                </div> 
                                            @endif 
                                        @endif
                                    </td>  
                                    <td class="text-center border-start"> 
                                        {{$row->pre_csa_yes}} 
                                        
                                        <br/>

                                        @if(!is_null($row->goals_home) )
                                            @if($row->goals_home == 0) 
                                                <div class="mt-1
                                                    @if($row->goals_home == 0) 
                                                        bg-success 
                                                    @endif ">
                                                    win
                                                </div> 
                                            @endif 
                                        @endif
                                    </td> 

                                    <td class="bg-gray-800 text-center border-start"> 
                                        @if(!is_null($row->pre_csh_yes) )
                                            {{ ($row->pre_csh_yes + $row->pre_csa_yes )}}
                                        @endif  
                                    </td> 
 

                                    
                                    <td class="text-center border-start"> 
                                        {{$row->end_csh_yes}} 
                                        
                                        <br/>

                                        @if(!is_null($row->goals_away) )
                                            @if($row->goals_away == 0) 
                                                <div class="mt-1
                                                    @if($row->goals_away == 0) 
                                                        bg-success 
                                                    @endif ">
                                                    win
                                                </div> 
                                            @endif 
                                        @endif
                                    </td>  
                                    <td class="text-center border-start"> 
                                        {{$row->end_csa_yes}} 
                                        
                                        <br/>

                                        @if(!is_null($row->goals_home) )
                                            @if($row->goals_home == 0) 
                                                <div class="mt-1
                                                    @if($row->goals_home == 0) 
                                                        bg-success 
                                                    @endif ">
                                                    win
                                                </div> 
                                            @endif 
                                        @endif
                                    </td> 

                                    <td class="bg-gray-800 text-center border-start"> 
                                        @if(!is_null($row->end_csh_yes) )
                                            {{ ($row->end_csh_yes + $row->end_csa_yes )}}
                                        @endif  
                                    </td> 
 
                                    <td class="text-center border-start"> 
                                        @if(!is_null($row->pre_csh_yes) && !is_null($row->end_csh_yes) )
                                            {{ number_format(($row->end_csh_yes - $row->pre_csh_yes ),2,".",",") }} 
                                        @endif
                                        
                                        <br/>

                                        @if(!is_null($row->goals_away) )
                                            @if($row->goals_away == 0) 
                                                <div class="mt-1
                                                    @if($row->goals_away == 0) 
                                                        bg-success 
                                                    @endif ">
                                                    win
                                                </div> 
                                            @endif 
                                        @endif
                                    </td>   
 
                                    
                                    <td class="text-center border-start"> 
                                        @if(!is_null($row->pre_csa_yes) && !is_null($row->end_csa_yes) )
                                            {{ number_format(($row->end_csa_yes - $row->pre_csa_yes ),2,".",",") }} 
                                        @endif
                                        
                                        <br/>

                                        @if(!is_null($row->goals_home) )
                                            @if($row->goals_home == 0) 
                                                <div class="mt-1
                                                    @if($row->goals_home == 0) 
                                                        bg-success 
                                                    @endif ">
                                                    win
                                                </div> 
                                            @endif 
                                        @endif
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
                                    <td class="bg-gray-800 border-start">
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
 
    @include('content.studio_v30.backend.compare.desktop.down_details') 
    
@endsection
