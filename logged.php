<?php
$conn = mysqli_connect("localhost",
     "root","","it");
?>
   
<?php
if(isset($_POST['submit'])){
  extract($_POST);
  $query="select * from register where email='$email' AND password='$password'";
  $run_query=mysqli_query($conn,$query);
  if($run_query){
      if(mysqli_num_rows($run_query)>0){
          $_SESSION['email']=$email;
	  $_SESSION['password']=$password;
          header("location:menu.html");
}
  else{
       echo "<script>alert('Username or password is incorrect')</script>";

echo "<script>location.href='login.php'</script>";
}
}
}


?>