@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')    

    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                Data : {!!$panel_name!!} 
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table table-dark">
                        <thead class="table-dark">
                            <tr>               
                                <x-html.th-first /> 
                                <x-html.th-content title="Nama"  /> 
                                <x-html.th-content title="Win%"  />  
                                <x-html.th-content title="Lose%"  />  
                                <x-html.th-content title="Play"  />  
                                <x-html.th-content title="Win"  />  
                                <x-html.th-content title="Draw"  /> 
                                <x-html.th-content title="Lose"  />  
                                <x-html.th-content title="Points"  />  
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center"> 
                                        {{ $row->id }}
                                    </td> 
                                    <td class="text-left">     
                                        {{ $row->nama }}      
                                    </td>  
                                    <td class="text-center"> 
                                        {{ number_format( $row->win_percentages , 2,",",".") }}
                                    </td> 
                                    <td class="text-center"> 
                                        {{ number_format( $row->lose_percentages , 2,",",".") }}
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->play }} 
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->win }} 
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->draw }} 
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->lose }} 
                                    </td> 
                                    <td class="text-center"> 
                                        {{ $row->points }} 
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
