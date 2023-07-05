<?php
$insert=false;
if(isset($_POST['name']))
{


$server="localhost";
$username="root";
$password="";
$con= mysqli_connect($server,$username,$password);
if(!$con)
{
    die("connection to this db is fail".mysqli_connect_error());

}

$name=$_POST['name'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$height=$_POST['height'];
$class=$_POST['class'];



$sql="INSERT INTO `health_check`.`details` (`name`, `age`, `weight`, `height`, `class`) VALUES ('$name', '$age', '$weight', '$height', '$class')";
echo $sql;
if($con->query($sql)==true)
{
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>HNR</title>
</head>
<body>
    <div class="container">
    <h1>ENTER YOUR DETAILS</h1>
    <?php
    if($insert==true)
    {
        echo "<P>thanks for submission <p>";
    }
    ?>
    <form action="first.php" method="post">
    <input type="text" name="name" id="name" placeholder="enter your name">
    <input type="text" name="age" id="age" placeholder="enter your age">
    <input type="text" name="weight" id="weight" placeholder="enter your weight">
    <input type="text" name="height" id="height" placeholder="enter your height">
    <input type="text" name="class" id="class" placeholder="enter your class">
    <button class="btn" >submit</button>
    </form>
     </div>

    
</body>
</html>
