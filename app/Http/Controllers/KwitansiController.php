<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
use Illuminate\Support\Facades\Storage;

use App\Models\Kwitansi; 

class KwitansiController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Kwitansi';

    public function index()
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = ucwords(str_replace("_"," ", $this->content));  
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 
            $data           = Kwitansi::whereNull('deleted_at')   
                                ->get();
                                    
        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    // 'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'data', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
 
    public function create()
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'create';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action  

        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    // 'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function store(Request $request)
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();  
            
        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action 
            $this->validate($request, [ 
                'perusahaan'        => 'required', 
                'alamat'            => 'required', 
                'kota'              => 'required', 

                'nomor_kwitansi'    => 'required',  
                'penerima'          => 'required',  
                'nominal'           => 'required',  
                'tanggal'           => 'required',  
                 
                'keterangan'        => 'required',  
            ]);
  
            if($request->stamp != '')
            {
                //upload image
                $image = $request->file('stamp');
                $image->storeAs('public/stamp', $image->hashName());

                $data = Kwitansi::create([ 
                    'perusahaan'        => $request->perusahaan,  
                    'alamat'            => $request->alamat,  
                    'kota'              => $request->kota,  

                    'nomor_kwitansi'    => $request->nomor_kwitansi,  
                    'penerima'          => $request->penerima,  
                    'nominal'           => $request->nominal,  
                    'tanggal'           => $request->tanggal,  
                    'keterangan'        => $request->keterangan,  

                    'stamp'             => $image->hashName(),
                ]); 
            } 
            else 
            {

                $data = Kwitansi::create([ 
                    'perusahaan'        => $request->perusahaan,  
                    'alamat'            => $request->alamat,  
                    'kota'              => $request->kota,  

                    'nomor_kwitansi'    => $request->nomor_kwitansi,  
                    'penerima'          => $request->penerima,  
                    'nominal'           => $request->nominal,  
                    'tanggal'           => $request->tanggal,  
                    'keterangan'        => $request->keterangan,  

                ]); 

            }


        // ----------------------------------------------------------- Send
            if($data)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }

    public function edit(Kwitansi $Kwitansi)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Agent
            $agent              = new Agent(); 
            $additional_view    = define_additionalview($agent->isDesktop(), $agent->isMobile(), $agent->isTablet());

        // ----------------------------------------------------------- Initialize
            $panel_name     = $this->content;
            
            $template       = $this->template;
            $mode           = $this->mode;
            $themecolor     = $this->themecolor;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'edit';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 

        // ----------------------------------------------------------- Send
            return view($view,  
                compact(
                    'template', 
                    'mode', 
                    'themecolor',
                    'content', 
                    'user', 
                    'panel_name', 
                    'active_as',
                    'view_file', 
                    'Kwitansi',   
                )
            );
        ///////////////////////////////////////////////////////////////
    }

    public function update(Request $request, Kwitansi $Kwitansi)
    {
        // ----------------------------------------------------------- Auth
            $user = auth()->user();  

        // ----------------------------------------------------------- Initialize
            $content        = $this->content;

        // ----------------------------------------------------------- Action
            $this->validate($request, [
                'nomor_kwitansi'    => 'required',  
                'penerima'          => 'required',  
                'nominal'           => 'required',  
                'tanggal'           => 'required',  
                'keterangan'        => 'required', 
            ]);
 
            $model = Kwitansi::findOrFail($Kwitansi->id);
             
            if($request->stamp != '')
            {
                $image = $request->file('stamp');
                $image->storeAs('public/stamp', $image->hashName());

                $model->update([
                    'perusahaan'        => $request->perusahaan,  
                    'alamat'            => $request->alamat,  
                    'kota'              => $request->kota,  

                    'nomor_kwitansi'    => $request->nomor_kwitansi,  
                    'penerima'          => $request->penerima,  
                    'nominal'           => $request->nominal,  
                    'tanggal'           => $request->tanggal,  
                    'keterangan'        => $request->keterangan,  
                    'stamp'             => $image->hashName(),
                ]); 

            }else{
                $model->update([
                    'perusahaan'        => $request->perusahaan,  
                    'alamat'            => $request->alamat,  
                    'kota'              => $request->kota,  
                    
                    'nomor_kwitansi'    => $request->nomor_kwitansi,  
                    'penerima'          => $request->penerima,  
                    'nominal'           => $request->nominal,  
                    'tanggal'           => $request->tanggal,  
                    'keterangan'        => $request->keterangan,  
                ]); 
            }
                
        // ----------------------------------------------------------- Send
            if($model)
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Success' => 'Data successfully saved!']);
            }
            else
            {
                return redirect()
                    ->route($content.'.index')
                    ->with(['Error' => 'Data Gagal Disimpan!']);
            }
        ///////////////////////////////////////////////////////////////
    }
}
