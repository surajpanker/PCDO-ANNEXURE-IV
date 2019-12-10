<?php  
 require('db_connect1.php');

if (isset($_POST['username']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['username'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE user
$query = "SELECT * FROM use1 WHERE username='$username' and Password='$password'";
 
$result = mysqli_query($connection,$query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
    
 
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
     require('login.php');
    exit();
}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style1.css">
   
    </head>
    <body id="b1">
<?php $myVariable = $username;?>
        <table ></table>
       <!-- <img src="./image/pn.jpg" alt="next step"  id="im">-->
<form method="post" action="2.php" >
 <input type="hidden" name="text" value="<?php echo $myVariable; ?>">
    <div  id="wrapper" >
        <h1 id="h"> WELCOME TO NORTH WESTERN RAILWAY</h1>
        <img src="./image/pn.jpg" alt="next step"  id="im">
        <button type="submit"  id="button1"><h5 id="k"> PROCEED TO NEXT STEP</h5></button>
        </div>
</form>
        </body>
    </html>
