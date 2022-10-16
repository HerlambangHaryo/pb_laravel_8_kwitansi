<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Fixture_fin;
use App\Models\Apiaccount;
use App\Models\League;

class FixturesController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Fixtures';
 
 
    public function leagueseason($leagueapi_id, $season)
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
            $model_league   = League::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)   
                                ->whereNull('deleted_at')   
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
                    'model_league', 
                    'leagueapi_id', 
                    'season', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
 
    public function match_finished_ended($leagueapi_id, $season)
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
            $model_league   = League::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)   
                                ->where('fixture_status', '=', 'Match Finished Ended')   
                                ->whereNull('deleted_at')   
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
                    'model_league', 
                    'leagueapi_id', 
                    'season', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
 
    public function not_started($leagueapi_id, $season)
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
            $model_league   = League::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)   
                                ->where('fixture_status', '=', 'Not Started')   
                                ->whereNull('deleted_at')   
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
                    'model_league', 
                    'leagueapi_id', 
                    'season', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 
 
    public function others($leagueapi_id, $season)
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
            $model_league   = League::where('leagueapi_id', '=', $leagueapi_id)
                                ->first();


            $data           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('leagueapi_id', '=', $leagueapi_id) 
                                ->where('season', '=', $season)   
                                ->whereNotIn('fixture_status',  ['Not Started', 'Match Finised', 'Match Finished Ended'])   
                                ->whereNull('deleted_at')   
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
                    'model_league', 
                    'leagueapi_id', 
                    'season', 
                )
            );
        ///////////////////////////////////////////////////////////////
    } 

    public function apifixture($league,$season)
    {
        // ----------------------------------------------------------- Initialize
            $panel_name     = '';
            
            $template       = $this->template;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$view_file;
            
            $apiaccount = Apiaccount::where('active', '=', 1)->first();
            
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/fixtures?league=$league&season=$season",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                    "x-rapidapi-key: $apiaccount->key"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $data = $response;


                $decode = json_decode($data, true);


                foreach ($decode['response'] as $row) 
                { 
                    $temp_date  = explode('+', $row['fixture']['date']);
                    $temp_date2 = str_replace('T', ' ', $temp_date[0]); 

                    $fixtureapi_id      = $row['fixture']['id'];
                    $date               = date('Y-m-d H:i:s', strtotime($temp_date2));

                    $fixture_status     = $row['fixture']['status']['long'];

                    $referee            = $row['fixture']['referee'];

                    $leagueapi_id       = $row['league']['id'];
                    $season             = $row['league']['season'];
                    $round              = $row['league']['round'];
                    $league_name        = $row['league']['name'];
                    $league_country     = $row['league']['country'];

                    $teams_home         = $row['teams']['home']['name'];
                    $teams_away         = $row['teams']['away']['name']; 

                    $goals_home         = $row['goals']['home'];
                    $goals_away         = $row['goals']['away'];

                    $score_halftime_home   = $row['score']['halftime']['home'];
                    $score_halftime_away   = $row['score']['halftime']['away'];

                    $score_fulltime_home    = $row['score']['fulltime']['home'];
                    $score_fulltime_away    = $row['score']['fulltime']['away'];

                    $score_extratime_home   = $row['score']['extratime']['home'];
                    $score_extratime_away   = $row['score']['extratime']['away'];

                    $score_penalty_home     = $row['score']['penalty']['home'];
                    $score_penalty_away     = $row['score']['penalty']['away'];
 

                    $venue_name            = $row['fixture']['venue']['name'];
                    $venue_city            = $row['fixture']['venue']['city']; 

                    $fixture_elapsed            = $row['fixture']['status']['elapsed'];

                    $teams_home_id            = $row['teams']['home']['id'];
                    $teams_away_id            = $row['teams']['away']['id']; 

                    $teams_home_logo            = $row['teams']['home']['logo'];
                    $teams_away_logo            = $row['teams']['away']['logo']; 

                    $league_logo            = $row['league']['logo'];
                    $league_flag            = $row['league']['flag']; 

                    Fixture_fin::create([
                        'venue_name'         => $venue_name,
                        'venue_city'         => $venue_city,

                        'fixture_elapsed'         => $fixture_elapsed,

                        'teams_home_id'         => $teams_home_id,
                        'teams_away_id'         => $teams_away_id,

                        'teams_home_logo'         => $teams_home_logo,
                        'teams_away_logo'         => $teams_away_logo,

                        'league_logo'         => $league_logo,
                        'league_flag'         => $league_flag,


                        'fixtureapi_id'         => $fixtureapi_id,
                        'date'                  => $date, 

                        'fixture_status'        => $fixture_status,

                        'referee'               => $referee,

                        'leagueapi_id'          => $leagueapi_id,
                        'season'                => $season,
                        'round'                 => $round,
                        'league_name'           => $league_name,
                        'league_country'        => $league_country,

                        'teams_home'            => $teams_home,
                        'teams_away'            => $teams_away, 

                        'goals_home'            => $goals_home,
                        'goals_away'            => $goals_away,

                        'score_halftime_home'  => $score_halftime_home,
                        'score_halftime_away'  => $score_halftime_away,

                        'score_fulltime_home'   => $score_fulltime_home,
                        'score_fulltime_away'   => $score_fulltime_away,

                        'score_extratime_home'  => $score_extratime_home,
                        'score_extratime_away'  => $score_extratime_away,
                        
                        'score_penalty_home'    => $score_penalty_home,
                        'score_penalty_away'    => $score_penalty_away,       
                    ]); 
                }

                $apiaccount_model = Apiaccount::where('active', '=', 1);

                $apiaccount_model->update([ 
                        'counter'        => $apiaccount->counter - 1, 
                    ]);
                
                return redirect()
                    ->route($content.'.leagueseason', [
                                                    'leagueapi_id' => $league, 
                                                    'season' => $season
                                                ])
                    ->with(['Success' => 'Data successfully saved!']);
            }

        // ----------------------------------------------------------- Action

        // ----------------------------------------------------------- Send

        ///////////////////////////////////////////////////////////////
    }

    public function apifixtureupdate($league,$season)
    {
        // ----------------------------------------------------------- Initialize
            $panel_name     = '';
            
            $template       = $this->template;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$view_file;
            
            $apiaccount = Apiaccount::where('active', '=', 1)->first();
            
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/fixtures?league=$league&season=$season",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                    "x-rapidapi-key: $apiaccount->key"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $data = $response;


                $decode = json_decode($data, true);


                foreach ($decode['response'] as $row) 
                { 
                    $fixtureapi_id      = $row['fixture']['id'];

                    $model_fixture      = Fixture_fin::where('fixtureapi_id', '=', $fixtureapi_id);

                    $temp_date          = explode('+', $row['fixture']['date']);
                    $temp_date2         = str_replace('T', ' ', $temp_date[0]); 

                    $date               = date('Y-m-d H:i:s', strtotime($temp_date2));
  
                    $referee            = $row['fixture']['referee'];

                    $leagueapi_id       = $row['league']['id'];
                    $season             = $row['league']['season'];
                    $round              = $row['league']['round'];
                    $league_name        = $row['league']['name'];
                    $league_country     = $row['league']['country'];

                    $teams_home         = $row['teams']['home']['name'];
                    $teams_away         = $row['teams']['away']['name']; 

                    $goals_home         = $row['goals']['home'];
                    $goals_away         = $row['goals']['away'];

                    $score_halftime_home   = $row['score']['halftime']['home'];
                    $score_halftime_away   = $row['score']['halftime']['away'];

                    $score_fulltime_home    = $row['score']['fulltime']['home'];
                    $score_fulltime_away    = $row['score']['fulltime']['away'];

                    $score_extratime_home   = $row['score']['extratime']['home'];
                    $score_extratime_away   = $row['score']['extratime']['away'];

                    $score_penalty_home     = $row['score']['penalty']['home'];
                    $score_penalty_away     = $row['score']['penalty']['away'];
 

                    $venue_name            = $row['fixture']['venue']['name'];
                    $venue_city            = $row['fixture']['venue']['city']; 

                    $fixture_elapsed            = $row['fixture']['status']['elapsed'];

                    $teams_home_id            = $row['teams']['home']['id'];
                    $teams_away_id            = $row['teams']['away']['id']; 

                    $teams_home_logo            = $row['teams']['home']['logo'];
                    $teams_away_logo            = $row['teams']['away']['logo']; 

                    $league_logo            = $row['league']['logo'];
                    $league_flag            = $row['league']['flag']; 

                    $model_fixture->update([     
                        'venue_name'         => $venue_name,
                        'venue_city'         => $venue_city,

                        'fixture_elapsed'         => $fixture_elapsed,

                        'teams_home_id'         => $teams_home_id,
                        'teams_away_id'         => $teams_away_id,

                        'teams_home_logo'         => $teams_home_logo,
                        'teams_away_logo'         => $teams_away_logo,

                        'league_logo'         => $league_logo,
                        'league_flag'         => $league_flag,


                        'fixtureapi_id'         => $fixtureapi_id,
                        'date'                  => $date,  

                        'referee'               => $referee,

                        'leagueapi_id'          => $leagueapi_id,
                        'season'                => $season,
                        'round'                 => $round,
                        'league_name'           => $league_name,
                        'league_country'        => $league_country,

                        'teams_home'            => $teams_home,
                        'teams_away'            => $teams_away, 

                        'goals_home'            => $goals_home,
                        'goals_away'            => $goals_away,

                        'score_halftime_home'  => $score_halftime_home,
                        'score_halftime_away'  => $score_halftime_away,

                        'score_fulltime_home'   => $score_fulltime_home,
                        'score_fulltime_away'   => $score_fulltime_away,

                        'score_extratime_home'  => $score_extratime_home,
                        'score_extratime_away'  => $score_extratime_away,
                        
                        'score_penalty_home'    => $score_penalty_home,
                        'score_penalty_away'    => $score_penalty_away,       
                    ]); 
                }

                $apiaccount_model = Apiaccount::where('active', '=', 1);

                $apiaccount_model->update([ 
                        'counter'        => $apiaccount->counter - 1, 
                    ]);
                
                return redirect()
                    ->route($content.'.leagueseason', [
                                                    'leagueapi_id' => $league, 
                                                    'season' => $season
                                                ])
                    ->with(['Success' => 'Data successfully saved!']);
            }

        // ----------------------------------------------------------- Action

        // ----------------------------------------------------------- Send

        ///////////////////////////////////////////////////////////////
    }
 
    public function apifixturenext($league,$season)
    {
        // ----------------------------------------------------------- Initialize
            $panel_name     = '';
            
            $template       = $this->template;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$view_file;
            
            $apiaccount = Apiaccount::where('active', '=', 1)->first();
            
            $curl = curl_init();

            curl_setopt_array($curl, [
                // CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/fixtures?league=$league&season=$season",
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/fixtures?league=$league&season=$season&next=50",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                    "x-rapidapi-key: $apiaccount->key"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $data = $response;


                $decode = json_decode($data, true);


                foreach ($decode['response'] as $row) 
                { 
                    $temp_date  = explode('+', $row['fixture']['date']);
                    $temp_date2 = str_replace('T', ' ', $temp_date[0]); 

                    $fixtureapi_id      = $row['fixture']['id'];
                    $date               = date('Y-m-d H:i:s', strtotime($temp_date2));

                    $fixture_status     = $row['fixture']['status']['long'];

                    $referee            = $row['fixture']['referee'];

                    $leagueapi_id       = $row['league']['id'];
                    $season             = $row['league']['season'];
                    $round              = $row['league']['round'];
                    $league_name        = $row['league']['name'];
                    $league_country     = $row['league']['country'];

                    $teams_home         = $row['teams']['home']['name'];
                    $teams_away         = $row['teams']['away']['name'];  

                    
 

                    $venue_name            = $row['fixture']['venue']['name'];
                    $venue_city            = $row['fixture']['venue']['city']; 

                    $fixture_elapsed            = $row['fixture']['status']['elapsed'];

                    $teams_home_id            = $row['teams']['home']['id'];
                    $teams_away_id            = $row['teams']['away']['id']; 

                    $teams_home_logo            = $row['teams']['home']['logo'];
                    $teams_away_logo            = $row['teams']['away']['logo']; 

                    $league_logo            = $row['league']['logo'];
                    $league_flag            = $row['league']['flag']; 
 


                    Fixture_fin::create([
                        'fixtureapi_id'         => $fixtureapi_id,
                        'date'                  => $date, 

                        'fixture_status'        => $fixture_status,
                        'fixture_elapsed'        => $fixture_elapsed,

                        'referee'               => $referee,

                        'leagueapi_id'          => $leagueapi_id,
                        'season'                => $season,
                        'round'                 => $round,
                        'league_name'           => $league_name,
                        'league_country'        => $league_country,

                        'teams_home'            => $teams_home,
                        'teams_away'            => $teams_away,  

                        'venue_name'         => $venue_name,
                        'venue_city'         => $venue_city,
                        
                        'teams_home_id'         => $teams_home_id,
                        'teams_away_id'         => $teams_away_id,

                        'teams_home_logo'         => $teams_home_logo,
                        'teams_away_logo'         => $teams_away_logo,

                        'league_logo'         => $league_logo,
                        'league_flag'         => $league_flag,
                    ]); 
                }

                
                $apiaccount_model = Apiaccount::where('active', '=', 1);

                $apiaccount_model->update([ 
                        'counter'        => $apiaccount->counter - 1, 
                    ]);
                
                return redirect()
                    ->route($content.'.leagueseason', [
                                                    'leagueapi_id' => $league, 
                                                    'season' => $season
                                                ])
                    ->with(['Success' => 'Data successfully saved!']);
            }

        // ----------------------------------------------------------- Action

        // ----------------------------------------------------------- Send

        ///////////////////////////////////////////////////////////////
    }
    
    public function apifixturestatistic($fixtureapi_id)
    {
        // ----------------------------------------------------------- Initialize
            $panel_name     = '';
            
            $template       = $this->template;
            $content        = $this->content;
            $active_as      = $content;

            $view_file      = 'data';
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$view_file;
            
            $apiaccount = Apiaccount::where('active', '=', 1)->first();
            
            $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/fixtures?id=$fixtureapi_id",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "x-rapidapi-host: api-football-v1.p.rapidapi.com",
                    "x-rapidapi-key: $apiaccount->key"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $data = $response;


                $decode = json_decode($data, true);

 
                
                foreach ($decode['response'] as $row) 
                {                            
                     
                    // -----------------------------------------------------------        
                        $fixtureapi_id      = $row['fixture']['id'];
      
                        $league             = $row['league']['id'];
                        $season             = $row['league']['season'];

                    // ----------------------------------------------------------- 


                        $model          = Fixture_fin::where('fixtureapi_id', '=', $fixtureapi_id); 
                        $model_first    = Fixture_fin::where('fixtureapi_id', '=', $fixtureapi_id)->first(); 

                        foreach ($row['lineups'] as $row2) 
                        { 
                            if($row2['team']['name'] == $model_first->teams_home) 
                            {
                                $lineups_coach_home_name    = $row2['coach']['name'];

                                $lineups_coach_home_photo    = Null;

                                if(isset($row2['coach']['photo']))
                                {
                                    $lineups_coach_home_photo    = $row2['coach']['photo'];
                                }

                                $lineups_formation_home     = $row2['formation']; 
                            }
                            elseif($row2['team']['name'] == $model_first->teams_away) 
                            { 
                                $lineups_coach_away_name    = $row2['coach']['name'];

                                $lineups_coach_away_photo    = Null;

                                if(isset($row2['coach']['photo']))
                                {
                                    $lineups_coach_away_photo    = $row2['coach']['photo'];
                                }

                                $lineups_formation_away     = $row2['formation'];
                            }
                        }
                        
                        foreach ($row['statistics'] as $row2) 
                        { 
                            if($row2['team']['name'] == $model_first->teams_home) 
                            { 
                                foreach ($row2['statistics'] as $row3) 
                                { 
                                    if($row3['type'] == 'Shots on Goal')
                                    {
                                        $shots_on_goal_home         = $row3['value'];
                                    }

                                    if($row3['type'] == 'Shots off Goal')
                                    {
                                        $shots_off_goal_home        = $row3['value'];
                                    }

                                    if($row3['type'] == 'Total Shots')
                                    {
                                        $total_shots_home           = $row3['value'];
                                    }

                                    if($row3['type'] == 'Blocked Shots')
                                    { 
                                        $blocked_shots_home         = $row3['value'];
                                    }

                                    if($row3['type'] == 'Shots insidebox')
                                    {
                                        $shots_inside_box_home      = $row3['value'];
                                    }

                                    if($row3['type'] == 'Shots outsidebox')
                                    {
                                        $shots_outside_box_home     = $row3['value'];
                                    }

                                    if($row3['type'] == 'Fouls')
                                    {
                                        $fouls_home                 = $row3['value'];
                                    }

                                    if($row3['type'] == 'Corner Kicks')
                                    {
                                        $corner_kicks_home          = $row3['value'];
                                    }

                                    if($row3['type'] == 'Offsides')
                                    {
                                        $offsides_home              = $row3['value'];
                                    }

                                    if($row3['type'] == 'Ball Possession')
                                    {
                                        $ball_possession_home       = str_replace('%', '', $row3['value']);
                                    }

                                    if($row3['type'] == 'Yellow Cards')
                                    {
                                        $yellow_cards_home          = $row3['value'];
                                    }

                                    if($row3['type'] == 'Red Cards')
                                    {
                                        $red_cards_home             = $row3['value'];
                                    }

                                    if($row3['type'] == 'Goalkeeper Saves')
                                    {
                                        $goalkeeper_saves_home      = $row3['value'];
                                    }

                                    if($row3['type'] == 'Total passes')
                                    {
                                        $total_passess_home         = $row3['value'];
                                    }

                                    if($row3['type'] == 'Passes accurate')
                                    {
                                        $passess_accurate_home      = $row3['value'];
                                    }

                                    if($row3['type'] == 'Passes %')
                                    {
                                        $passess_home               = str_replace('%', '', $row3['value']);;
                                    }

                                }
                            }
                            elseif($row2['team']['name'] == $model_first->teams_away) 
                            {
                                foreach ($row2['statistics'] as $row3) 
                                { 
                                    if($row3['type'] == 'Shots on Goal')
                                    {
                                        $shots_on_goal_away         = $row3['value'];
                                    }

                                    if($row3['type'] == 'Shots off Goal')
                                    {
                                        $shots_off_goal_away        = $row3['value'];
                                    }

                                    if($row3['type'] == 'Total Shots')
                                    {
                                        $total_shots_away           = $row3['value'];
                                    }

                                    if($row3['type'] == 'Blocked Shots')
                                    { 
                                        $blocked_shots_away         = $row3['value'];
                                    }

                                    if($row3['type'] == 'Shots insidebox')
                                    {
                                        $shots_inside_box_away      = $row3['value'];
                                    }

                                    if($row3['type'] == 'Shots outsidebox')
                                    {
                                        $shots_outside_box_away     = $row3['value'];
                                    }

                                    if($row3['type'] == 'Fouls')
                                    {
                                        $fouls_away                 = $row3['value'];
                                    }

                                    if($row3['type'] == 'Corner Kicks')
                                    {
                                        $corner_kicks_away          = $row3['value'];
                                    }

                                    if($row3['type'] == 'Offsides')
                                    {
                                        $offsides_away              = $row3['value'];
                                    }

                                    if($row3['type'] == 'Ball Possession')
                                    {
                                        $ball_possession_away       = str_replace('%', '', $row3['value']);;
                                    }

                                    if($row3['type'] == 'Yellow Cards')
                                    {
                                        $yellow_cards_away          = $row3['value'];
                                    }

                                    if($row3['type'] == 'Red Cards')
                                    {
                                        $red_cards_away             = $row3['value'];
                                    }

                                    if($row3['type'] == 'Goalkeeper Saves')
                                    {
                                        $goalkeeper_saves_away      = $row3['value'];
                                    }

                                    if($row3['type'] == 'Total passes')
                                    {
                                        $total_passess_away         = $row3['value'];
                                    }

                                    if($row3['type'] == 'Passes accurate')
                                    {
                                        $passess_accurate_away      = $row3['value'];
                                    }

                                    if($row3['type'] == 'Passes %')
                                    {
                                        $passess_away               = str_replace('%', '', $row3['value']);;
                                    }

                                }
                            }
                        }
 
                        $model->update([  
                            'lineups_coach_home_name'   => $lineups_coach_home_name,
                            'lineups_coach_away_name'   => $lineups_coach_away_name,

                            'lineups_coach_home_photo'   => $lineups_coach_home_photo,
                            'lineups_coach_away_photo'   => $lineups_coach_away_photo,

                            'lineups_formation_home'    => $lineups_formation_home,
                            'lineups_formation_away'    => $lineups_formation_away,

                            'shots_on_goal_home'        => $shots_on_goal_home,
                            'shots_on_goal_away'        => $shots_on_goal_away,

                            'shots_off_goal_home'       => $shots_off_goal_home,
                            'shots_off_goal_away'       => $shots_off_goal_away,

                            'total_shots_home'          => $total_shots_home,
                            'total_shots_away'          => $total_shots_away,

                            'blocked_shots_home'        => $blocked_shots_home,
                            'blocked_shots_away'        => $blocked_shots_away,

                            'shots_inside_box_home'     => $shots_inside_box_home,
                            'shots_inside_box_away'     => $shots_inside_box_away,

                            'shots_outside_box_home'    => $shots_outside_box_home,
                            'shots_outside_box_away'    => $shots_outside_box_away,

                            'fouls_home'                => $fouls_home,
                            'fouls_away'                => $fouls_away,

                            'corner_kicks_home'         => $corner_kicks_home,
                            'corner_kicks_away'         => $corner_kicks_away,

                            'offsides_home'             => $offsides_home,
                            'offsides_away'             => $offsides_away,

                            'ball_possession_home'      => $ball_possession_home,
                            'ball_possession_away'      => $ball_possession_away,

                            'yellow_cards_home'         => $yellow_cards_home,
                            'yellow_cards_away'         => $yellow_cards_away,
                            'red_cards_home'            => $red_cards_home,
                            'red_cards_away'            => $red_cards_away,

                            'goalkeeper_saves_home'     => $goalkeeper_saves_home,
                            'goalkeeper_saves_away'     => $goalkeeper_saves_away,

                            'total_passess_home'        => $total_passess_home,
                            'total_passess_away'        => $total_passess_away,

                            'passess_accurate_home'     => $passess_accurate_home,
                            'passess_accurate_away'     => $passess_accurate_away,

                            'passess_home'              => $passess_home,
                            'passess_away'              => $passess_away,  
                        ]); 
                }

                $apiaccount_model = Apiaccount::where('active', '=', 1);

                $apiaccount_model->update([ 
                        'counter'        => $apiaccount->counter - 1, 
                    ]);
                
                return redirect()
                    ->route($content.'.leagueseason', [
                                                    'leagueapi_id' => $league, 
                                                    'season' => $season
                                                ])
                    ->with(['Success' => 'Data successfully saved!']);
            }

        // ----------------------------------------------------------- Action

        // ----------------------------------------------------------- Send

        ///////////////////////////////////////////////////////////////
    }
}
