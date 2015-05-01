<?php
if (isset($_REQUEST['cmd'])){

	$cmd=$_REQUEST['cmd'];

	function transact(){
		include_once("transactions.php");
		$transact=new transactions();

		$tranid=$_REQUEST['tranid'];
		$foodsid=$_REQUEST['fids'];
		$foodqty=$_REQUEST['fqty'];
		$foodprice=$_REQUEST['fprice'];
		$total=$_REQUEST['total'];
		$empid=$_REQUEST['empid'];

		$add=$transact->addTransaction($tranid,$foodsid,$foodqty,$foodprice,$total,$empid);

		if(!$add){
			echo '{"result":0,"message":"Could not do a transaction"}';
			return;
		}

		echo '{"result":1,"message":"Done transaction"}';
	}

	function delete(){
		include_once("transactions.php");
		$transact=new transactions();

		$tranid=$_REQUEST['tranid'];

		if(!$transact->deleteTransaction($tranid)){
			echo '{"result":0,"message":"Could not reverse the transaction"}';
			return;
		}
		echo '{"result":1,"message":"Succesfully reversed the transaction"}';
	}

	function getTransaction(){
		include_once("transactions.php");
		$transact=new transactions();

		$tranid=$_REQUEST['tranid'];
		$row=$transact->getTransaction($tranid);

		if($row!=false){
			echo '{"result":1,';
			echo json_encode($row);
			echo '}';

		}
		else
			echo '{"result":0,"message":"Transaction Not Found"}';

	}

	function getByTime(){
		include_once("transactions.php");
		$transact=new transactions();

		$dateFrom=$_REQUEST['from'];
		$dateTo=$_REQUEST['to'];

		$transact->getByTime($dateFrom,$dateTo);

		if($row=$transact->fetchArray()){
			echo '{"result":1,transactions:[';
			while($row){
				echo json_encode($row);
				if($row=$transact->fetchArray()){
					echo ',';
				}
			}

			echo ']}';
		}
		echo '{"result":0,"message":"No transactions found"}';
	}

	function getByEmp(){
		include_once("transactions.php");
		$transact=new transactions();
		$empid=$_REQUEST['empid'];

		$transact->getByEmp($empid);
		if($row=$transact->fetchArray()){
			echo '{"result":1,transactions:[';
			while($row){
				echo json_encode($row);
				if($row=$transact->fetchArray()){
					echo ',';
				}
			}

			echo ']}';
		}
		else
			echo '{"result":0,"message":"No transactions found"}';
	}

	function transactions(){
		include_once("transactions.php");
		$transact=new transactions();
		

		$transact->getTransactions();
		if($row=$transact->fetchArray()){
			echo '{"result":1,transactions:[';
			while($row){
				echo json_encode($row);
				if($row=$transact->fetchArray()){
					echo ',';
				}
			}

			echo ']}';
		}
		echo '{"result":0,"message":"No transactions found"}';
	}

	switch ($cmd) {
		case 1:
			transact();
			break;
		case 2:
			delete();
			break;
		case 3:
			getTransaction();
			break;
		case 4:
			getByTime();
			break;
		case 5:
			getByEmp();
			break;
		case 6:
			transactions();
			break;
		default:
			
			break;
	}

	
}
?>