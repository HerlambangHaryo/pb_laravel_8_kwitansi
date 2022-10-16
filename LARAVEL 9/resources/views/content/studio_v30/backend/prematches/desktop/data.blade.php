@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    

    <div class="row mb-4">
        <div class="col-12 text-center">   
            <a href="{{ route('Notstarted.leaguegroup') }}" 
                class="btn btn-default btn-sm" >  
                League Group
            </a>     
            <a href="" 
                class="btn btn-default btn-sm" >  
                With Odds
            </a>        
        </div>
    </div> 

    
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                Data : {!!$panel_name!!}
                <br/>
                Date : {{date("Y-m-d H:i:s", strtotime("- 7 hour"))}}
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table table-dark">
                        <thead class="table-dark">
                            <tr>               
                                <x-html.th-content-width title="Date" width="20%" />
                                <x-html.th-content-width title="Country" width="15%" />
                                <x-html.th-content-width title="League" width="20%" /> 
                                <x-html.th-content-width title="Match" width="30%" /> 
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
                                        <img src="{{ $row->league_flag }}" width="10%">
                                        {{ $row->league_country }} {{ $row->season }}
                                    </td>
                                    <td class="text-left">
                                        <img src="{{ $row->league_logo }}" width="10%">
                                        {{ $row->league_name }}  

                                    </td> 
                                    <td class="text-center">
                                        <img src="{{ $row->teams_home_logo }}" width="5%">
                                        {{ $row->teams_home }}  -
                                        {{ $row->teams_away }}
                                        <img src="{{ $row->teams_away_logo }}" width="5%"> 
                                    </td> 
                                    <td class="text-center"> 
                                        @if($row->league->bookmakersapi_id != '')
                                            <a href=" " 
                                                class="btn btn-default btn-sm" >
                                                Pre  
                                            </a>     
                                            <a href=" "
                                                class="btn btn-default btn-sm" >
                                                Date {{}}
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
