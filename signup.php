<?php



if(isset($_POST['submit']))
{
    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $contactno=$_POST["contactno"];
    $email=$_POST["email-id"];
    $Userpassword=$_POST["password"];
    $passoutyear=$_POST["year"];
    $securityque=$_POST["securityQue"];
    $department=$_POST["department"];
    $companyName=$_POST["companyName"];
    $designation=$_POST["designation"];
    $job=$_POST["job"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumnimanagement";

$conn = new mysqli($servername, $username, $password,$dbname);

	if ($conn->connect_error)
	{
		die("Connection error". $conn->connect_error);
    }
    
    $sql="insert into signup values('$firstname','$lastname',$contactno,'$email',md5('$Userpassword'),'$passoutyear','$securityque','$department','$companyName','$designation','$job')";
    if($conn->query($sql))
    {
        echo "<script>alert('Signup Successfully');</script>";
        header("Location:login.html");
    }
    else
    {
        echo "<script>alert('User Already Registered..!');</script>";
        header("Location:signup.html");
    }

    
        
}

?>


