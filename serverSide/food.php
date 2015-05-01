<?php
include_once("base.php");
class food extends base{
//gets all the food in the restaurant
function getFoods(){
$sql="select * from food";

return $this->query($sql);	
}
//gets food belonging to a given category
function getFoodByCategory($categ){
	$sql="select * from food where category='$categ'";

	return $this->query($sql);
}
//get food identified by a given id
function getFoodById($id){
	$sql="select * from food where food_id='$id'";

	if(!$this->query($sql)){
		return false;
	}
	return $this->fetchArray();
}
//add a food in the database
function addFood($name,$cate,$price,$pic){
	$sql="insert into food set food_name='$name',food_price='$price',image_link='$pic',category='$cate'";

	return $this->query($sql);
}
//update  food in the database
function updateFood($id,$name,$cate,$price,$pic){
	$sql="update food set food_name='$name',food_price='$price',image_link='$pic',category='$cate' where food_id='$id'";

	return $this->query($sql);
}
//delete food from the database
function deleteFood($id){
	$sql="delete from food where food_id='$id'";

	return $this->query($sql);
}
//search for food in the database
function searchFood($txt){
	$sql="select * from food where food_name like '%$txt%'";

	return $this->query($sql);
}



}

?>