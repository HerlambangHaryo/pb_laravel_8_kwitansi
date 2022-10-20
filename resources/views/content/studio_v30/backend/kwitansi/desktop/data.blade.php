@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    
 
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Data {{$panel_name}} 
                    </div>
                    <div class="col-6 text-right">
                        <x-studio_v30.button-create content="{!! $content !!}" />
                    </div>

                </div>
            </div>
            <div class="card-body">      
                <div>
                    <table id="datatableDefault" class="table table-dark">
                        <thead class="table-dark">
                            <tr>               
                                <x-html.th-first />
                                <x-html.th-content title="Tanggal" /> 
                                <x-html.th-content title="Perusahaan" /> 
                                <x-html.th-content title="Nomor" /> 
                                <x-html.th-content title="Penerima" /> 
                                <x-html.th-content title="Nominal" /> 
                                <x-html.th-content title="Stamp" /> 
                                <x-html.th-content title="Keterangan" /> 
                                <x-html.th-content title="Action" />
                            </tr>
                        </thead>
                        <tbody>   

                            @forelse ($data as $row)
                                <tr>
                                    <td class="text-center">
                                        {{ $row->id }}
                                    </td>
                                    <td class="text-center">  
                                        {{ $row->tanggal }}
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->perusahaan }}
                                        <br/>
                                        {{ $row->alamat }},
                                        {{ $row->kota }}.
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->nomor_kwitansi }}
                                    </td> 
                                    <td class="text-center">  
                                        {{ $row->penerima }}
                                    </td> 
                                    <td class="text-end">  
                                        Rp.{{ number_format($row->nominal,0,",",".") }},-
                                    </td> 
                                    <td class="">  
                                        <img 
                                        src="{{ asset('/public/storage/stamp/').'/'.$row->stamp }}" 
                                        class="rounded mx-auto d-block" 
                                        width="100" > 
                                    </td> 
                                    <td class="">  
                                        {{ $row->keterangan }}
                                    </td> 
                                    <td class="text-center"> 
                                        <div class="btn-group btn-group-sm">
                                            <a 
                                                href="{{ route($content.'.edit', $row->id) }}"
                                                type="button" class="btn btn-secondary">
                                                <i class="far fa-edit"></i>
                                                Edit
                                            </a> 
                                            
                                            <a 
                                                href="{{ route('Print.show', $row->id) }}"
                                                type="button" class="btn btn-primary"
                                                target="_blank">
                                                <i class="fas fa-print"></i>
                                                Print
                                            </a>  
                                        </div> 
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
