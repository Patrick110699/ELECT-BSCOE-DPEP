<!DOCTYPE html>
<html> 
    <head>
    <title>Array</title> 
    </head>

<body>

<?php

$arrStud = array(
    array(
        "Firstname" => "Juan", 
        "Lastname" =>"Dela Cruz", 
        "Course" => "Bachelor of Science in Computer Engineering",
        "Year Level" =>"First Year",
        "Prelim" =>91,
        "Midterm"=>88,
        "Final"=>97, 
    ),

    array(
        "Firstname" => "John", 
        "Lastname" =>"Dee", 
        "Course" => "Bachelor of Science in Computer Engineering",
        "Year Level" =>"First Year",
        "Prelim" =>81,
        "Midterm"=>85,
        "Final"=>91, 
    ),
    
    array(
        "Firstname" => "Peter", 
        "Lastname" =>"Cruz", 
        "Course" => "Bachelor of Science in Computer Engineering",
        "Year Level" =>"Second Year",
        "Prelim" =>71,
        "Midterm"=>78,
        "Final"=>72, 
    ),

    array(
        "Firstname" => "Liwayway", 
        "Lastname" =>"Smith", 
        "Course" => "Bachelor of Science in Computer Engineering",
        "Year Level" =>"Third Year",
        "Prelim" =>90,
        "Midterm"=>84,
        "Final"=>91, 
    ),
    
    array(
        "Firstname" => "Miller", 
        "Lastname" =>"Johnson", 
        "Course" => "Bachelor of Science in Computer Engineering",
        "Year Level" =>"Fourth Year",
        "Prelim" =>92,
        "Midterm"=>81,
        "Final"=>91, 
    )   
);
echo "Grade Report</br>";

//Get the Array size 
$arrCount = count($arrStud);

//Using the FOR LOOP and FOR EACH 
for($ctr=0; $ctr < $arrCount; $ctr++)
{
    foreach($arrStud[$ctr] as $key => $value)
    {  
        echo $key . ": " . $value . "<br>";
    }
    $dblGrade = ($arrStud[$ctr]["Prelim"] + $arrStud[$ctr]["Midterm"] + $arrStud[$ctr]["Final"])/3;
    echo "Subject Grade: " . $dblGrade . "<br>";
    echo "<br>";
}

?> 

</body>
</html>  