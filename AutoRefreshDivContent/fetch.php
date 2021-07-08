





<?php

// var_dump(isset($_POST["tweet_comment"]));



$connect = mysqli_connect("localhost","root","","weblesson");
if (isset($_POST["tweet_comment"])) {
	$sql = "INSERT INTO tweets (tweet_comment) VALUES('".($_POST['tweet_comment'])."')";
	mysqli_query($connect, $sql);
}


?>





