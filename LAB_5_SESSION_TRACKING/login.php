<?php
	session_start();
	
	if(isset($_POST['submit'])){

		$uname 		= $_POST['userName'];
		$password 	= $_POST['password'];

    if(isset($_SESSION['userName']) && isset($_SESSION['password'])){

			if($uname == $_SESSION['userName'] && $password == $_SESSION['password']){
					$_SESSION['status'] = "OK";
					header('location: homekkk.php');
				}else{
          echo "don't have any account!";
				}
    }
    else{
      echo "failed";
    }
		

  }




?>

<html>
	<head>
		<title>Registration</title>
	</head>
	<body>


		<center>
				<table width="100%" border="1">
					<tr height="100px">
						<td width="100px">
							<a href="index.html">
								<img src="./logo (1).png" width="150px" height="100px">
                            </a>
                            <td align="right" colspan="2">
                                <a href="login.php">Home  | </a>
                                <a href="login.php">login  | </a>
                                <a href="registration.php">Registration     | </a>
                            </td>
                            
                            
						</td>
						
                    </tr>
                    


					<tr width="70%" height="300px">
						<td colspan="3">
         <center>                     
         <fieldset>
        <legend><b>LOGIN</b></legend>
        <form method="post">
            <table>
                <tr>
                    <td>User Name</td>
                    <td>:</td>
                    <td><input name="userName" type="text"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input name="password" type="password"></td>
                </tr>
            </table>
            <hr />
            <input name="remember" type="checkbox">Remember Me
            <br/><br/>
            <input name="submit" type="submit" value="Submit">        
            <a href="forgot_password.html">Forgot Password?</a>
        </form>
    </fieldset>
</center>  
                            
                            </td>
					</tr>
					<tr height="50px">
						<td colspan="3" align="center">@copyright 2020</td>
					</tr>
				</table>		
		</center>
	</body>
</html>

































