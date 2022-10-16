<?php
    $total_rows = count($data);

    $btts_yes = 0;
    $btts_no = 0; 



    foreach ($data as $row) 
    {
        // BTTS
        if($row->goals_home > 0 && $row->goals_away > 0)
        {
            $btts_yes += 1;
        }
        else
        {
            $btts_no += 1; 
        }
    }
?>
 