@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    

    <div class="row mb-2">
        <div class="col-12 text-center">    
            <a href="" 
                class="btn btn-default btn-sm" >  
                With Odds
            </a>        
        </div>
    </div> 
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                Data {!!$panel_name!!}
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table table-dark">
                        <thead class="table-dark">
                            <tr>               
                                <x-html.th-content-width title="Date" width="20%" /> 
                                <x-html.th-content-width title="Match" width="30%" /> 
                                <x-html.th-content-width title=" " width="5%" /> 
                                <x-html.th-content-width title="Match" width="30%" /> 
                                <x-html.th-content-width title="Action" width="15%"  />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->tanggal }}
                                        <br/>
                                        {{ $row->fixture_status }}
                                        <br/>
                                        {{ $row->league_country }}
                                        <br/>
                                        {{ $row->league_name }}
                                        {{ $row->season }}
                                    </td> 
                                    <td class="text-center">
                                        <img src="{{ $row->teams_home_logo }}" width="5%">
                                        {{ $row->teams_home }}
                                        <br/>
                                        {{ $row->goals_home }}
                                    </td> 
                                    <td class="text-center">
                                        vs
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->teams_away }}
                                        <img src="{{ $row->teams_away_logo }}" width="5%"> 
                                        <br/>
                                        {{ $row->goals_away }}
                                    </td> 
                                    <td class="text-center"> 
                                        <a href="{{ route('Headtohead.byhomeaway',
                                                [
                                                    'byhome'    => $row->teams_home,  
                                                    'byaway'    => $row->teams_away
                                                ] 
                                            ) }}" 
                                            class="btn btn-default btn-sm" >
                                            H2H  
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
