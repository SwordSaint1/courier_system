<?php 
include '../../conn.php';

$method = $_POST['method'];

if ($method == 'fetch_messenger') {
	$messenger_name = $_POST['messenger_name'];
	$c = 0;

	$query = "SELECT * FROM messengers WHERE name LIKE '$messenger_name%'";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;
			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_messenger" onclick="get_messenger_details(&quot;'.$j['id'].'~!~'.$j['name'].'~!~'.$j['address'].'~!~'.$j['contact_no'].'~!~'.$j['date_hired'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['name'].'</td>';
				echo '<td>'.$j['address'].'</td>';
				echo '<td>'.$j['contact_no'].'</td>';
				echo '<td>'.$j['date_hired'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="5" style="color:red;">No Result!</td>';
			echo '</tr>';
	}
}

if ($method == 'add_messenger') {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$date_hired = $_POST['date_hired'];
	$contact_no = $_POST['contact_no'];

	$check = "SELECT id FROM messengers WHERE name = '$name'";
	$stmt = $conn->prepare($check);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		echo 'Already Exist';
	}else{
		$query = "INSERT INTO messengers (`name`,`address`,`date_hired`,`contact_no`) VALUES ('$name','$address','$date_hired','$contact_no')";
		$stmt2 = $conn->prepare($query);
		if ($stmt2->execute()) {
			echo 'success';
		}else{
			echo 'error';
		}
	}
}

if ($method == 'delete_messenger') {
	$id = $_POST['id'];

	$query = "DELETE FROM messengers WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'update_messenger') {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact_no = $_POST['contact_no'];
	$date_hired = $_POST['date_hired'];

	$query = "UPDATE messengers SET name = '$name', address = '$address', contact_no = '$contact_no', date_hired = '$date_hired' WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}
$conn = NULL;
?>