<?php
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


$customerid=$_SESSION['id'];

$result = mysqli_query($conn,"INSERT INTO blog(Blog_title,Highlighted,Blog_content1,Blog_content2,Blog_img) values ('$Blog_title','$Highlighted','$Blog_content1','$Blog_content2','$filename')");
$result2 = mysqli_query($conn,"INSERT INTO tags(Tag_names) values ('$Tag_names')");



if($result && $result2)
{
	if (move_uploaded_file($tempname, $folder))
	 {

		echo "uploaded successfully";
		header("Location: user-dashboard.php");
	}
	else
	{

		echo "Failed to upload image";

	}
}
else
{
	echo "failed to Uploaded";
	header("Location: user-add-blog.php");
}	

?>