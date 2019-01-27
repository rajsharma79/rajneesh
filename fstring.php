<?php
// $str = "123?param=value";
//  $strlen = strlen($str);
// for( $i = 0; $i <= $strlen; $i++ ) {
    
//     $char = substr( $str, $i, 1 );
//     if( ! is_numeric( $char ) ) { break; }
//    echo  $id .= $char;
//     // $char contains the current character, so do your processing here
// }
// $str = 'This is an encoded string';
//  echo $encode_str= base64_encode($str);
//  echo '<br>';
// echo $decode_str= base64_decode($encode_str);
// echo '<br>';echo '<br>';echo '<br>';

// $decoded = "ABC123";
// function base64_encode2($data, $a = "+/=") {
//     $l = strlen($a);
//     if ($l === 3) {
//         return strtr(base64_encode($data), "+/=", $a);
//     } else if ($l === 2) {
//         return rtrim(strtr(base64_encode($data), "+/", $a), '=');
//     } else {
//         throw new InvalidArgumentException("Argument #2 must be 2 or 3 bytes.");
//     }
// }

// function base64_decode2($data, $strict = false, $a = "+/=") {
//     $l = strlen($a);
//     if ($l === 3) {    
//         return base64_decode(strtr($data, $a, "+/="), $strict);
//     } else if ($l === 2) {
//         return base64_decode(strtr($data, $a, "+/"), $strict);
//     } else {
//         throw new InvalidArgumentException("Argument #2 must be 2 or 3 bytes.");
//     }
// }
// $len= strlen($str);
// for($i=($len-1); $i>=0; $i++)
// {
// echo $str[$i];
// }
// base64 XML identifier:
    // echo $encoded = base64_encode2($decoded, "_:");
    //echo $decoded = base64_decode2($encoded, false, "_:");
    

//     function urlsafe_b64encode($string) {
//         $data = base64_encode($string);
//         //$data = str_replace(array('+','/','='),array('-','_',''),$data);
//         return $data;
//     }

//     $decoded = "ABC123";
//     echo $encoded = urlsafe_b64encode($decoded);




//     $str1 = 'football';
// $str2 = 'footboll';
// $str_pos = strspn($str1 ^ $str2, "\0");
// printf('First difference between two strings at position %d: "%s" vs "%s"',
// $str_pos, $str1[$str_pos], $str2[$str_pos]);
// printf("\n");

// Funbction find the great number from array

// function FindGrtNumArray(&$arraynumber){
//     $array = $arraynumber;
//     $max1 =0 ;
//     //$max2 = 0;
//    for($i=0; $i<count($array); $i++)
//     {
//         if($array[$i] > $max1)
//         {
//          $max1 = $array[$i];
//         }
//     }
//    // return $max1.'----'.$max2;
//    return $max1;
// }
// $array = array(10,25,55,784,12,789,852,741,456,264);
// echo $Number = FindGrtNumArray($array);

// function getMaxMin($arraynumber){

//     $array = $arraynumber;
//     $min = $array[0]; 
//     $max = $array[0]; 
//    for($i=0; $i<count($array); $i++)
//     {
//        if($array[$i] > $min)
//         {
//          $min = $array[$i];
//         }
//         if($array[$i] < $max)
//         {
//          $max = $array[$i];
//         }
//     }
//     return $min.'----'.$max;
 
// }
// $array = array(10,25,55,784,12,789,852,741,456,264);
// echo(getMaxMin($array)); 
// $array = array(10,25,55,784,12,789,852,741,456,264);
// $count_array = count($array);
// for($i=0;$i<$count_array;$i++){
//     for($j=$i;$j<$count_array;$j++){
//         if($array[$j] < $array[$i]){

//             $temp = $array[$i] ;
//             $array[$i] = $array[$j] ;
//             $array[$j] =$temp ;
          
//        }
    
//     }
  
// }
// echo '<pre>';
// print_r($array);
// class User
// {
//     // Hold an instance of the class
//     private static $instance;

//     private final function  __construct() {
//        ///echo __CLASS__ . " initialize only once ";
//     }
 
//     // The singleton method
//     public static function GetInstance()
//     {
//         if (!isset(self::$instance)) {
//             self::$instance = new User();
//         }
//         return self::$instance;
//     }
    
// }


// $obj1 = User::GetInstance();
// $obj2 = User::GetInstance();
// var_dump($obj1);
// var_dump($obj2);


function array_icount_values($array) {
    $ret_array = array();
    foreach($array as $value) {
        foreach($ret_array as $key2 => $value2) {
            if($key2 == $value) {
                $ret_array[$key2]++;
                continue 2;
            }
        }
        $ret_array[$value] = 1;
    }
    return $ret_array;
}
$ar = array('J. Karjalainen', 'J. Karjalainen', 60, '60', 'J. Karjalainen', 'j. karjalainen', 'Fastway', 'FASTWAY', 'Fastway', 'fastway', 'YUP');
$ar2 = array_icount_values($ar); // Normal matching
echo '<pre>';
print_r($ar2);




?>