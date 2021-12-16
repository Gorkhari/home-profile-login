<?php 
Include ('session_start.php');
$file_get = $_FILES['Productimage']['name'];
$temp = $_FILES['Productimage']['tmp_name'];
//$Image = filter_input(INPUT_POST, 'Productimage');


$file_to_saved = "documents/".$file_get; //Documents folder, should exist in       your host in there you're going to save the file just uploaded
move_uploaded_file($temp, $file_to_saved);

echo $file_to_saved;
$username = $_SESSION['username'] ;
$ProductName = filter_input(INPUT_POST, 'Productname');
$Price = filter_input(INPUT_POST, 'Price');
$Short_description = filter_input(INPUT_POST, 'Short_description');
$SKU = filter_input(INPUT_POST, 'SKU');
$description = filter_input(INPUT_POST, 'description');
$sql = "INSERT INTO product (username, Productname, Price, Short_description, SKU, description) values  ('$username','$ProductName','$Price','$Short_description','$SKU','$description')";

if (mysqli_query($con, $sql)) {
		$message = "Product Has been added";
echo "<script type='text/javascript'>alert('$message');</script>";
	
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

?> 
<html>
<head></head>
<body>
<a href="profile.php">Go to Profile Page</a>
</body>
</html>