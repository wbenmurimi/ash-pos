<?php
include_once("base.php");

class transactions extends base{
//function to add a transaction in the database
	function addTransaction($tran_id,$food_names,$food_quantities,$food_prices,$total,$emp_id){
		$sql="insert into transactions set transaction_id='$tran_id',food_names='$food_names',food_quantities='$food_quantities',food_prices='$food_prices',
		total_price='$total',employee_id='$emp_id'";

		return $this->query($sql);
	}
//update a transaction Deprecated!!
	function updateTransaction($tran_id,$food_names,$food_quantities,$food_prices,$total,$emp_id){
		$sql="update transactions set food_names='$food_names',food_quantities='$food_quantities',food_prices='$food_prices',
		total_price='$total',employee_id='$emp_id' where transaction_id='$tran_id'";

		return $this->query($sql);

	}
//delete transaction with given transaction id
	function deleteTransaction($id){
		$sql="delete from transactions where transaction_id='$id'";

		return $this->query();
	}
//get transaction identified using a specified id
	function getTransaction($id){
		$sql="select * from transactions where transaction_id='$id'";
		if(!$this->query($sql)){
			return false;
		}
		return $this->fetchArray();
	}
//get transactions done btn a specified period of time
	function getByTime($dateFrom,$dateTo){
		$sql="select * from transactions where transaction_time >=$dateFrom and transaction_time <= $dateTo";

		return $this->query($sql);
	}

	function getByEmp($emp){
		$sql="select * from transactions where employee_id='$emp'";

		return $this->query($sql);
	}

	function getTransactions(){
		$sql="select * from transactions";

		return $this->query($sql);
	}
}
?>