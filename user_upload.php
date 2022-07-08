<?php
//read a file
if (($open = fopen("users.csv", "r")) !== FALSE) 
  {
  
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
    {        
      $array[] = $data; 
    }
  
    fclose($open);
  }
  
//To display array data
//var_dump($array);
//process the array
foreach ($array as $key => $value) {
    //echo "{$key} => {$value} ";
    if($key!=0)
    {
        //removing first entry
        $requiredArray[$key] = $value;
    }
   
}
function processVals($single)
{
    //var_dump($single); die();
    foreach ($single as $key => $singleValue) {
        //var_dump($singleValue);die();
        if($key == 0 || $key == 1){
            $finalArray[$key] = ucfirst($singleValue);
        }
        else{
            if(filter_var($singleValue, FILTER_VALIDATE_EMAIL)) {
                $finalArray[$key] = strtolower($singleValue);
            }
            else{
                $finalArray[$key] = "invalid-email";
            }
        }
    }
   // var_dump($finalArray);die();
    return $finalArray;
    
}

foreach ($requiredArray as $key => $singleValue) {
    //converting firstname and last name's first letter to uppercase and email in lowercase
    //var_dump($singleValue);die();
   $processedArr[$key] = processVals($singleValue);
}
print_r($processedArr);die();
//db connection , this is to be done in seperate file
// data processing
//data insertion to db

?>
