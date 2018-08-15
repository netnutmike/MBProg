<html>
<head>
<title>Learning PHP With the Boy Scouts</title>
</head>
<body>
<h1>Programming Merit Badge</h1>
<?php 
    
    if (isset($_REQUEST['myname']) && trim($_REQUEST['myname']) != "") { 
    
        echo "Hi, I am " . $_REQUEST['myname'] . " and I am learning php for my programming Merit Badge.<br><br>";
    
        if (isset($_REQUEST['birthdate']) && trim($_REQUEST['birthdate']) != "") { 
    
            echo "Today is " . date("D, M-d-Y") . "<br><br>";
    
            $birthdate = strtotime($_REQUEST['birthdate']); 
    
            echo "I was born on " . date("D, M-d-Y", $birthdate) . "<br><br>";
    
        } 
    
        echo "<a href=\"/phpexample1.php\">Reset by clicking here</a>";
    
    } else { 
    
        echo "<form>";
        echo "Your Name: <input type=\"text\" name=\"myname\"><br>";
        echo "Birthdate in yyyy-mm-dd: <input type=\"text\" name=\"birthdate\"><br>";
        echo "<input type=\"submit\" text=\"Submit\"></form>";
    
    } ?>
    
</body>
</html>