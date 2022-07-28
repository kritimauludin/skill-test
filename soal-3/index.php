<!-- tier 3 -->
<?php

    class SPE{
        public function narcissistic(int $value){
            // just positive number
            if ($value > 0){
                $arrayOfValue = str_split($value);
                $lengthOfValue = count($arrayOfValue);
                $narcissistic = 0;

                foreach($arrayOfValue as $arr){
                    $narcissistic += pow($arr, $lengthOfValue);
                }
                if($value == $narcissistic){
                    echo 'true </br>';
                }else{
                    echo 'false </br>';
                }
            }
        }

        function haystack($array, $key){
            $i = 0;
            foreach($array as $arr){
                if($arr == $key){
                    echo $i. '</br>';
                }
                $i++;
            }
        }
    }

    $spe = new SPE;
    $spe->narcissistic(1634);
    $spe->narcissistic(111);
    $spe->haystack(['red', 'blue', 'grey'], 'blue');