<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<div class="content">
			<h2>Your Products List</h2>
			<div>
				<p>Your Products details are below:</p>
				<button class="Add_product" type="button" onclick="openForm()">Add New Items</button>
				<?php
				
				$sql = "SELECT product_id, Productname, Price, Short_description, SKU, Description FROM product where username = '{$_SESSION['username']}'";
$result = $con->query($sql);
if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "id: " . $row["product_id"]. "<br>Product Name: " . $row["Productname"]. "<br>Product Price: ". $row["Price"]. "<br>Short_description: " .$row["Short_description"];
  }
} else {
 echo "0 results";
}
?>