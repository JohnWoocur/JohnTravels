<?php
include_once ("../admin_dashboard/db-connection.php");

$Blog_title = $_POST['Blog_title'];
$Highlighted = $_POST['Highlighted'];
$Blog_content1 = $_POST['Blog_content1'];
$Blog_content2 = $_POST['Blog_content2'];
$Blog_img = $_POST['Blog_img']; 
$Tag_names = $_POST['Tag_names'];



$sql = "insert into blog(Blog_title,Highlighted,Blog_content1,Blog_content2,Blog_img) values ('$Blog_title','$Highlighted','$Blog_content1','$Blog_content2','$Blog_img')";
$sql2 = "insert into tags(Tag_names) values ('$Tag_names')";

$result = mysqli_query($conn,$sql);
$result2 = mysqli_query($conn,$sql2);

if($result && $result2)
{
	echo "<script>alert('Successfully submitted');</script>";
	header("Location: user-dashboard.php");
	exit();
}
else
{
	echo "<script>alert('Error while submitting!');</script>";
	header("Location: U-add-blog.php");
	exit();
}

