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
                                <x-html.th-first />  
                                <x-html.th-content title="Country" />  
                                <x-html.th-content title="Type" />  
                                <x-html.th-content title="League" />  
                                <x-html.th-last />  
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->leagueapi_id }}
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->country }}  
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->type }}  
                                    </td> 
                                    <td class="text-left">  
                                        <img src="{{ $row->league_logo }}" width="5%">
                                        {{ $row->name }}  
                                    </td>  
                                    <td class="text-center">  
                                        <a href="{{ route('Leagues.id', $row->leagueapi_id) }}" 
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
