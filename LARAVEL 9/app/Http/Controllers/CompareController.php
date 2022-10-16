<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Jenssegers\Agent\Agent;
use DB;

use App\Models\Fixture_fin;
use App\Models\Apiaccount;

use App\Models\Rapidapi_predictions; 
use App\Models\Tips;

class CompareController extends Controller
{
    //
    public $template    = 'studio_v30';
    public $mode        = '';
    public $themecolor  = '';
    public $content     = 'Compare';

    public function pattern($fixtureapi_id,$code)
    {
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

            $view_file      = 'pattern_'.$code;
            $view           = 'content.'.$this->template.'.backend.'.strtolower($this->content).'.'.$additional_view.'.'.$view_file;
            
        // ----------------------------------------------------------- Action
            $first          = Fixture_fin::select( '*',
                                        DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal') )
                                    ->where('fixtureapi_id', '=', $fixtureapi_id)
                                    ->first();

            /* 
            $tips           = Tips::select(
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
                                        'tipsters.win_percentages',
                                        'tipsters.lose_percentages',
                                        'tips.nama',
                                        'tips.tipster_id',
                                        'tips.id',
                                        'tips.value',
                                        'tips.status',
                                        DB::raw('DATE_ADD(fixture_fins.date, INTERVAL 7 HOUR) as tanggal')
                                    )
                                    ->join('fixture_fins', 'fixture_fins.fixtureapi_id', '=', 'tips.fixtureapi_id')
                                    ->join('tipsters', 'tipsters.id', '=', 'tips.tipster_id')
                                    ->where('tips.fixtureapi_id', '=', $fixtureapi_id)
                                    ->whereNull('tips.status')
                                    ->whereNull('tips.deleted_at')   
                                    ->get();
                                    */
            
            $infs        = array('Not Started', 'Match Finished Ended', 'Match Finished');
  
  
            if(is_null($first->end_ah_pattern) && is_null($first->end_gou_pattern))
            {
                // Pre
                $data0  = Fixture_fin::select( '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal') )

                        ->where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 

                            ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                            ->where('league_country', 'like', $first->league_country)
                            ->whereIn('fixture_status', $infs) 
                                ->orderby('date');

                $data1  = Fixture_fin::select( '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal') )

                        ->where('end_ah_pattern', '=', $first->pre_ah_pattern)
                        ->where('end_gou_pattern', '=', $first->pre_gou_pattern) 

                            ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                            ->where('league_country', 'like', $first->league_country)
                            ->whereIn('fixture_status', $infs) 
                                ->orderby('date');
                // both
                $data2  = Fixture_fin::select( '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal') )

                        ->where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                        ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 

                        ->where('end_ah_pattern', '=', $first->pre_ah_pattern)
                        ->where('end_gou_pattern', '=', $first->pre_gou_pattern) 

                            ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                            ->where('league_country', 'like', $first->league_country)
                            ->whereIn('fixture_status', $infs) 
                                ->orderby('date'); 

                //-----------------------------------------------------------------------------

                $data3  = Fixture_fin::select( '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal') )

                        ->where('pre_ah_pattern', '=', $first->pre_ah_pattern_mirror)
                        ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 

                            ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                            ->where('league_country', 'like', $first->league_country)
                            ->whereIn('fixture_status', $infs) 
                                ->orderby('date');


                $data4  = Fixture_fin::select( '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal') )

                        ->where('end_ah_pattern', '=', $first->pre_ah_pattern_mirror)
                        ->where('end_gou_pattern', '=', $first->pre_gou_pattern) 

                            ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                            ->where('league_country', 'like', $first->league_country)
                            ->whereIn('fixture_status', $infs) 
                                ->orderby('date');
                // both
                $data  = Fixture_fin::select( '*',
                            DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal') )
                
                        ->where('pre_ah_pattern', '=', $first->pre_ah_pattern_mirror)
                        ->where('pre_gou_pattern', '=', $first->pre_gou_pattern) 

                        ->where('end_ah_pattern', '=', $first->pre_ah_pattern_mirror)
                        ->where('end_gou_pattern', '=', $first->pre_gou_pattern) 

                            ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                            ->where('league_country', 'like', $first->league_country)
                            ->whereIn('fixture_status', $infs) 
                                ->orderby('date')
                                ->union($data0) 
                                ->union($data1)  
                                ->union($data2)  
                                ->union($data3)  
                                ->union($data4)  
                                ->get(); 

            }else
            { 

                $data1           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('pre_ah_pattern', '=', $first->pre_ah_pattern)
                                ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $first->end_ah_pattern)
                                ->where('end_gou_pattern', '=', $first->end_gou_pattern)

                                ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                                ->where('league_country', 'like', $first->league_country)
                                ->whereIn('fixture_status', $infs) 
                                ->orderby('date');

                $data2           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                ) 

                                ->where('end_ah_pattern', '=', $first->end_ah_pattern)
                                ->where('end_gou_pattern', '=', $first->end_ah_pattern)

                                ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                                ->where('league_country', 'like', $first->league_country)
                                ->whereIn('fixture_status', $infs) 
                                ->orderby('date');
 

                $data3           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                ) 

                                ->where('end_ah_pattern', '=', $first->end_ah_pattern_mirror)
                                ->where('end_gou_pattern', '=', $first->end_gou_pattern)

                                ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                                ->where('league_country', 'like', $first->league_country)
                                ->whereIn('fixture_status', $infs) 
                                ->orderby('date');

                $data           = Fixture_fin::select(
                                    '*',
                                    DB::raw('DATE_ADD(date, INTERVAL 7 HOUR) as tanggal')
                                )
                                ->where('pre_ah_pattern', '=', $first->pre_ah_pattern_mirror)
                                ->where('pre_gou_pattern', '=', $first->pre_gou_pattern)

                                ->where('end_ah_pattern', '=', $first->end_ah_pattern_mirror)
                                ->where('end_gou_pattern', '=', $first->end_gou_pattern)

 

                                ->where('bookmakersapi_id', '=', $first->bookmakersapi_id)
                                ->where('league_country', 'like', $first->league_country)
                                ->whereIn('fixture_status', $infs) 
                                ->orderby('date') 
                                ->union($data1) 
                                ->union($data2) 
                                ->union($data3) 
                                ->get();

            }
 
            $model_Apiaccount   = Apiaccount::where('active', '=', 1)
                                        ->first();

        // ----------------------------------------------------------- Send
            return view($view, 
                compact(
                    'data', 
                    'content', 
                    'panel_name', 
                    'active_as', 
                    'view_file', 
                    'template' , 
                    'model_Apiaccount', 
                    'first', 
                    // 'tips'  
                )
            );
        ///////////////////////////////////////////////////////////////
    }


    public function prediction($fixtureapi_id, $status)
    {
        // ----------------------------------------------------------- Initialize 
            
            $apiaccount = Apiaccount::where('active', '=', 1)->first();

            if($apiaccount->counter > 0)
            {

                $curl = curl_init();

                curl_setopt_array($curl, [
                    CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/predictions?fixture=$fixtureapi_id",
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
                    $data = "cURL Error #:" . $err;
                } else {
                    $data = $response;


                    $decode = json_decode($data, true);
 

                    foreach ($decode['response'] as $row) 
                    {
                        Rapidapi_predictions::create([

                            'fixtureapi_id'        => $fixtureapi_id,

                            'prediction_winner_name'        => $row['predictions']['winner']['name'],
                            'prediction_winner_comment'     => $row['predictions']['winner']['comment'],

                            'prediction_underover'          => $row['predictions']['under_over'],

                            'prediction_goals_home'         => $row['predictions']['goals']['home'],
                            'prediction_goals_away'         => $row['predictions']['goals']['away'],

                            'prediction_advice'             => $row['predictions']['advice'],

                            'prediction_percent_home'       => str_replace('%', '', $row['predictions']['percent']['home']),
                            'prediction_percent_draw'       => str_replace('%', '', $row['predictions']['percent']['draw']),
                            'prediction_percent_away'       => str_replace('%', '', $row['predictions']['percent']['away']),

                            'comparison_form_home'          => str_replace('%', '', $row['comparison']['form']['home']),
                            'comparison_form_away'          => str_replace('%', '', $row['comparison']['form']['away']),

                            'comparison_att_home'           => str_replace('%', '', $row['comparison']['att']['home']),
                            'comparison_att_away'           => str_replace('%', '', $row['comparison']['att']['away']),

                            'comparison_def_home'           => str_replace('%', '', $row['comparison']['def']['home']),
                            'comparison_def_away'           => str_replace('%', '', $row['comparison']['def']['away']),

                            'comparison_h2h_home'           => str_replace('%', '', $row['comparison']['h2h']['home']),
                            'comparison_h2h_away'           => str_replace('%', '', $row['comparison']['h2h']['away']),
                            
                            'comparison_goals_home'         => str_replace('%', '', $row['comparison']['goals']['home']),
                            'comparison_goals_away'         => str_replace('%', '', $row['comparison']['goals']['away']),
                            
                            'comparison_poisson_distribution_home'         => str_replace('%', '', $row['comparison']['poisson_distribution']['home']),
                            'comparison_poisson_distribution_away'         => str_replace('%', '', $row['comparison']['poisson_distribution']['away']),
                            
                            'comparison_total_home'         => str_replace('%', '', $row['comparison']['total']['home']),
                            'comparison_total_away'         => str_replace('%', '', $row['comparison']['total']['away'])
                            
                        ]);
 
                    }
        

                }

                // ----------------------------------------------------------- Action
                    $model_fixture = Fixture_fin::where('fixtureapi_id', '=',$fixtureapi_id)
                                            ->first();

                    $apiaccount_model = Apiaccount::where('active', '=', 1);

                    $apiaccount_model->update([ 
                            'counter'        => $apiaccount->counter - 1, 
                        ]);

                // ----------------------------------------------------------- Send
                    return redirect() 

                        ->route('Compare.pattern', [
                            'fixtureapi_id' => $fixtureapi_id,
                            'code' => $status,
                        ]); 
            }
            else
            {
                // ----------------------------------------------------------- Send
                    return redirect()
                        ->route('Countries.index'); 

            }

        ///////////////////////////////////////////////////////////////
    }
}
