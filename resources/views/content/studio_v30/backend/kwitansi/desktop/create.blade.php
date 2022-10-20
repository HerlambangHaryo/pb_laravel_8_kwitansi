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
                 
                <form class="col-12" action="{{ route($content.'.store' ) }}" 
                    method="POST" 
                    enctype="multipart/form-data"> 
                    @csrf   

                    <div> 
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Perusahaan
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="perusahaan"
                                >
                            </div>
                        </div> 
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Alamat
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="alamat"
                                >
                            </div>
                        </div> 
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Kota
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="kota"
                                >
                            </div>
                        </div> 

                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Nomor
                            </label>
                            <div class="col-6">
                                <input 
                                    type="text" 
                                    class="form-control form-control-lg"  
                                    name="nomor_kwitansi"
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
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Stamp
                            </label>
                            <div class="col-2">
                                <input 
                                    type="file" 
                                    class="form-control form-control-lg"  
                                    name="stamp"
                                >
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-2 col-form-label">
                                Keterangan
                            </label>
                            <div class="col-6"> 
                                <textarea name="keterangan" class="form-control  form-control-lg " row="5"></textarea>
                            </div>
                        </div> 
                        
                    </div>

                    
                    <x-studio_v30.button-submit />
                </form>

            </div>            
        </div>
    </div>
@endsection
