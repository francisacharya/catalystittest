<?php
/*
Create a PHP script that is executed form the command line. The script should:
• Output the numbers from 1 to 100
• Where the number is divisible by three (3) output the word “foo”
• Where the number is divisible by five (5) output the word “bar”
• Where the number is divisible by three (3) and (5) output the word “foobar”
1, 2, foo, 4, bar, foo, 7, 8, foo, bar, 11, foo, 13, 14, foobar ...
• Only be a single PHP file
*/
$resultString = "";
for($i=1;$i<101;$i++){
    if($i % 3 == 0 && $i % 5 == 0){
        $resultString = $resultString . "foobar";
    }
    elseif($i % 3 == 0){
        $resultString = $resultString . "foo";
    }
    elseif($i % 5 == 0){
        $resultString = $resultString . "bar";
    }
    else{
        $resultString = $resultString . strval($i);
    }
    if($i != 100){
        $resultString = $resultString . ', ';
    }
}
echo $resultString;

?>