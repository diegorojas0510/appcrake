<?php
require_once '../DAO/keyDAO.php';

$string = $_POST["mensaje"];
//$new_str = "";

for ($i = 0; $i < strlen($string); $i++)
{
    $char = substr($string, $i, 1);
    $new_str = $new_str.searchLetters($char);
}

echo $new_str;


function searchLetters($letter){

foreach (keyDAO::searchLetter($letter) as $row){

    $char = $row[0];
    //echo $char;

    return $char;

}   

}
 
 header("Location: ../views/result.php?string={$string}&new_str={$new_str}");

?>