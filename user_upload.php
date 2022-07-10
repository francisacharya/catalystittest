<?php
include('database.php');
//db connection , this is to be done in seperate file
$conn = db_connect();
var_dump($conn);
/**

 * @param Arr $single 

 * @return Arr $finalArray 

 */
function processVals($single)
{
    //var_dump($single); die();
    foreach ($single as $key => $singleValue) {
        //var_dump($singleValue);die();
        //converting firstname and last name's first letter to uppercase and email in lowercase
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
//read a file
if (($open = fopen("users.csv", "r")) !== FALSE) 
{

while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
{        
    $array[] = $data; 
}

    fclose($open);
}
  
//To display array data without headings

$requiredArray = array_slice($array, 1);

foreach ($requiredArray as $key => $singleValue) {
    //var_dump($singleValue);die();
   $processedArr[$key] = processVals($singleValue);
}
print_r($processedArr);die();

// data processing before insert to db
//data insertion to db

/*
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32;
*/

?>
