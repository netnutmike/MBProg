<html>
<head>
<title>Learning PHP With the Boy Scouts</title>
</head>
<body>
<h1>Programming Merit Badge</h1>
<?php if (isset($_REQUEST['myname']) && trim($_REQUEST['myname']) != "") { ?>
    
Hi, I am <?php echo $_REQUEST['myname'] ?> and I am learning php for my programming Merit Badge.<br><br>
    
<?php if (isset($_REQUEST['birthdate']) && trim($_REQUEST['birthdate']) != "") { ?>
    
Today is <?php echo date("D, M-d-Y")?><br><br>
    
<?php $birthdate = strtotime($_REQUEST['birthdate']); ?>
    
I was born on <?php echo date("D, M-d-Y", $birthdate); ?><br><br>
    
<?php } ?>
    
<a href="/phpexample1.php">Reset by clicking here</a>
    
<?php } else { ?>
    
    <form>
    Your Name: <input type="text" name="myname"><br>
    Birthdate in yyyy-mm-dd: <input type="text" name="birthdate"><br>
    <input type="submit" text="Submit"></form>
    
<?php } ?>
    
</body>
</html>