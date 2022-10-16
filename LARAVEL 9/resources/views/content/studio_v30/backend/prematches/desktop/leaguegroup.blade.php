@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
     
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
                                <x-html.th-content-width title="id" width="20%" />
                                <x-html.th-content title="League"   /> 
                                <x-html.th-content title="Season"   /> 
                                <x-html.th-content-width title="Action" width="15%"  />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->leagueapi_id }}
                                    </td> 
                                    <td class="text-left">  
                                        <img src="{{ $row->league_logo }}" width="5%">
                                        {{ $row->league_name }} 
                                    </td> 
                                    <td class="text-center">   
                                        {{ $row->season }}
                                    </td> 
                                    <td class="text-center"> 
                                        <a href="{{ route('Fixtures.byleagueseason',  
                                                [
                                                    'bycountry'     => $row->league_country, 
                                                    'byleague'      => str_replace(' ', '_', $row->league_name), 
                                                    'byseason'      => $row->season
                                                ]) }}" 
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
