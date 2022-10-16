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
                                <x-html.th-content title="Date" />
                                <x-html.th-content title="Country" />
                                <x-html.th-content title="League" />
                                <x-html.th-content title="Season" />
                                <x-html.th-content title="Match" />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->tanggal }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->league_country }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->league_name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $row->season }}
                                    </td> 
                                    <td class="text-center">
                                        {{ $row->teams_home }}<br/>
                                        {{ $row->teams_away }}
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
