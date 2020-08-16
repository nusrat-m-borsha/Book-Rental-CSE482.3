<?php
  include "config.php";  


  $id = $_GET["id"];

  mysqli_query($conn, "DELETE FROM addbook WHERE id=$id");

?>

<script type="text/javascript">
	window.location = 'bookcollection.php';
</script>