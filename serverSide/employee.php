<?php
include_once("base.php");
class employee extends base{
//gets all employees from the database employee table
function getEmployees(){
	$sql="select * from employee";

	return $this->query($sql);
}
//returns an array containing the details of an employee
function getEmployee($id){
	$sql="select * from employee where employee_id='$id'";

	if(!$this->query($sql)){
		return false;
	}

	return $this->fetchArray();
}
//adds an employee in the employee table in the db
function addEmployee($emp_id,$emp_fname,$emp_lname,$id_num,$email,$phone){
	$sql="insert into employee set employee_id='$emp_id', emp_fname='$emp_fname',emp_lname='emp_lname',id_number='$id',emp_email='$email',emp_phone='$phone'";

	return $this->query($sql);
}
//deletes the employee with the given id
function deleteEmployee($id){
	$sql="delete from employee where employee_id='$id'";

	return $this->query($sql);
}

//updates employee details
function updateEmployee($emp_id,$emp_fname,$emp_lname,$id_num,$email,$phone){
		$sql="update employee set emp_fname='$emp_fname',emp_lname='emp_lname',id_number='$id',emp_email='$email',emp_phone='$phone' where employee_id='$emp_id'";

		return $this->query($sql);
}
//searchs for an employee whose first name, last name or id number contains the given search text
function search($txt){
	$sql="select * from employee where emp_fname like '%$txt%' or emp_lname like '%$txt%' or
	id_number like %$txt%";

	return $this->query($sql);
}


}

?>