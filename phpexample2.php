<html>
<head>
<title>Learning PHP With the Boy Scouts</title>
</head>
<body>
<h1>Programming Merit Badge</h1>
<?php 
    $evenNumberCount = 0;
    $generateCount = 50;
    
    for ($l=0; $l < $generateCount; ++$l) {
        $myRandomNumber = rand(0,100);
        
        if ($myRandomNumber % 2) {
            ++$evenNumberCount;
        }
        
        echo $myRandomNumber . "<br>";
    }
    
    echo "There were " . $evenNumberCount . " Even numbers in the " . $generateCount . " random numbers that were generated."
    ?>
    
</body>
</html>