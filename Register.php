<!DOCTYPE html>
<?php 
include ('header_2.php');
include ('session_start.php');
?>
<!--Slider -->
    <div class="Silde-container">
        <img class="mySlides" src="Images/a.png">
        <img class="mySlides" src="Images/1.jpg">
        <img class="mySlides" src="Images/1.jpg">       
      </div>
</script>
<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}    
      x[myIndex-1].style.display = "block";  
      setTimeout(carousel, 9000); // Change image every 2 seconds
    }
    </script> 
    <?php
   
				$sql = "SELECT id, fullname, email, username FROM account where username = '{$_SESSION['username']}'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	echo "id: " . $row["id"]. "<br>Fullname: " . $row["fullname"]. "<br>Email: ". $row["email"]. "<br>UserName: " .$row["username"];
  }
} else {
  echo "0 results";
}
?>
<?php
include ('footer.php');
?>
     
</head>
    
</body>
</html>