<?php
    $l="localhost";
    $u="root";
    $p="";
    $db="indoor";
    $conn=mysqli_connect($l,$u,$p,$db);
    if(!$conn)
    {
    die("not connected".mysqli_connect_error());
}
/*else{
	echo "login is Connected  ";
}*/
?>

