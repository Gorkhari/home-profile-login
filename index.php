<!DOCTYPE html>
<?php 
include ('header.php');

?>
<!--Slider -->
    <div class="Silde-container">
        <img class="mySlides" src="Images/1.jpg">
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
include ('footer.php');
?>
     
</head>
    
</body>
</html>