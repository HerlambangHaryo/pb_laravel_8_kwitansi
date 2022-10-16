@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')    


    <div class="row mb-3">
        <div class="col-12 text-center">   
            <a href="{{ route('Tipster.date', date('Y-m-d', strtotime($date . ' - 1 day')) ) }}" 
                class="btn btn-default btn-sm " >  
                Yesterday
            </a>   
            <a href="{{ route('Tipster.date', date('Y-m-d') ) }}" 
                class="btn btn-default btn-sm " >  
                Today
            </a>   
            <a href="{{ route('Tipster.date', date('Y-m-d', strtotime($date)) ) }}" 
                class="btn btn-default btn-sm " >  
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
                    ]) }}" type="button" 
                    class="btn btn-sm 
                    @if($tipster_id == $row->id)
                        btn-primary
                    @else
                        btn-black
                    @endif 
                    ">
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
                                <x-html.th-content title="Analisis"  />  
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        <div class="row"> 
                                            <div class="col-2">
                                                <?php 
                                                    $temp = explode(' ', $row->tanggal);
                                                    echo $temp[0];
                                                    echo '<br/>';
                                                    echo $temp[1];
                                                ?>   
                                            </div>
                                            <div class="col-2">
                                                {{ $row->league_country }} 
                                                <br/> 
                                                {{ $row->league_name }}
                                                <br/> 
                                                {{ $row->season }} 
                                            </div>
                                            <div class="col-2">
                                                {{ $row->teams_home }} 
                                                <br/>
                                                {{ $row->teams_away }} 
                                            </div>
                                            <div class="col-2">
                                                {{ $row->pre_mw_home_odd }} 
                                                <br/>
                                                {{ $row->pre_mw_away_odd }} 
                                                <br/>
                                                {{ $row->pre_mw_draw_odd }} 
                                            </div>
                                            <div class="col-2"> 
                                                Pattern : {{ $row->pattern_total }}
                                                <br/>
                                                level_{{ $row->level1 }}
                                                <br/>
                                                <br/> 
                                                {{ $row->mybt }}
                                            </div>
                                            <div class="col-2">
                                            </div>
                                        </div>    
                                        <div class="row mt-5 mb-5"> 
                                            <?php
                                                $pattern = $row->pre_ah_pattern;

                                                $temp_arr2 = str_replace('H', '', $pattern);

                                                $temp_arr3 = str_replace('_', '_H', $temp_arr2);
                                                
                                                $temp_arr4 = str_replace('+', '+H', $temp_arr3);

                                                $temp_arr5 = str_replace('#', 'H', $temp_arr4);

                                                $temp_arr = explode('H', $temp_arr5); 
 
                                            ?>
                                            <div class="col-3"> 
                                                <div class=" ">
                                                    @foreach($temp_arr as $rowmp)   
                                                        @if($rowmp != '')
                                                            <a href="{{route('Tipster.set_tips',  
                                                                        [
                                                                            'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                            'nama'    => 'Home', 
                                                                            'nilai'    =>  $rowmp, 
                                                                            'date'    =>  $date, 
                                                                        ])}}" 
                                                                    class="btn btn-default btn-sm" >
                                                                Ho{{$rowmp}}   
                                                            </a>    
                                                        @endif 
                                                    @endforeach    
                                                </div>
                                                <div class="mt-2"> 
                                                    @foreach($temp_arr as $rowmp)   
                                                        @if($rowmp != '')
                                                            <a href="{{route('Tipster.set_tips',  
                                                                        [
                                                                            'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                            'nama'    => 'Away', 
                                                                            'nilai'    =>  $rowmp, 
                                                                            'date'    =>  $date, 
                                                                        ])}}" 
                                                                    class="btn btn-default btn-sm" >
                                                                Aw{{$rowmp}}   
                                                            </a>    
                                                        @endif 
                                                    @endforeach   
                                                </div>
                                            </div>


                                            <?php
                                                $pattern = $row->pre_gou_pattern;
                                                $temp_gou_arr = explode('g', $pattern); 
                                            ?>
                                            <div class="col-3"> 
                                                <div class=" ">
                                                    @foreach($temp_gou_arr as $rowmp) 
                                                        @if($rowmp != 'G' && $rowmp != '')
                                                            <a href="{{route('Tipster.set_tips',  
                                                                        [
                                                                            'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                            'nama'    => 'Under', 
                                                                            'nilai'    =>  $rowmp, 
                                                                            'date'    =>  $date, 
                                                                        ])}}" 
                                                                    class="btn btn-default btn-sm" >
                                                                Un{{$rowmp}}   
                                                            </a>      
                                                        @endif
                                                    @endforeach   
                                                </div>
                                                <div class="mt-2">
                                                    @foreach($temp_gou_arr as $rowmp) 
                                                        @if($rowmp != 'G' && $rowmp != '')
                                                            <a href="{{route('Tipster.set_tips',  
                                                                        [
                                                                            'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                            'nama'    => 'Over', 
                                                                            'nilai'    =>  $rowmp, 
                                                                            'date'    =>  $date, 
                                                                        ])}}" 
                                                                    class="btn btn-default btn-sm" >
                                                                Ov{{$rowmp}}   
                                                            </a>      
                                                        @endif
                                                    @endforeach   
                                                </div>
                                            </div>


                                            <div class="col-2"> 
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                'nama'    => 'HomeWin', 
                                                                'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm" >
                                                    H  
                                                </a>   
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                'nama'    => 'AwayWin', 
                                                                'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm" >
                                                    A  
                                                </a>  
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                'nama'    => 'DrawWin', 
                                                                'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm" >
                                                    X  
                                                </a>  
                                                <br/>
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'     => $row->fixtureapi_id,
                                                                'tipster'           => $tipster_id, 
                                                                'nama'              => 'Under', 
                                                                'nilai'             => '15', 
                                                                'date'              => $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm mt-2" >
                                                    Un-15  
                                                </a>  
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'     => $row->fixtureapi_id,
                                                                'tipster'           => $tipster_id, 
                                                                'nama'              => 'Over', 
                                                                'nilai'             => '15', 
                                                                'date'              => $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm mt-2" >
                                                    Ov-15  
                                                </a>  
                                                <br/>
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'     => $row->fixtureapi_id,
                                                                'tipster'           => $tipster_id, 
                                                                'nama'              => 'Under', 
                                                                'nilai'             => '25', 
                                                                'date'              => $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm mt-2" >
                                                    Un-25  
                                                </a>  
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'     => $row->fixtureapi_id,
                                                                'tipster'           => $tipster_id, 
                                                                'nama'              => 'Over', 
                                                                'nilai'             => '25', 
                                                                'date'              => $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm mt-2" >
                                                    Ov-25  
                                                </a>  
                                                <br/>
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'     => $row->fixtureapi_id,
                                                                'tipster'           => $tipster_id, 
                                                                'nama'              => 'Under', 
                                                                'nilai'             => '35', 
                                                                'date'              => $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm mt-2" >
                                                    Un-35  
                                                </a>  
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'     => $row->fixtureapi_id,
                                                                'tipster'           => $tipster_id, 
                                                                'nama'              => 'Over', 
                                                                'nilai'             => '35', 
                                                                'date'              => $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm mt-2" >
                                                    Ov-35  
                                                </a>  
                                            </div>
                                            <div class="col-2"> 
                                                <div>
                                                    <a href="{{route('Tipster.set_tips',  
                                                                [
                                                                    'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                                'tipster'    => $tipster_id, 
                                                                    'nama'    => 'HomeDraw', 
                                                                    'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                                ])}}" 
                                                            class="btn btn-default btn-sm" >
                                                        1X  
                                                    </a>   
                                                    <a href="{{route('Tipster.set_tips',  
                                                                [
                                                                    'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                                'tipster'    => $tipster_id, 
                                                                    'nama'    => 'HomeAway', 
                                                                    'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                                ])}}" 
                                                            class="btn btn-default btn-sm" >
                                                        12  
                                                    </a>  
                                                    <a href="{{route('Tipster.set_tips',  
                                                                [
                                                                    'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                                'tipster'    => $tipster_id, 
                                                                    'nama'    => 'AwayDraw', 
                                                                    'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                                ])}}" 
                                                            class="btn btn-default btn-sm" >
                                                        2X  
                                                    </a>  
                                                </div>
                                                <div class="mt-2">
                                                    <a href="{{route('Tipster.set_tips',  
                                                                [
                                                                    'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                                'tipster'    => $tipster_id, 
                                                                    'nama'    => 'HomeDrawNoBet', 
                                                                    'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                                ])}}" 
                                                            class="btn btn-default btn-sm" >
                                                        Ho-dnb  
                                                    </a>   
                                                    <a href="{{route('Tipster.set_tips',  
                                                                [
                                                                    'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                                'tipster'    => $tipster_id, 
                                                                    'nama'    => 'AwayDrawNoBet', 
                                                                    'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                                ])}}" 
                                                            class="btn btn-default btn-sm" >
                                                        Aw-dnb  
                                                    </a>   
                                                </div>
                                            </div>
                                            <div class="col-2"> 
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                'nama'    => 'BTTSYes', 
                                                                'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm" >
                                                    BTyes  
                                                </a>   
                                                <a href="{{route('Tipster.set_tips',  
                                                            [
                                                                'fixtureapi_id'    => $row->fixtureapi_id, 
                                                                            'tipster'    => $tipster_id, 
                                                                'nama'    => 'BTTSNo', 
                                                                'nilai'    =>  '0', 
                                                                            'date'    =>  $date, 
                                                            ])}}" 
                                                        class="btn btn-default btn-sm" >
                                                    BTno  
                                                </a>   
                                            </div>
                                            

                                        </div> 
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
