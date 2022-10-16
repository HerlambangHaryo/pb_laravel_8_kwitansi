<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Tips;
use App\Models\Fixture_fin;
use App\Models\Tipster;

class TipsController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Tips';

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
                                
            $data           = Tips::select(
                                    'fixture_fins.date',
                                    'fixture_fins.fixtureapi_id',
                                    'fixture_fins.league_country',
                                    'fixture_fins.season',
                                    'fixture_fins.league_name',
                                    'fixture_fins.fixture_status',
                                    'fixture_fins.teams_home',
                                    'fixture_fins.teams_away',
                                    'fixture_fins.pre_mw_home_odd',
                                    'fixture_fins.pre_mw_away_odd',
                                    'fixture_fins.pre_mw_draw_odd',
                                    'fixture_fins.goals_home',
                                    'fixture_fins.goals_away',
                                    'tipsters.nama as nama_tipster',
                                    'tips.nama',
                                    'tips.tipster_id',
                                    'tips.id',
                                    'tips.value',
                                    'tips.status',
                                    DB::raw('DATE_ADD(fixture_fins.date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->join('fixture_fins', 'fixture_fins.fixtureapi_id', '=', 'tips.fixtureapi_id')
                                ->join('tipsters', 'tipsters.id', '=', 'tips.tipster_id')
                                ->whereNull('tips.status')
                                ->whereNull('tips.deleted_at')   
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
 
    public function archives()
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
                                
            $data           = Tips::select(
                                    'fixture_fins.date',
                                    'fixture_fins.fixtureapi_id',
                                    'fixture_fins.league_country',
                                    'fixture_fins.season',
                                    'fixture_fins.league_name',
                                    'fixture_fins.fixture_status',
                                    'fixture_fins.teams_home',
                                    'fixture_fins.teams_away',
                                    'fixture_fins.pre_mw_home_odd',
                                    'fixture_fins.pre_mw_away_odd',
                                    'fixture_fins.pre_mw_draw_odd',
                                    'fixture_fins.goals_home',
                                    'fixture_fins.goals_away',
                                    'tipsters.nama as nama_tipster',
                                    'tips.nama',
                                    'tips.tipster_id',
                                    'tips.id',
                                    'tips.value',
                                    'tips.status',
                                    DB::raw('DATE_ADD(fixture_fins.date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->join('fixture_fins', 'fixture_fins.fixtureapi_id', '=', 'tips.fixtureapi_id')
                                ->join('tipsters', 'tipsters.id', '=', 'tips.tipster_id')
                                ->whereNotNull('tips.status')
                                ->whereNull('tips.deleted_at')   
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

    public function set_status($id, $tipster_id, $status)
    {
        // ----------------------------------------------------------- Auth
            // $user = auth()->user();  

        // ----------------------------------------------------------- Agent 
        // ----------------------------------------------------------- Initialize 
            $model_tips         = Tips::where('id', '=', $id);  
            $model_tips->update([ 
                'status'      => $status, 
            ]);        

        // ----------------------------------------------------------- Action  

            $points             = Tips::where('tipster_id', '=', $tipster_id)
                                    ->sum('status');

            $win                = Tips::where('tipster_id', '=', $tipster_id)
                                    ->where('status', '=', '3')
                                    ->count();

            $lose                = Tips::where('tipster_id', '=', $tipster_id)
                                    ->where('status', '=', '0')
                                    ->count();

            $lose                = Tips::where('tipster_id', '=', $tipster_id)
                                    ->where('status', '=', '0')
                                    ->count();

            $draw                = Tips::where('tipster_id', '=', $tipster_id)
                                    ->where('status', '=', '1')
                                    ->count();

            $total                = Tips::where('tipster_id', '=', $tipster_id)
                                    ->whereNotNull('status')
                                    ->count();
                                    

            $model_tipster      = Tipster::where('id', '=', $tipster_id); 
            $model_tipster->update([ 
                'play'    => $total, 
                'points'    => $points, 
                'win'       => $win, 
                'lose'      => $lose, 
                'draw'      => $draw, 
                'win_percentages'      => (($win / $total) * 100),
                'lose_percentages'      => (($lose / $total) * 100),
            ]);        
            
        // ----------------------------------------------------------- Send  
            return redirect()
                ->route('Tips.index')
                ->with(['Success' => 'Data successfully saved!']);
        ///////////////////////////////////////////////////////////////
    } 
}
