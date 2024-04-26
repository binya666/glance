<?php   
include("../database-helper.php")

?>
<?php
if (isset($_POST['submit']))
    {
    $Username = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $SecurePassword = md5($Password);
    $Query = "SELECT * FROM superadmin WHERE username = '$Username' AND securepassword = '$SecurePassword'";
	// echo $Query;
	// die;
    $Result = mysqli_query($conn, $Query);
    if (mysqli_num_rows($Result) > 0)
    {
        $row = mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID'] = $row->id;
        $_SESSION['USER_NAME'] = $row->username;
        $_SESSION['FULL_NAME'] = $row->firstname . " ". $row->lastname;
		header('Location:index.php');
		exit();
        // echo "<script>window.location.href='index.php';</script>";
        // exit();
    }
   else
   {
     ?>
     <script>
       alert("Invalid Credentials")
   </script>
   <?php
}	
}
?>
