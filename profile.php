<?php 
include ('header_2.php');
include ('session_start.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		</nav>
		<div class="content">
			<h2>Profile Page</h2>
			<div>
				<p>Your account details are below:</p>
				<?php
				$sql = "SELECT fullname, email, username FROM account where username = '{$_SESSION['username']}'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<div"
	echo "<br>Fullname: " . $row["fullname"]. "<br>Email: ". $row["email"]. "<br>UserName: " .$row["username"];
  }
} else {
  echo "0 results";
}
?>




</br>
<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
<?php
include('product-display.php');
?>

</script> 
<div class="form-popup" id="myForm">
  <form class="form-container" action="product_add.php" method="post" enctype="multipart/form-data">
	<h1>Login</h1>

	<label for="Productimage"><b>Product Image</b></label>
	<input type="file" placeholder="insert Image" value="" name="Productimage" id="Productimage" required><br>
	
	<label for="productname"><b>Product Name</b></label>
	    <input type="text" placeholder="Enter Product name" value="" name="Productname" id="Productname" required>

    <label for="Price"><b>Price</b></label>
    <input type="text" name="Price" placeholder="Price" value="$"id="Price" required> 

    <label for="Short_description"><b>Short description</b></label>
    <input type="text" placeholder="Write Short description"value="" name="Short_description" id="Short_description" required>

    <label for="SKU"><b>SKU</b></label>
    <input type="text" value="" name="SKU" placeholder="SKU" id="SKU" required> 

    <label for="description"><b> description</b></label>
    <input type="text" placeholder="description"value="" name="description" id="description" required>

	
	<button class="btn" type="submit" value="submit">Add New Product</button>
    <button type="button" class="btn cancel" onclick="closethisForm()">Close</button> 
  </form>
</div>
<script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }
    
    function closethisForm() {
      document.getElementById("myForm").style.display= "none";
    }
    </script> 
				
				
			</div>
		</div>
	</body>
</html>