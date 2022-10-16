<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;
 
use App\Models\Fixture_fin;

class Model_oneController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Model_one';

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

            $view_file      = 'data';
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
                                ->where('pattern_total', '>=', 3)
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
                                ->where('pattern_total', '>=', 3)
                                ->whereNull('deleted_at')   
                                ->get();
            }
                                    
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
                    'date', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
}
