
 function sendRequest(u){
	// Send request to server
	//u a url as a string
	//async is type of request
	var obj=$.ajax({url:u,async:false});
	//Convert the JSON string to object
	var result=$.parseJSON(obj.responseText);
	return result;	//return object
				
}
	
function sellProduct(pid){
	
	var url="serverSide/foodresponse.php?cmd=5&fid="+pid;
	
	var res=sendRequest(url);
	
	if(res){
		price=res[2];
		foodname=res['food_name'];
		
		var transactionTable=document.getElementById("saleTable");
		if(!document.getElementById(foodname)){
			
		var rows=transactionTable.rows.length;
		
		var row=transactionTable.insertRow(rows);
		row.id=foodname;
		
		var foodcell=row.insertCell(0);		
		var qtycell=row.insertCell(1);
		var pricecell=row.insertCell(2);
		var actioncell=row.insertCell(3);
		
		foodcell.innerHTML=foodname;
		foodcell.id="foodnameid";
		qtycell.innerHTML=1;
		qtycell.id="quantityid";
		pricecell.innerHTML=price;
		pricecell.id="priceid";
		actioncell.innerHTML="";
		}
		else
			checkCount(foodname,price);
		
		updateTotal()
		
	}
	
}

function checkCount(name,price){
	var count=document.getElementById(name); //get the row name by foodname as id
	
		if(count.cells[0].innerHTML==name){//check whether the foodname is same as the row id
			count.cells[1].innerHTML=parseInt(count.cells[1].innerHTML)+1; //increase the count
			count.cells[2].innerHTML=price*parseFloat(count.cells[1].innerHTML); //update price
		}
		
}

function updateTotal(){
	var prices=document.getElementById("priceid");
	totalPrice=0;
	/*
	for(var i=0;i<prices.length;i++){
		alert(parseFloat(prices[i].innerHTML));
		totalPrice=totalPrice+parseFloat(prices[i].innerHTML);
	}
	*/
	$("#priceid").each(function(){
		totalPrice=totalPrice+$(this).text();
	});
	
	var total=document.getElementById("totalprice");
	
	total.value=totalPrice;
	getChange(); //method to activate change giver
}

function getChange(){
	$( "#paid" ).keyup(function() {
	$("#change").val($("#paid").val() - $("#totalprice").val());
});
	if($("#totalprice").val()>1 && $("#paid").val()>1){
		$("#change").val($("#paid").val() - $("#totalprice").val());
	}
}
//method to store a transaction in the database
function transact(){
	if($("#change").val()<0 || $("#change").val()==''){
		alert("You can't transact");
		return;
	}
	
	var table=document.getElementById("saleTable");
	var rows=table.rows.length;
	names="";
	quantities="";
	prices="";
	for(var k=1;k<rows;k++){
		row=table.rows[k];
		names=names + row.cells[0].innerHTML + ",";
		quantities=quantities+row.cells[1].innerHTML+",";
		prices=prices+row.cells[2].innerHTML+",";		
	}
	var totalprice=document.getElementById("totalprice").value;
	
	
	//var empId=document.getElementById("empId").value;
	var empId=3;
	var tranId = Math.floor(Math.random() * (10000000)) + 10000000;
	
	var url="serverSide/transactionresponse.php?cmd=1&tranid="+tranId+"&fnames="+names+"&fqty="+quantities+
	"&fprice="+prices+"&total="+totalprice+"&empid="+empId;
	
	var transacted=sendRequest(url);
	alert("transacting");
	alert(transacted.result);
}