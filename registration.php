<?php
$servername="localhost";
$username="root";
$password="";
$dbname="it";
try{
 $conn=mysqli_connect($servername,$username,$password,$dbname);
 echo("");
}catch(mysqli_sql_Exception $ex){
    echo("Error in connection");
}

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $pass=$_POST['password'];
    $it_query = "INSERT INTO `register`(`name`, `email`, `phone`, `address`, `password`) VALUES     ('$name','$email','$phone','$address','$pass')";
     try{
          $it_result = mysqli_query($conn,
          $it_query);
          if($it_result){
              if(mysqli_affected_rows($conn)>0){
              echo"<center><h1>Registration Successful!!!</h1></center>";
	echo "<center><table><tr><td><A href='login.php'><button>Login</button></a></td></tr></table></center>";
}else{
   echo"<script>alert('Error in Registration')</script>";
echo "<script>location.href='register.php'</script>";
}
}
}catch(Exception $ex){
    echo("error".$ex->getMessage());
}
}

?>