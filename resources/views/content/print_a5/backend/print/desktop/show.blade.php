@extends('template.'.$template.'.a5_landscape')

@section('title', $panel_name)

@section('content')  

    

    <!-- Each sheet element should have the class "sheet" -->
    <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
    <section class="sheet padding-10mm">
 

        
            <div style="border-style: dashed; border-width: thin; height:400px; padding:15px;">
                <div>
                    <div style="font-size:20px; font-weight: bold;">
                        {{ $model->perusahaan }}
                    </div>
                    <span style="text-decoration: underline;">
                        @if(!is_null($model->alamat ))
                            {{ $model->alamat }}, 
                        @endif
                        
                        {{ $model->kota }}
                    </span> 
                </div> 
                
                <div style="text-align: center;   text-transform: uppercase; margin-top:15px; margin-bottom:20px ">
                    <span style="font-size:20px; font-weight: bold; text-decoration: underline;">
                        Kwitansi
                    </span>
                    <br/>

                    <span style="font-size:14px; font-style: italic;">
                        {{$model->nomor_kwitansi}}
                    </span>
                </div>

                <div>
                    <table style="vertical-align: text-top;" width="100%">
                        <tr style="">
                            <td width="150px"  style="vertical-align: text-top; padding-top:30px: padding-bottom:30px;">
                                Sudah Terima Dari
                            </td>
                            <td width="20px">:</td>
                            <td>
                                {{$model->penerima}} 
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                Banyaknya Uang
                            </td>
                            <td>:</td>
                            <td  style=" font-weight: bold;">
                                ## {{ ucwords(terbilang($model->nominal) ) }} Rupiah ##
                                
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Untuk Pembayaran
                            </td>
                            <td>:</td>
                            <td>
                                
                                {{$model->keterangan}}
                            </td>
                        </tr>
                    </table>
                </div>

                <div style="margin-top:30px;">
                    <div style="width:50%; float: left;">
                        <span style="border-style: solid; border-width: thin; padding:10px; font-style: italic;">
                            Rp.{{ number_format($model->nominal,0,",",".") }},-
                        </span>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <br/>
                        <span style="font-size:9px;">
                            Catatan:
                        </span>
                        <span style="font-size:9px;">
                            Untuk Pembayaran Via Bank.
                        </span>
                    </div>
                    <div  style="width:50%; float: right; text-align:center;">
                        Surabaya, {{$model->tanggal}}
                        @if(!is_null($model->stamp)) 
                            <br/>
                            <img 
                                src="{{ asset('/public/storage/stamp/').'/'.$model->stamp }}" 
                                class="rounded mx-auto d-block" 
                                width="75" >
                            <br/>
                        @else
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                        @endif
                        <span style="text-decoration: underline;">
                            Pimpinan

                        </span>

                    </div>
                </div>
            </div>

    </section>
 
  
@endsection
