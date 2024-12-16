<?php

$conn = mysqli_connect("localhost" ,"root" , "" ,"ecommerce");


$user_data =$_GET['data'];
if($user_data ===""){
	echo " ";
}

else{
$sql = "SELECT * FROM `product` WHERE `product_name` LIKE '%$user_data%'";

$query =mysqli_query($conn ,$sql);
$count = $query->num_rows;

if($count > 0){
	while($record = mysqli_fetch_assoc($query)){
		echo $record['product_name'] . "<br><br>";

	}
}

else{
	echo "Not Found";
}

}







?>