
@if(is_null($first->rapidapi_predictions->prediction_percent_home))
    <div class="row mb-4">
        <div class="col-12 text-center">    
            <a href="{{ route('Compare.prediction', 
                    [
                        'fixtureapi_id' => $first->fixtureapi_id, 
                        'code'          => 'mw',   
                    ]
                ) }}" 
                class="btn btn-default btn-sm" >  
                <i class="fas fa-receipt"></i> 
                Prediction
            </a> 
        </div>
    </div>
@endif 