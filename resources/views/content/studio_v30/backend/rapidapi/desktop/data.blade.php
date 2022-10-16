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
                                <x-html.th-content-width title="No." width="10%" />
                                <x-html.th-content title="Account"   /> 
                                <x-html.th-content title="Browser"   /> 
                                <x-html.th-content title="Active"   /> 
                                <x-html.th-content title="Counter"   /> 
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
                                        {{ $row->account }}  
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->browser }}  
                                    </td> 
                                    <td class="text-center"> 
                                        @if($row->active == 1)
                                            <i class="fa-solid fa-toggle-on"></i>
                                        @endif  
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->counter }}   
                                    </td> 
                                    <td class="text-center"> 
                                        <a href="{{ route('Rapidapi.reset', $row->id ) }}" 
                                            class="btn btn-default btn-sm" >
                                            Reset  
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
