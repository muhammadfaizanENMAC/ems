<?php 
session_start();

if(isset($_POST['submit'])){
        $user_username = mysql_real_escape_string($_POST['username']);
        $user_password = mysql_real_escape_string($_POST['password']);
        $dbc = mysqli_connect('localhost', 'root', '', 'bookingcab')
        or die('Error Connecting to Database on the SQL Server');
		 if ( !empty($user_username) && !empty($user_password) ){
                $query = "SELECT id, userName FROM user WHERE userName = '$user_username' AND password = md5('$user_password')";
                $res = mysqli_query($dbc, $query);
				if (mysqli_num_rows($res) == 1){
					 $row = mysqli_fetch_array($res);
					   $_SESSION['user'] = $row['userName'];
					   header("Location: template.php");
				 }else{
					 $_session['message'] = "Invalid username and password" ;
					 header("Location:index.php");
				 }
			}else{
				$message = "Invalid username and password" ;
				 header("Location:index.php?error='.$message.'");
				}			
}
?>