<?php
require_once ('dbhelper.php');
$productname = $price = $installment ='';

if(isset($_POST)){
    $s_id ='';
    if(isset($_POST['productname'])){
        $productname = $_POST['productname'];
    }
    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }
    if(isset($_POST['installment'])){
        $installment = $_POST['installment'];
    }
//     $sql = "INSERT INTO product(productname, price, installment) VALUES ('$productname', '$price','$installment')";
//   execute($sql);

if($s_id != ''){
    $sql = "update product set productname = '$productname', price = '$price', installment= '$installment' where id = ".$s_id;
}else{
    $sql = "INSERT INTO product(productname, price, installment) VALUES ('$productname', '$price','$installment')";
}
execute($sql);
header('Location: product.php');
die();
}
$id = '';
if (isset($_POST['id'])) {
	$id          = $_POST['id'];
	$sql         = 'select * from product where id = '.$id;
	$studentList = executeResult($sql);
	if ($userList != null && count($userList) > 0) {
		$row        = $userList[0];
		$productname = $row['productname'];
		$price      = $row['price'];
		$installment  = $row['installment'];
	} else {
		$id = '';
	}
}


?>