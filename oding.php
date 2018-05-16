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
    $phone1=$_POST['phone1'];
    $address=$_POST['address'];
    $it_query = "INSERT INTO `odd`(`name`, `email`, `phone`, `phone1`, `address`) VALUES     ('$name','$email','$phone','$phone1','$address')";
     try{
          $it_result = mysqli_query($conn,
          $it_query);
          if($it_result){
              if(mysqli_affected_rows($conn)>0){
             echo "<center><h1>Order Successful!!!</h1></center>";
	echo "<center><table><tr><td><A href='home.php'><button>Home</button></a></td></tr></table></center>";
}else{
    echo("Error in connection");
}
}
}catch(Exception $ex){
    echo("error".$ex->getMessage());
}
}

?>