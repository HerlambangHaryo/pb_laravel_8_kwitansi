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
                                <x-html.th-content title="Country"   /> 
                                <x-html.th-content-width title="Action" width="15%"  />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-left"> 
                                        <img src="{{ $row->league_flag }}" width="3%">
                                        {{ $row->league_country }} {{ $row->season }}
                                    </td> 
                                    <td class="text-center"> 
                                        <a href="{{ route('Leagues.bycountry', $row->league_country ) }}" 
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
