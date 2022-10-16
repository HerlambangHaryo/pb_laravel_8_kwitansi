@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  
    
 
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-6">
                        Form {{$panel_name}} 
                    </div>
                    <div class="col-6 text-right"> 
                    </div>

                </div>
            </div>
            <div class="card-body">    
                 
                <form action="{{ route($content.'.update', $Kwitansi->id ) }}" 
                    method="POST"> 
                    @csrf 
                    @method('PUT')

                    <div> 
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Nomor
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="nomor_kwitansi"
                                    value="{{ old('nomor_kwitansi', $Kwitansi->nomor_kwitansi) }}"
                                >
                            </div>
                        </div> 

                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Penerima
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="penerima"
                                    value="{{ old('penerima', $Kwitansi->penerima) }}"
                                >
                            </div>
                        </div> 

                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Nominal
                            </label>
                            <div class="col-4">
                                <input 
                                    type="number" 
                                    class="form-control form-control-lg"  
                                    name="nominal"
                                    value="{{ old('nominal', $Kwitansi->nominal) }}"
                                >
                            </div>
                        </div>

                        
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Tanggal
                            </label>
                            <div class="col-2">
                                <input 
                                    type="date" 
                                    class="form-control form-control-lg"  
                                    name="tanggal"
                                    value="{{ old('nominal', $Kwitansi->tanggal) }}"
                                >
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Keterangan
                            </label>
                            <div class="col-6"> 
                                <textarea name="keterangan" class="form-control  form-control-lg " row="5">{{ old('keterangan', $Kwitansi->keterangan) }}</textarea>
                            </div>
                        </div> 
                        
                    </div>

                    
                    <x-studio_v30.button-submit />
                </form>

            </div>            
        </div>
    </div>
@endsection
