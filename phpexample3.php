<html>
<head>
<title>Learning PHP With the Boy Scouts</title>
</head>
<body>
<h1>Programming Merit Badge</h1>
<?php 
    $evenNumberCount = 0;
    $generateEvenNumberCount = 50;
    $generatedNumbers = 0;
    
    do  {
        $myRandomNumber = rand(0,100);
        
        if (!($myRandomNumber % 2)) {
            ++$evenNumberCount;
        }
        
        echo $myRandomNumber;
        if (!($myRandomNumber % 2)) {
            echo "  Even";
        }
        echo "<br>";
        ++$generatedNumbers;
    } while ( $evenNumberCount < $generateEvenNumberCount);
    
    echo "It took " . $generatedNumbers . " random numbers to generate  " . $generateEvenNumberCount . " even numbers.";
    ?>
    
</body>
</html>