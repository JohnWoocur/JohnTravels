<?php
include 'functions.php';
session_start();
include_once ("db-connection.php");

	$filename = $_FILES["Blog_img"]["name"];

    $tempname = $_FILES["Blog_img"]["tmp_name"];  

    $folder = "blogs/".$filename;

$Blog_title = $_POST['Blog_title'];
$Highlighted = $_POST['Highlighted'];
$Blog_content1 = $_POST['Blog_content1'];
$Blog_content2 = $_POST['Blog_content2'];
$Tag_names = $_POST['Tag_names'];



if (isset($_SESSION['id'])) {
$customerid=$_SESSION['id'];


$sql = "INSERT INTO blog (Blog_title, Highlighted, Blog_content1, Blog_content2, Blog_img, Customer_Id) 
        VALUES ('$Blog_title', '$Highlighted', '$Blog_content1', '$Blog_content2', '$filename', $customerid)";


$result = mysqli_query($conn, $sql);

if($result){
	if (move_uploaded_file($tempname, $folder))
	 {

		
		$query="SELECT Blog_Id FROM `blog` WHERE $customerid";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		$Blog_Id = $row['Blog_Id'];
		if ($result) {
			
			$sql1 = "INSERT INTO blog_tags (Tag_Name,Blog_Id) VALUES ('$Tag_names','$Blog_Id')";

				$result1 = mysqli_query($conn, $sql1);
				if($result1){
					$_SESSION['Smsg']="Blog added Successfully!";
					header("Location: user-dashboard.php");
					exit();
				}
				else{
					$_SESSION['Emsg']= "Blog adding failed, please try again";
					header("Location: user-add-blog.php");
					exit();
				}
		}else{
			$_SESSION['Emsg']="Something wrong in your id !";
			header("Location: user-dashboard.php");
			exit();
		}
	}
    
}
else{

	$_SESSION['Emsg']="Blog image adding failed!";
	header("Location: user-dashboard.php");
	exit();

}	
}
?> 