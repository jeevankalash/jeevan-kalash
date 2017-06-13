<?php

include "config.php";

$Name= $_POST['name'];
$Email= $_POST['email'];
$Comment= $_POST['comment'];

echo "Thankyou " .$Name . " for reading my poems and commenting.";

$query= "INSERT INTO contactme(Name, Email, Comments) VALUES ('$Name','$Email','$Comment')";

$add_record= mysqli_query($connect, $query);

if($add_record){
	echo "data added";
}
else{
	echo "couldn't add data";
}

?>
