<?php
require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$number = $request->get('number');

if(is_numeric($number)){
    if($number > 5000){
        $responseString = 'I\'m only clever enough to handle numbers up to 5000. :(';
    }else{
        $rmc = new RomanNumeralsConverter();
        $rm = $rmc->convert($number);
        $responseString = 'The number '. $number . ' in roman numerals is: <br>';
        $responseString .= '<h3>'. $rm .'</h3>';
    }
}else{
    $responseString = 'I can \'t convert this.. Sorry!';
}
$response = new Response($responseString);

include('form.php');
