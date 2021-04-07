<!DOCTYPE html> 
<html>
    <head>
    <title>Dice Rolling </title> 
    </head> 
    <body>
    <?php
    $FaceNameSingular = array ("one ", "two ", "Three ", "Four ", "Five ", "six " );
    $FaceNamePlural = array ("ones ", "twos ", "Threes ", "Fours ", "Fives ", "sixes ");
    function CheckForDoubles($Die1, $Die2)
    {
        global $FaceNameSingular;
        global $FaceNamePlural; 
        if ($Die1 == $Die2) //Doubles
             echo "The Roll was double", $FaceNamePlural[$Die1-1], "<br />";
        if ($Die1 != $Die2) //Not Doubles 
             echo "The Roll was a ", $FaceNameSingular[$Die1-1], "and a ", $FaceNameSingular[$Die2-1], "<br />";
    }
    function DisplayScoreText($Score)
    {
        if ($Score == 2)
             echo "You rolled snake eyes! <br />";
        if ($Score == 3)
             echo "You rolled a loose deuce! <br />";
        if ($Score == 5)
             echo "You rolled a fever five! <br />";
        if ($Score == 7)
             echo "You rolled a natural! <br />";
        if ($Score == 9)
             echo "You rolled a ninal! <br />";
        if ($Score == 11)
             echo "You rolled a yo! <br />";
        if ($Score == 12)
             echo "You rolled boxcars! <br />";
    }
        $Dice = array();
        $Dice[0]=rand(1,6);
        $Dice[1]=rand(1,6);
        $Score = $Dice[0] + $Dice[1];
        echo "<p>";
        echo " The total score for the roll was ";
        $Score."<br />";
        CheckForDoubles($Dice[0],$Dice[1]);
        DisplayScoreText($Score);
        echo "</p>";
    ?>
    </body> 
</html>