<?php 
// Establish database connection 
include("dbconfig.php");

// code user Email availablity
if(!empty($_POST["email"])) {
	$email= $_POST["email"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

		echo "error :you did not enter a valid email.";
	}
	else {
		$sql ="SELECT email FROM student WHERE email=:email";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<span style='color:red'> Email already exists .</span>";
 
} else{
	
	echo "<span style='color:green'> Email available for Registration .</span>";

}
}
}
// End code check email

// code user ID No availablity
if(!empty($_POST["rollno"])) {
	$idno= $_POST["rollno"];
$sql ="SELECT rollno FROM student WHERE rollno=:rollno";
$query= $dbh -> prepare($sql);
$query-> bindParam(':rollno', $idno, PDO::PARAM_INT);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
 echo "<span style='color:red'> Roll number already exists .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
 echo "<span style='color:green'> Roll number Available.</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}
?>