<?php
	$servername="localhost";
	$username="root";
	$password="";
	$databasename="final_lab_exam";


	function execute ($query)
	{
			global $username;
			global $password;
			global $companyname;
			global $contact;
      global $employername;
			$conn=mysqli_connect($username,$password,$companyname,$contact,$employername);
			$result=mysqli_query($conn,$query);
			return $result;
	}

	function getdata ($query)
	{
		global $username;
		global $password;
		global $companyname;
		global $contact;
    global $employername
		$data=array();
		$conn=mysqli_connect($username,$password,$companyname,$contact,$employername);
		$result=mysqli_query($conn,$query);
		if (mysqli_num_rows($result)>0) {
			while ($rows=mysqli_fetch_assoc($result)) {
				$entity=array();
				foreach ($rows as $key => $value) {
					$entity[$key]=$rows[$key];
				}
				$data[]=$entity;
			}
		}
		mysqli_close($conn);
		return $data;
	}

?>
