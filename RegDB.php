

<?php 
  global $connection;
    if(isset($_POST["submit"])){

 include "dbconnection.php";
    $fname = $_POST["Fname"];
    $lname=$_POST["Lname"];
    $gender=$_POST["Gender"];
    $ifsc=$_POST["ifsc"];
    $dob=$_POST["DOB"];
    $accountno=$_POST["Mnum"];
    $accstatus=$_POST["accstatus"];
    $acctype=$_POST["acctype"];
    $username=$_POST["Uname"];
    $password=$_POST["Pwd"];
    $Cpassword=$_POST["Cpwd"];
    $Tpassword=$_POST["TrPwd"];
    $Tcpassword=$_POST["TrCpwd"];




    $fname=mysqli_real_escape_string($connection,$fname);
    $lname=mysqli_real_escape_string($connection,$lname);
    $gender=mysqli_real_escape_string($connection,$gender);
    $ifsc=mysqli_real_escape_string($connection,$ifsc);
    $accountno=mysqli_real_escape_string($connection,$accountno);
    $accstatus=mysqli_real_escape_string($connection,$accstatus);
    $acctype=mysqli_real_escape_string($connection,$acctype);
    $dob=mysqli_real_escape_string($connection,$dob);
    $username=mysqli_real_escape_string($connection,$username);
    $password=mysqli_real_escape_string($connection,$password);
    $Cpassword=mysqli_real_escape_string($connection,$Cpassword);
    $Tpassword=mysqli_real_escape_string($connection,$Tpassword);
    $Tcpassword=mysqli_real_escape_string($connection,$Tcpassword);
   /* $hashFormat="$2y$10$";
    $salt="iusesomecrazystrings22";
    $hashF_and_salt=$hashFormat.$salt;
    $password=crypt($password,$hashF_and_salt);
    $Cpassword=crypt($Cpassword,$hashF_and_salt);
    $Tpassword=crypt($Tpassword,$hashF_and_salt);
    $Tcpassword=crypt($Tcpassword,$hashF_and_salt);*/
    
    $query = "INSERT INTO customers(fname,lname,gender,ifsc,dob,accno,accstatus,acctype,username,password,reenterpassword,transpassword,repeatPassword) VALUES('$fname','$lname','$gender','$ifsc','$dob','$accountno','$accstatus','$acctype','$username','$password','$Cpassword','$Tpassword','$Tcpassword')";
    $result=mysqli_query($connection,$query);
    if(!$result){
        die('query failed'.mysqli_error($connection));
    }else{
    	echo "Hi vikas successful";
    }
    }else{
    	echo "<br>can't do anything!!";
    }

 ?>