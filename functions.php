<?php

$myArray = [1,2,3,4,5,6,7,8,9,10];

echo $myArray[3];

// push a value to the end of the array
array_push($myArray,11);
print_r($myArray);

// $myString = "10,12,15,14,10,12,13,11,23,10";

// import the data.csv file to a string;
$myString = file_get_contents("data.csv");

echo $myString;

// explode the string into an array
$myArray = explode(",",$myString);

print_r($myArray);

// loop through the array and list values bigger then 15
foreach($myArray as $value){
    if($value > 12){
        echo $value . "<br>";
    }
}

$myLongString = "heeft een bepaalde lengte en bevat een bepaald woord";

echo strlen($myLongString);
// $myLenght = strlen($myLongString);
if (strlen($myLongString) > 20){
    echo "De string is langer dan 20 karakters kort het in aub..";
}
// USEFULL IS MYSQL COLUMN EQUALS VARCHAR(20)

/* strlen(): This function returns the length of a string.
substr(): This function returns a portion of a string based on a specified starting and ending point.
explode(): This function splits a string into an array based on a specified delimiter.
implode(): This function joins elements of an array into a string, using a specified delimiter.
print_r(): This function displays the contents of an array or object in a human-readable format.
file_get_contents(): This function reads the contents of a file and returns it as a string.
date(): This function formats a date and/or time according to specified parameters.
htmlspecialchars(): This function converts special characters to HTML entities, which can prevent XSS attacks.
json_encode(): This function converts a PHP variable into a JSON string.
array_push(): This function adds one or more elements to the end of an array. */

function myFunction($name){
    echo "Hello " . $name;
}

function myReturnFunction($name){
    return "Hello " . $name;
}

myFunction("John");

$myCustomVar = myReturnFunction("JohnReturn");
echo $myCustomVar;

function sanitizeInput ($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
// when not using a modern framework always sanitize your input
// $input = sanitizeInput($_POST['name']);

function getAge($birthDate){
   $today = new DateTime();
   $diff = $today->diff(new DateTime($birthDate));
   return $diff->y;
}

echo getAge(1977);

// calculate a discount based on a giver percentage
function calculateDiscount($price, $discountPercentage) {
$discountAmount = $price * ($discountPercentage / 100);
$discountPrice = $price - $discountAmount;
return $discountPrice;
}

echo calculateDiscount(130, 30);


function getDateInDutch() {
    $months = array(
      1 => 'januari',
      2 => 'februari',
      3 => 'maart',
      4 => 'april',
      5 => 'mei',
      6 => 'juni',
      7 => 'juli',
      8 => 'augustus',
      9 => 'september',
      10 => 'oktober',
      11 => 'november',
      12 => 'december'
    );
  
    $daysOfWeek = array(
      'zondag',
      'maandag',
      'dinsdag',
      'woensdag',
      'donderdag',
      'vrijdag',
      'zaterdag'
    );
  
    $month = $months[date('n')];
    $dayOfWeek = $daysOfWeek[date('w')];
    $dayOfMonth = date('j');
    $year = date('Y');
  
    return "$dayOfWeek $dayOfMonth $month $year";
  }

  echo getDateInDutch();

  function formatNumber($number, $decimalPlaces = 2, $thousandsSeparator = ',') {
    $formattedNumber = number_format($number, $decimalPlaces, '.', $thousandsSeparator);
    return $formattedNumber;
  }

  echo formatNumber(1000);