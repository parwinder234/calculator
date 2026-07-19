<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     $a=trim($_POST['n1']);
    $b=trim($_POST['n2']);
    $c=trim($_POST['n3']);
    $d=trim($_POST['n4']);


$sql=mysqli_connect("localhost","root" ,"","enquiry");
    
    $x="INSERT into contact values('$a','$b','$c',' $d')";
    mysqli_query($sql,$x);
    echo "recieved yours message";




    ?>
</body>
</html>