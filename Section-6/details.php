<?php
require_once('dbconnection.php');
$stmt=$connection->prepare("INSERT INTO users(user_name,user_email,user_pass) VALUES(:name,:email,:pass)");
#echo "Inside details";
$name=$_POST['username'];
$email=$_POST['useremail'];
$pass=$_POST['userpass'];

$stmt->bindParam(":name",$name);
$stmt->bindParam(":email",$email);
$stmt->bindParam(":pass",$pass);
$result=false;
try{
    $stmt->execute();
    $result=true;
}
catch(PDOException $exc)
{
    echo $exc->getMessage();
}
#echo "Connection var " . $connection;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Details</title>
</head>

<body>
    <?php
    if($result===true)
    {
        ?>
        <div class="alert alert-success" role="alert">
         Congratulations, <?=$name;?>, you've been successfully registered
        </div>
        <?php
    }
    else{
        ?>
        <div class="alert alert-danger" role="alert">
         Something went wrong, please try again
        </div>
        <?php
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>