<?php 


if(isset($_POST["go"])){

     if(($_POST['error'])=='forgetpass')
    $logininfo="Please contact the nearest branch";

    include "dbconnection.php";
    $username=$_POST["login"];
    $password=$_POST["password"];

    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);

$query="SELECT * FROM customers WHERE username='$username' AND password='$password'";
$res = mysqli_query($connection,$query);
if(!$res){
    echo "user not exist";
    die('query failed'.mysqli_error($connection));
}
else{
   header("Location: account.php");
}

}



?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Bank </title>
<link href="css/PageStyle.css" rel="stylesheet" type="text/css" />
</head>
<body>
 <?php include 'test.php' ?>

<?php if(isset($logininfo))
    {  echo"<div class='logmainbox' style='width:450px;'><h1>$logininfo</h1></div>"; } ?> 



     <div class="logmainbox">
        <form action="login.php" method="POST">
            <h1>Sign In</h1>
            <div class="loginset">
                <p>
                    <label class="Ltext">Username</label>
                    <input type="text" name="login" class="loginput">
                </p>
                <p>
                    <label class="Ltext" for="password">Password</label>
                    <input type="password" name="password" class="loginput">
                </p>
            </div>
            <p class="p-container">
                <a href="login.php?error=forgetpass">Forgot password ?</a><br/>
                <input type="submit" name="go" id="go" value="Log in" class="loginput">
            </p>
/        </form>
    </div>
    </div>
<?php include'footer.php' ?>
</body>
</html>
