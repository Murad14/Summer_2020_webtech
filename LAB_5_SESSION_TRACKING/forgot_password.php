<?php
session_start();



?>


<table border="1" style="width:100% ; border:1px solid;" >
    <tr>
      <th width="100px"><img src="./logo (1).png"></th>
      <th width="auto" ></th>
      <th width="200px"><a href="">loggedin as <?php  echo $_SESSION['userName'];	 ?>| </a><a href="">logout  </a></th>
    </tr>
    
    <tr>
        
      <td>
          <h3>Account</h3><hr>
          <ul>
            <li><a href="">Dashboard</a></li>
            <li><a href="./view_profile.php">View Profile</a></li>
            <li><a href="./edit_profile">Edit Profile</a></li>
            <li><a href="./forgot_password.php">Change password</a></li>
            <li><a href="/login.php">Logout</a></li>
        </ul>
      </td>
      
      <td height="400px">
    


<fieldset>
    <legend><b>FORGOT PASSWORD</b></legend>
    <form>
		Enter Email:
        <input type="password" />
        <hr />
        <input type="submit" value="Submit" />
    </form>
</fieldset>

</td>
      <td></td>
    </tr>
    
    <tr>
      <td></td>
      <td>copyright</td>
      <td></td>
    </tr>
  </table>






















<table border="1">




</table>

























