<html>
<head>
</head>
<body>
<form id ="form1" name="form1" method ="post">
First Name: <input type ="text"name="text1"required placeholder="Enter firstname"><br>
Last Name: <input type ="text"name="text2"required placeholder="Enter lastname"><br>
Email: <input type ="text"name="text3"required placeholder="Enter Email"><br>
<input type="submit" name="submit"/>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('db_connection.php');
$firstname=$_POST['text1'];
$lastname=$_POST['text2'];
$Email=$_POST['text3'];

$query =mysqli_query($conn,"insert into myguests(firstname,lastname,email) values('$firstname','$lastname','$Email')") or die("Error in query");
echo "Data is inserted";
}
?>