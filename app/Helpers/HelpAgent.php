<?php 

    if(!function_exists('define_additionalview'))
    {
        function define_additionalview($isDesktop, $isMobile, $isTablet)
        {
            // ----------------------------------------------------------- Initialize 

            // ----------------------------------------------------------- Action   
                if($isDesktop == 1)
                {
                    $isi = 'desktop';
                }
                elseif($isTablet == 1)
                {
                    $isi = 'tablet';
                } 
                elseif($isMobile == 1)
                {
                    $isi = 'mobile';
                }  

            // ----------------------------------------------------------- Send
                $word = $isi;
                return $word;

            ///////////////////////////////////////////////////////////////
        }
    }