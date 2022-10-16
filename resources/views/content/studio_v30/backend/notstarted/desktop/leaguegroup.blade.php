@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    
    <div class="row mb-2">
        @forelse ($data as $row)     
            <div class="col-6 col-md-3 mb-2">
                <div class="card">
                    <div class="card-body">  
                        <small>
                            <a  href="{{ route('Notstarted.leaguedate',   
                                    [
                                        'leagueapi_id' => $row->leagueapi_id, 
                                        'date' => $date
                                    ]) }}" 
                                class="text-decoration-none text-white"> 

                                <img src="{{ $row->league_flag }}" width="20px">
                                {{ $row->league_country }} 
                                <br/>

                                <img src="{{ $row->league_logo }}" width="20px" >
                                {{ $row->league_name }} {{ $row->season }}    
                            </a> 
                        </small>
                    </div>  
                </div>
            </div>
            @empty 
                
        @endforelse  
    </div>     
@endsection
