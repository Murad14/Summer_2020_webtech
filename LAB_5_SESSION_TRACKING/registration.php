
<?php
	
	session_start();
	
	if(isset($_POST['submit'])){
        $name       = $_POST['name'];
        $email 		= $_POST['email'];
		$uname 		= $_POST['userName'];
        $password 	= $_POST['password'];
        $cpassword  = $_POST['confirmPassword'];
		$gender     = $_POST['gender'];
		$dob		= $_POST['dob'];

        if($password!=$cpassword){

                echo "pass not matched";
        }
        else{
			$_SESSION['name'] 		= $name;
			$_SESSION['email'] 	= $email;
            $_SESSION['userName'] 		= $uname;
            $_SESSION['password']= $password;
			$_SESSION['gender']= $gender;
			$_SESSION['dob']= $dob;

            echo "done!";
            header('location: login.php');
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
                                <a href="login.php">Registration     | </a>
                            </td>
                            
                            
						</td>
						
                    </tr>
                    


					<tr width="70%" height="300px">
						<td colspan="3">
         <center>                     
<fieldset width="100%">
    <legend><b>REGISTRATION</b></legend>
	<form method="post">
		<br/>
		<table width="70%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text">
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>User Name</td>
				<td>:</td>
				<td><input name="userName" type="text"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input name="password" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td><input name="confirmPassword" type="password"></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Gender</legend>    
						<input name="gender" value="male" type="radio">Male
						<input name="gender" value="female" type="radio">Female
						<input name="gender" type="radio">Other
					</fieldset>
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td colspan="3">
					<fieldset>
						<legend>Date of Birth</legend>    
						<input name="dob" type="text" size="2" />/
						<input name="dob" type="text" size="2" />/
						<input name="dob" type="text" size="4" />
						<font size="2"><i>(dd/mm/yyyy)</i></font>
					</fieldset>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" name="submit" value="Submit">
		<input type="reset">
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