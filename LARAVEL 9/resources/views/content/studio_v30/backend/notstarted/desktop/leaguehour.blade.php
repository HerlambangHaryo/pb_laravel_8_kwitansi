@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    
    <div class="row mb-2">
        @forelse ($data as $row)     
            <div class="col-2 mb-2">
                <div class="card">
                    <div class="card-body">  
                        <small>
                            <a  href=" " 
                                class="text-decoration-none text-white">   
                                {{ $row->hour }}, {{ $row->count }}  
                            </a> 
                        </small>
                    </div>  
                </div>
            </div>
            @empty 
                
        @endforelse  
    </div>     
@endsection
