<?php

//task

//make a list of jokes
$jokes =[
    ' Your eyes are like the ocean; I could swim in them all day.',
    
    ' When I look in your eyes, I see a very kind soul.',
    
    'If you were a vegetable, you’d be a ‘cute-cumber.', 
    
    ' Do you happen to have a Band-Aid? ‘Cause I scraped my knees falling for you.',
    
    ' I never believed in love at first sight, but that was before I saw you.'
];

//randomly  select the one joke ffrom the lisst
$index = array_rand($jokes);
$joke = $jokes[$index];


//convert the jokes into the json format
$response = [
    "status" => 200,
    "joke" => $joke,
    "id" => $index
];
$jsonResponse = json_encode($response);

header('Access-Control-Allow-Origin: *');

//return the output json
echo $jsonResponse;