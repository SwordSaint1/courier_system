<?php 
include '../../conn.php';

$method = $_POST['method'];

if ($method == 'add_client') {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$client_code = $_POST['client_code'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$nature_business = $_POST['nature_business'];
	$business_type = $_POST['business_type'];
	$operation_years = $_POST['operation_years'];
	$client_website = $_POST['client_website'];
	$client_branch = $_POST['client_branch'];
	$payment_option = $_POST['payment_option'];
	$bank_reference = $_POST['bank_reference'];
	$gross_revenue = $_POST['gross_revenue'];
	$shipment_mode = $_POST['shipment_mode'];
	$proposed_credit = $_POST['proposed_credit'];
	$credit_limit = $_POST['credit_limit'];

	$query = "INSERT INTO client_details (`name`,`address`,`client_code`,`email`,`phone_no`,`nature_business`,`business_type`,`operation_years`,`client_website`,`client_branch`,`payment_option`,`bank_reference`,`gross_revenue`,`shipment_mode`,`proposed_credit`,`credit_limit`) VALUES ('$name','$address','$client_code','$email','$phone_no','$nature_business','$business_type','$operation_years','$client_website','$client_branch','$payment_option','$bank_reference','$gross_revenue','$shipment_mode','$proposed_credit','$credit_limit')";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_client') {
	$name = $_POST['name'];
	$c =0;

	$query = "SELECT * FROM client_details WHERE name LIKE '$name%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr  style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_client" onclick="get_client_details(&quot;'.$j['id'].'~!~'.$j['name'].'~!~'.$j['address'].'~!~'.$j['client_code'].'~!~'.$j['email'].'~!~'.$j['phone_no'].'~!~'.$j['nature_business'].'~!~'.$j['business_type'].'~!~'.$j['operation_years'].'~!~'.$j['client_website'].'~!~'.$j['client_branch'].'~!~'.$j['payment_option'].'~!~'.$j['bank_reference'].'~!~'.$j['gross_revenue'].'~!~'.$j['shipment_mode'].'~!~'.$j['proposed_credit'].'~!~'.$j['credit_limit'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['name'].'</td>';
				echo '<td>'.$j['address'].'</td>';
				echo '<td>'.$j['client_code'].'</td>';
				echo '<td>'.$j['email'].'</td>';
				echo '<td>'.$j['phone_no'].'</td>';
				echo '<td>'.$j['nature_business'].'</td>';
				echo '<td>'.$j['business_type'].'</td>';
				echo '<td>'.$j['operation_years'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="9" style="color:red;">No Result!</td>';
			echo '</tr>';
	}
}

if ($method == 'update_client') {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$client_code = $_POST['client_code'];
	$email = $_POST['email'];
	$phone_no = $_POST['phone_no'];
	$nature_business = $_POST['nature_business'];
	$business_type = $_POST['business_type'];
	$operation_years = $_POST['operation_years'];
	$client_website = $_POST['client_website'];
	$client_branch = $_POST['client_branch'];
	$payment_option = $_POST['payment_option'];
	$bank_reference = $_POST['bank_reference'];
	$gross_revenue = $_POST['gross_revenue'];
	$shipment_mode = $_POST['shipment_mode'];
	$proposed_credit = $_POST['proposed_credit'];
	$credit_limit = $_POST['credit_limit'];

	$query ="UPDATE client_details SET name = '$name', address = '$address', client_code = '$client_code', email = '$email', phone_no = '$phone_no', nature_business = '$nature_business', business_type = '$business_type', operation_years = '$operation_years', client_website = '$client_website', client_branch = '$client_branch', payment_option = '$payment_option', bank_reference = '$bank_reference', gross_revenue = '$gross_revenue', shipment_mode = '$shipment_mode', proposed_credit = '$proposed_credit', credit_limit = '$credit_limit' WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'delete_client') {
	$id = $_POST['id'];

	$query = "DELETE FROM client_details WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
$conn = NULL;
?>