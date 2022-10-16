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
                                <x-html.th-content-width title="season" width="20%" />
                                <x-html.th-content title="League"   />  
                                <x-html.th-content-width title="Action" width="15%"  />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->season }}
                                    </td> 
                                    <td class="text-left">  
                                        <img src="{{ $row->league_logo }}" width="5%">
                                        {{ $row->league_name }}  
                                    </td>  
                                    <td class="text-center"> 
                                        <a href="{{ route('Fixtures.leagueseason',  
                                                [ 
                                                    'leagueapi_id'  => $row->leagueapi_id, 
                                                    'season'        => $row->season
                                                ])
                                            }}" 
                                            class="btn btn-default btn-sm" >
                                            View  
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
