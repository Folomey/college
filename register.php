<?php
method="POST" action="connect.php"
		if (isset($_REQUEST['name']) || isset($_REQUEST['surname']) || isset($_REQUEST['phone']) || isset($_REQUEST['password'])) {
			$name = $_REQUEST['name'];
      			$surname = $_REQUEST['surname'];
      			$phone = $_REQUEST['phone'];
      			$password = $_REQUEST['password'];
      			mysqli_query($db, "INSERT INTO users VALUES (NULL, '$name', '$surname', '$phone', '$password', 0)");
      		}
?> 