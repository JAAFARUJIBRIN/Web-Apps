<?php 
if(isset($_POST['check']))
$name= $_POST['user'];
$rname=strrev("$name");
if ($name==$rname) {
	echo $name."  is a palindrome";
	exit();
	# code...
}
else
echo "it is not a palindrome";

 ?>