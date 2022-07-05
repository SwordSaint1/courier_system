<?php 
include '../../conn.php';

$method = $_POST['method'];

if ($method == 'announcement') {
	$title = $_POST['title'];
	$author = $_POST['author'];
	$date_posted = $_POST['date_posted'];
	$content = $_POST['content'];

	$query = "INSERT INTO announcements (`title`,`author`,`date_posted`,`content`) VALUES ('$title','$author','$date_posted','$content')";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'fetch_announcement') {
	$date_posted_from = $_POST['date_posted_from'];
	$date_posted_to = $_POST['date_posted_to'];
	$c = 0;

	$query = "SELECT * FROM announcements WHERE (date_posted >='$date_posted_from' AND date_posted <= '$date_posted_to')";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach($stmt->fetchALL() as $j){
			$c++;

			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#update_announcement" onclick="get_announcement_details(&quot;'.$j['id'].'~!~'.$j['title'].'~!~'.$j['author'].'~!~'.$j['date_posted'].'~!~'.$j['content'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$j['title'].'</td>';
				echo '<td>'.$j['author'].'</td>';
				echo '<td>'.$j['content'].'</td>';
				echo '<td>'.$j['date_posted'].'</td>';
			echo '</tr>';
		}
	}else{
			echo '<tr>';
				echo '<td colspan="5" style="color:red;">No Result!</td>';
			echo '</tr>';
	}
}

if ($method == 'update_announcement') {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$date_posted = $_POST['date_posted'];
	$content = $_POST['content'];

	$query = "UPDATE announcements SET title = '$title', author = '$author', date_posted = '$date_posted', content = '$content' WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error';
	}
}

if ($method == 'delete_announcement') {
	$id = $_POST['id'];

	$query = "DELETE FROM announcements WHERE id = '$id'";
	$stmt = $conn->prepare($query);
	if ($stmt->execute()) {
		echo 'success';
	}else{
		echo 'error'; 
	}
}

$conn = NULL;
?>