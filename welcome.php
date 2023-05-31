<?php 
session_start();
if(isset($_SESSION['nm']))
{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <center>
    <h3>Hello Welcome to our site thank you for login</h3>
    <br><br><br><h2>Your Information</h2>
    <h4>Name : <?php echo $_SESSION['nm']?><br>
        Email : <?php echo $_SESSION['email']?><br>
    </h4>
    </center>
</body>
</html>


<?php 

}
else
{
    header("location:log_form.php");
}
session_destroy();
?>