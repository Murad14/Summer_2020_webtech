<?php
function nameCheck()
{
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sname = $_POST['name'];

		if($sname == "" || strlen($sname) < 2 || ctype_digit($sname[0]) )
		{
			echo "<span style='color:red;'>*Please enter a valid name</span>";
		}
	}

  function checkemailPattern($str) {
  	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
  }

  function EmailCheck()
  {
  	if($_SERVER["REQUEST_METHOD"] == "POST")
  	{
  		$sEmail = $_POST['email'];

  		if($sEmail == "" || !checkemailPattern($sEmail))
  		{
  			echo "<span style='color:red;'>*Email is invalid</span>";
  		}
  	}

  }


  function GenderSelected()
  {
  	if($_SERVER["REQUEST_METHOD"] == "POST")
  	{
  		$sGender = $_POST['gender'];

  		if($sGender == "")
  		{
  			echo "<span style='color:red;'>*Please select your gender</span>";
  		}
  	}

  }


  function DOB()
  {
  	if($_SERVER["REQUEST_METHOD"] == "POST")
  	{
  		$sDOB = $_POST['dob'];

  		if($sDOB == "")
  		{
  			echo "<span style='color:red;'>*Date of birth required</span>";
  		}
  	}

  }

  function BG()
  {
  	if($_SERVER["REQUEST_METHOD"] == "POST")
  	{
  		$bloodGroup = $_POST['blood'];

  		if(empty($bloodGroup))
  		{
  			echo "<span style='color:red;'>*Blood Group is required</span>";
  		}
  	}

  }


  function CheckDegree()
  {
  	if($_SERVER["REQUEST_METHOD"] == "POST")
  	{
  		if(empty($_POST['check_degree']))
  		{
  			echo "<span style='color:red;'>*Check the degrees</span>";
  		}
  	}

  }

  function CheckFile()
  {
  	if($_SERVER["REQUEST_METHOD"] == "POST")
  	{
  		if(empty($_POST['photo']))
  		{
  			echo "<span style='color:red;'>*Please attach your photo</span>";
  		}
  	}

  }

}


 ?>

 <!DOCTYPE html>
<html>
  <head>
    <title>Person Profile</title>
  </head>
  <body align="center">
    <form method="POST">
    <table height="100" width="450" border="1" cellspacing="0" align="center">
    <tr>
        <th colspan="3"><h2> PERSON PROFILE </h2> </th>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Name</td>
      <td width="300" > <input type="text" name="name" style="font-size:12pt;" ><br><?php nameCheck(); ?></br></td>
      <td ></td>

    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Email</td>
      <td> <input type="email" name="email" style="font-size:12pt;" > <br><?php EmailCheck(); ?></br> </td>
      <td></td>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Gender</td>
      <td><input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
        <input type="radio" name="gender" value="Others">Others
      </td>
      <td></td>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Date of Birth</td>
      <td> <input type="date" name="dob" style="font-size:12pt;" ><br><?php DOB(); ?></br></td>
      <td></td>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Blood Group</td>
      <td> <select class="Blood" name="blood">
        <option value="">A</option>
        <option value="">A+</option>
        <option value="">A-</option>
        <option value="">AB+</option>
        <option value="">AB-</option>
        <option value="">B+</option>
        <option value="">B-</option>
        <option value="">O+</option>
        <option value="">O-</option>
      </select><br><?php BG(); ?></br> </td>
      <td></td>
    </tr>
    <tr rowspan="3">
      <td height="40" width="100">Degree</td>
      <td> <input type="checkbox" name="check_degree" style="font-size:12pt;" >SSC
      <input type="checkbox"  style="font-size:12pt;" >HSC
      <input type="checkbox" style="font-size:12pt;" >BSc
      <input type="checkbox"  style="font-size:12pt;" >MSc
      <br><?php CheckDegree(); ?></br></td>
      <td></td>
    </tr>
    <tr>
      <td height="40" width="100">Photo</td>
      <th colspan="2"> <input type="file" name="photo"><br><?php CheckFile(); ?></br></th>

    </tr>
    <tr>
      <th colspan="3" height="40"></th>
    </tr
    <tr>
        <td colspan="3" height="40"align="right">
        <input type="Submit" value="Submit" style="font-size:12pt;">
        <input type="Reset" value="Reset" style="font-size:12pt;" >
        </td>
    </tr>

    </table>
</form>
  </body>
</html>
