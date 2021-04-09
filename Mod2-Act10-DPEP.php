<!DOCTYPE html>
<html> 
<head>

    <title>Conditional statement</title>
</head> 
<body>

<?php
define ("BR", "<br />");
$fname = "Juan";
$mname = "P";
$sname = "Dela Cruz"; 

$Pre = 80.50;
$Mid = 85.10;
$Fin = 90.55; 
//Concatenation 
$Fullname = $sname . "," . $fname . " " . $mname; 
$finalgrade = ($Pre + $Mid + $Fin) / 3;

echo "Student Name: " . $Fullname . BR; 
echo "Prelim Grade: " . $Pre . BR; 
echo "Midterm Grade" . $Mid . BR; 
echo "Final Grade" . $Fin . BR; 
echo " Subject Final Grade: " . $finalgrade . BR; 

if ($finalgrade > 74)
echo "Remarks: Congratulations You Passed! " . BR; 
else 
Echo "Remarks: Sorry you Failed" . BR; 

if ($finalgrade >= 98 && $finalgrade <= 100)
echo "Ratings: Excellent" . BR; 
elseif ($finalgrade >= 92 && $finalgrade <= 97)
echo "Ratings: Very Good" . BR; 
elseif ($finalgrade >= 83 && $finalgrade <= 91)
echo "Ratings: Good" . BR; 
elseif ($finalgrade >= 78 && $finalgrade <= 82)
echo "Ratings: Fair" . BR; 
elseif ($finalgrade >= 75 && $finalgrade <= 77)
echo "Ratings: Passed" . BR; 
else 
echo "Ratings: Failed" . BR; 

$coursecode = "BSCOE"; 

switch($coursecode)
{
    case 'BSIT';
    echo "Course: Bachelor of Science in Information Technology" . BR;
    break; 

    case 'BSIS';
    echo "Course: Bachelor of Science in Information System" . BR;
    break; 

    case 'BSCS';
    echo "Course: Bachelor of Science in Computer Science" . BR;
    break; 

    case 'BSCOE';
    echo "Course: Bachelor of Science in Computer Engineering" . BR;
    break; 
}
?>

</body> 
</html> 