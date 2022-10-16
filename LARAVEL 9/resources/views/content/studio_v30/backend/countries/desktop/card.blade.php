@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')      
    
    <div class="row mb-2">
        @forelse ($data as $row)     
            <div class="col-6 col-md-3 mb-2">
                <div class="card">
                    <div class="card-body">  
                        <small>
                            <a  href="{{ route('Leagues.country', $row->league_country ) }}" 
                                class="text-decoration-none text-white">

                                <img src="{{ $row->league_flag }}" width="10%">
                                &nbsp;
                                {{ $row->league_country }}
                            </a> 
                        </small>
                    </div>  
                </div>
            </div>
            @empty 
                
        @endforelse  
    </div>   

@endsection