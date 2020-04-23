<?php 
	session_start();
	include_once '../model/db.php';

	$result = array('error' => false);
	$action = '';

	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
	//read table
	if($action == 'read'){
		$sql = pg_query($conn, "SELECT * FROM post");
		$users = array();
		while($row = pg_fetch_assoc($sql)){
			array_push($users, $row);
		}
		$result['users'] = $users;
	}
	//create row
	if($action == 'create'){
		//init
		print_r($_POST);
		$date = $_POST['date'];
		$url = $_POST['url'];
		$location = $_POST['location'];
		$subject = $_POST['subject'];
		$role = $_POST['role'];
		$title = $_POST['title'];
		$xp = $_POST['xp'];
		$file = $_POST['file'];

		$sql = pg_query($conn, "INSERT INTO post (date, url, location, subject, role, title, xp, file) VALUES ('$date', '$url', '$location', '$subject', '$role', '$title', '$xp', '$file') ");

		//error
		if($sql){
			$result['message'] = "User added Successfully.";
		}else{
			$result['error'] = true;
			$result['success'] = "Something went to wrong.";
		}
	}
	pg_close($conn);
	echo json_encode($result);
?>