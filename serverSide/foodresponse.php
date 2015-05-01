<?php
if(isset($_REQUEST['cmd'])){
	$cmd=$_REQUEST['cmd'];

	function getAllFoods(){
		include_once("food.php");

		$food=new food();

		if(!$food->getFoods()){
			echo '{"result":0,"message":"Could not get foods"}';
			return;
		}
		$row=$food->fetchArray();
		echo '{"result":1,foods:[';
		while($row){
			echo json_encode($row);
			if($row=$food->fetchArray()){
				echo ',';
			}

		}
		echo ']}';
	}

	function getByCategory(){
		include_once("food.php");
		$food=new food();
		$categ=$_REQUEST['categ'];

		if(!$food->getFoodByCategory($categ)){
			echo '{"result":0,"message":"Could not get foods"}';
			return;
		}
		$row=$food->fetchArray();
		echo '{"result":1,foods:[';
		while($row){
			echo json_encode($row);
			if($row=$food->fetchArray()){
				echo ',';
			}

		}
		echo ']}';
	}

	function getFoodById(){
		include_once("food.php");
		$food=new food();
		$fid=$_REQUEST['fid'];
		echo '{"result":1,';
		echo json_encode($food->getFoodById($fid));
		echo '}';

	}

	function deleteFood(){
		include_once("food.php");
		$food=new food();
		$fid=$_REQUEST['fid'];

		if($food->deleteFood($fid)){
			echo '{"result":0,"message":"Food not deleted"}';
			return;
		}
		echo '{"result":1,"message":"Food Deleted"}';

	}

	function searchFood(){
		include_once("food.php");
		$food=new food();
		$txt=$_REQUEST['txt'];

		if(!$food->searchFood($txt)){
			echo '{"result":0,"message":"Could not get foods"}';
			return;
		}
		$row=$food->fetchArray();
		echo '{"result":1,foods:[';
		while($row){
			echo json_encode($row);
			if($row=$food->fetchArray()){
				echo ',';
			}

		}
		echo ']}';

	}

	function addFood(){
		include_once("food.php");
		$food=new food();
		$fname=$_REQUEST['fname'];
		$fcateg=$_REQUEST['fcateg'];
		$fprice=$_REQUEST['fprice'];
		$pic=$_REQUEST['pic'];

		if(!$food->addFood($fname,$fcateg,$fprice,$pic)){
			echo '{"result":0,"message":"Could not add the food"}';
			return;
		}

		echo '{"result":1,"message":"Succesfully added food"}';
	}

	function updateFood(){
		include_once("food.php");
		$food=new food();
		$fid=$_REQUEST['fid'];
		$fname=$_REQUEST['fname'];
		$fcateg=$_REQUEST['fcateg'];
		$fprice=$_REQUEST['fprice'];
		$pic=$_REQUEST['pic'];

		if(!$food->updateFood($fid,$fname,$fcateg,$fprice,$pic)){
			echo '{"result":0,"message":"Could not add the food"}';
			return;
		}

		echo '{"result":1,"message":"Succesfully added food"}';
	}

	switch ($cmd) {
		case 1:
			addFood();
			break;
		case 2:
			updateFood();
			break;
		case 3:
			getAllFoods();
			break;
		case 4:
			getByCategory();
			break;
		case 5:
			getFoodById();
			break;
		case 6:
			deleteFood();
			break;
		case 7:
			searchFood();
			break;
		default:
			echo '{"cmd":"none","message":"No command issued"}';
			break;
	}

}

?>