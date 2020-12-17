<?php
    if($_POST['method'] == 'processing'){
        $arr = explode(" ", $_POST['arr']);
        $n = count($arr);

        //for($i = 0; $i < $n; $i++){
        //    echo ($arr[$i]." ");
        //}

        $arrOut = [];
        for($i = 0; $i < $n; $i++){
            $countZero = 0;
            $arr[$i] = (int)$arr[$i];
            $arr[$i]= (string)$arr[$i];
            for($j = 0; $j<strlen($arr[$i]);$j++){
                if($arr[$i][$j] == "0"){
                    $countZero++;
                }
            }
            if($countZero == 2){
                echo("<mark>".$arr[$i]." </mark>");
            }
            else{
                echo($arr[$i]." ");
            }
        }
    }
?>