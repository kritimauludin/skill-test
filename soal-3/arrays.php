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
            }else {
                echo 'your number not valid </br>';
            }
        }

        function outlier($array){
            $odd = 0; $even = 0;
            foreach($array as $arr){
                if($arr % 2 == 0){
                    $even+=1;
                    $valueEven[] = $arr;
                }else {
                    $odd+=1;
                    $valueOdd[] = $arr;
                }
            }

            if($even == 0){
                echo ' false (all odd integer, no outlier) </br>';
            }else if($odd == 0){
                echo ' false (all even integer, no outlier) </br>';
            }else if($odd == 1){
                echo $valueOdd[0].' (the only odd number) </br>';
            }else if($even == 1){
                echo $valueEven[0].' (the only even number) </br>';
            }
        }
    

        function haystack($array, $key){
            $i = 0;
            foreach($array as $arr){
                if($arr == $key){
                    echo 'This function should return '.$i.' as the index of the needle ('.$arr.') </br>';
                }
                $i++;
            }
        }

        function blueOcean($array, $key){
            $i = 0;
            $switchArray = null;
            $key =  implode("", $key);
            foreach($array as $arr){
                if($arr == $key){
                    $switchArray = $i;
                    if($array[$switchArray] !== $arr){
                        $newArray[$i] = $arr;
                    }
                }else{
                    $newArray[$i] = $arr;
                }

                $i++;
            }

            // return the new array
            $i = 0;
            $lastIndex = count($newArray)-1;
            echo 'Should return [';
            foreach($newArray as $arr){
                if($i != $lastIndex){
                    echo $arr.',';
                }else{
                    echo $arr;
                }
                $i++;
            }
            echo '] because '.$key.' is present in the second list </br>';
        }
    }

    $spe = new SPE;
    $spe->narcissistic(1634);
    $spe->narcissistic(111);
    $spe->narcissistic(-111);
    $spe->outlier([2, 4, 0, 100, 4, 11, 2602, 36]);
    $spe->outlier([160, 3, 1719, 19, 11, 13, -21]);
    $spe->outlier([11, 13, 15, 19, 9, 13, -21]);
    $spe->outlier([2, 4, 10, 20, 8, 6, 4]);
    $spe->haystack(['red', 'blue', 'grey'], 'blue');
    $spe->haystack(['red', 'blue', 'grey'], 'red');
    $spe->blueOcean([1,2,3,4,6,10], [1]);
    $spe->blueOcean([1,5,5,5,5,3], [5]);