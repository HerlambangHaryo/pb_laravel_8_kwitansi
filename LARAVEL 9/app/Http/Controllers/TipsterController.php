<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Tips;
use App\Models\Fixture_fin;
use App\Models\Tipster;

class TipsterController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Tipster';

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
                                
            $data           = Tipster::whereNull('deleted_at')   
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

    public function indexdate()
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

            $view_file      = 'indexdate';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 
            $data           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('date', '>=', date("Y-m-d H:i:s", strtotime("- 7 hour")))
                                ->where('date', '<=', date("Y-m-d", strtotime("+ 1 day"))) 
                                ->whereNull('deleted_at')   
                                ->get();
                                

            $data_tipster   = Tipster::whereNull('deleted_at')   
                                ->orderby('win_percentages','desc')  
                                ->orderby('points','desc')    
                                ->orderby('nama','asc')    
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
                    'data_tipster', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function date($date)
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

            $view_file      = 'date';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 

            if($date == date('Y-m-d'))
            {
                $data       = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                ) 
                                ->whereDate('date', '<=', $date)
                                ->where('date', '>=', date("Y-m-d H:i:s", strtotime("- 1 hour")))
                                ->where('fixture_status', '=', 'Not Started')
                                ->whereNull('deleted_at')   
                                ->get();

            }
            else
            {
                $data       = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                ) 
                                ->whereDate('date', '=', $date)
                                ->where('fixture_status', '=', 'Not Started')
                                ->whereNull('deleted_at')   
                                ->get();
            }

            

            $data_tipster   = Tipster::whereNull('deleted_at')   
                                ->orderby('win_percentages','desc') 
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
                    'data_tipster', 
                    'date', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function set_tipster($date, $tipster_id, $tipster_name)
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

            $view_file      = 'set_tipster';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 

            if($date == date('Y-m-d'))
            {
                $data       = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                ) 
                                ->whereDate('date', '<=', $date)
                                ->where('date', '>=', date("Y-m-d H:i:s", strtotime("- 1 hour")))
                                ->where('fixture_status', '=', 'Not Started')
                                ->whereNull('deleted_at')   
                                ->get();

            }
            else
            {
                $data       = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                ) 
                                ->whereDate('date', '=', $date)
                                ->where('fixture_status', '=', 'Not Started')
                                ->whereNull('deleted_at')   
                                ->get();
            }

            

            $data_tipster   = Tipster::whereNull('deleted_at')   
                                ->orderby('points','desc')   
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
                    'data_tipster', 
                    'date', 
                    'tipster_id', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function date_set_tipster($tipster_id, $tipster_name)
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

            $view_file      = 'date_set_tipster';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action 

            $data           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('date', '>=', date("Y-m-d H:i:s", strtotime("- 7 hour")))
                                ->where('date', '<=', date("Y-m-d", strtotime("+ 1 day"))) 


                                // ->where('date', '>=', date("Y-m-d", strtotime("- 3 day")))  
                                // ->where('date', '<=', date("Y-m-d", strtotime("+ 0 day"))) 

                                ->whereNull('deleted_at')   
                                ->get();
            


            $data_tipster   = Tipster::whereNull('deleted_at')   
                                ->orderby('win_percentages','desc')  
                                ->orderby('points','desc')    
                                ->orderby('nama','asc')    
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
                    'data_tipster',  
                    'tipster_id'
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
   
    public function set_tips($fixtureapi_id, $tipster_id, $nama, $value, $date)
    {
        // ----------------------------------------------------------- Agent 
            $data_tipster = tipster::where("id", "=", $tipster_id)->first();
            
        // ----------------------------------------------------------- Initialize 
            if($nama == 'Away')
            {
                if (str_contains($value, '_')) 
                { 
                    $temp = str_replace('_', '', $value);

                    $value = $temp;
                }
            }


            Tips::create([
                'fixtureapi_id'         => $fixtureapi_id, 
                'tipster_id'         => $tipster_id, 
                'nama'         => $nama, 
                'value'         => $value, 
                
            ]);
        // ----------------------------------------------------------- Action 

        // ----------------------------------------------------------- Send 

            return redirect()
                ->route('Tipster.set_tipster',
                    [
                        'date' => $date, 
                        'id' => $tipster_id, 
                        'nama' =>  str_replace(' ', '_', $data_tipster->nama)
                    ])
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////
    }
   
    public function date_set_tips($fixtureapi_id, $tipster_id, $nama, $value, $date)
    {
        // ----------------------------------------------------------- Agent 
            $data_tipster = tipster::where("id", "=", $tipster_id)->first();
            
        // ----------------------------------------------------------- Initialize 
            if($nama == 'Home')
            {
                if (str_contains($value, '_')) 
                { 
                    $temp = str_replace('_', '', $value);

                    $value = '-'.$temp;
                }
            }

            if($nama == 'Away')
            {
                if (str_contains($value, '_')) 
                { 
                    $temp = str_replace('_', '', $value);

                    $value = $temp;
                }
            }

            Tips::create([
                'fixtureapi_id'         => $fixtureapi_id, 
                'tipster_id'         => $tipster_id, 
                'nama'         => $nama, 
                'value'         => $value, 
                
            ]);
        // ----------------------------------------------------------- Action 

        // ----------------------------------------------------------- Send 

            return redirect()
                ->route('Tipster.date_set_tipster',
                    [ 
                        'id' => $tipster_id, 
                        'nama' =>  str_replace(' ', '_', $data_tipster->nama)
                    ])
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////
    }
}
