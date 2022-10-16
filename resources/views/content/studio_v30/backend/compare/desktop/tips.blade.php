
<!--
<div class="row mb-3">
    <div class="col-6 text-end  mb-3"> 
        <img src="{{ $first->teams_home_logo }}" width="20px">
        {!! $first->teams_home !!} 
        
        {!! $first->goals_home !!} 
    </div>
    <div class="col-6  mb-3"> 
        {!! $first->goals_away !!} 
        {!! $first->teams_away !!} 
        <img src="{{ $first->teams_away_logo }}" width="20px">
    </div>
    @foreach($tips as $row)
        <div class="col-2">  
            <div class="card mb-3">
                <div class="card-header">
                    <div class="row"> 
                        <div class="col">
                            {{ $row->nama_tipster }}
                        </div> 
                    </div>
                </div>
                <div class="card-body text-center">  
                    {{ $row->nama }}  {{ $row->value }} 
                </div>
                <div class="card-footer text-center">
                    <div class="row"> 
                        <div class="col">
                            <small class="text-muted">
                                {{ number_format( $row->win_percentages , 2,",",".") }}
                            </small>  
                        </div>
                        <div class="col">
                            <small class="text-muted">
                                {{ number_format( $row->lose_percentages , 2,",",".") }}
                            </small>  
                        </div> 
                    </div>
                </div>
            </div>
            
        </div>
    @endforeach
</div>
-->