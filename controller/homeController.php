<?php 
	session_start();
	include_once '../model/db.php';

	$result = array('error' => false);
	$action = '';

	if(isset($_GET['action'])){
		$action = $_GET['action'];
    }
	
	

    //Reads the post from the User
	if($action == 'readpost'){
		$sql_posts = pg_query($conn, "SELECT * FROM user_posts");
		$posts = array();
		while($row_posts = pg_fetch_assoc($sql_posts)){
			array_push($posts, $row_posts);
		}
		$result['posts'] = $posts;
    }
    
    // //Creates a post from the user
	// if($action == 'create'){
    //     $postId = $_POST['post_id'];
	// 	$postTitle = $_POST['post_title']; 
	// 	$postContent = $_POST['post_content'];

	// 	$sql = pg_query($conn, "INSERT INTO gmsdc_post (post_id, post_title, post_content) VALUES ('$postId, $postTitle', '$postContent') ");
	// 	if($sql){
	// 		$result['message'] = "Post added Successfully.!";
	// 	}else{
	// 		$result['error'] = true;
	// 		$result['success'] = "Something went to wrong.!";
	// 	}
	// }










	

    //Updates a post
	if($action == 'update_profile'){
		$profile_id = $_POST['profile_id'];
		$bio = $_POST['bio']; 
		$other_info = $_POST['other_info'];
		$degree = $_POST['degree'];
		$study = $_POST['study'];
		$grade = $_POST['grade'];
		$description = $_POST['description'];
		$current_password = $_POST['current_password'];
		$new_password = $_POST['new_password'];

		//
		$sql = pg_query($conn, "UPDATE gmsdc_profile_stats SET  bio = '$bio', degree = '$degree', study = '$study', grade = '$grade', description = '$description', current_password = '$current_password', new_password = '$new_password'  WHERE profile_id = $profile_id");
		if($sql){
			$result['message'] = "Post Updated Successfully.!";
		}else{
			$result['error'] = true;
			$result['success'] = "Something went to wrong.!";
		}
    }
    
    // //Deletes a post from the database
	// if($action == 'delete'){
	// 	$id = $_POST['id'];

	// 	$sql = pg_query($conn, "DELETE FROM gmsdc_post WHERE post_id = '$postId' ");
	// 	if($sql){
	// 		$result['message'] = "Post Deleted Successfully.!";
	// 	}else{
	// 		$result['error'] = true;
	// 		$result['success'] = "Something went to wrong.!";
	// 	}
	// }

	pg_close($conn);
	echo json_encode($result);
?>