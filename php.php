<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    $a=trim($_POST['name']);
    $b=trim($_POST['ms']);
    $c=trim($_POST['ea']);
    $d=trim($_POST['cr']);
    $e=trim($_POST['qf']);
    $f=trim($_POST['ad']);
    $g=trim($_POST['mr']);
      $sql=mysqli_connect("localhost","root" ,"","enquiry");
    
    $x="INSERT into enquiry values('$a','$b','$c',' $d',' $e','$f','$g')";
    mysqli_query($sql,$x);
    echo "your data is submitted";
    
    ?>
    
</body>
</html>