<?php
if(isset($_REQUEST['cmd'])){

	function getUser(){
		include_once("users.php");

		$user=new users();
		$userid=$_REQUEST['userid'];
		$row=$user->getUser($userid);
		if($row){
			echo '{"result":1,';
			echo json_encode($row);
			echo '}';
		}
		echo '{"result":0,"message":"User Not Found"}';
	}

	function authenticate(){
		include_once("users.php");

		$user=new users();

		$user=$_REQUEST['user'];
		$pass=$_REQUEST['pass'];

		$row=$user->authenticateUser($user,$pass);

		if($row){
			echo '{"result":1,"message":"User Found",';
			echo json_encode($row);
			echo '}';
		}
		echo '{"result":0,"message":"User Not Found"}';
	}
}
?>