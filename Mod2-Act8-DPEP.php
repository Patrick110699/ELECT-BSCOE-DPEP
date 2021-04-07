<!DOCTYPE Html> 
<head>
<title>Functions</title> 
</head> 
<body>
<?php
    function displayMessage($FirstMessage)
    {
        echo "<p>$FirstMessage</p>";
    }

    function returnMessage()
    {
        return "<p>This message was returned from a funtion</p>";
    }

    displayMessage("This message was displayed from a fucntion.");
    $returnValue = returnMessage();
    echo $returnValue;


?>
</body>