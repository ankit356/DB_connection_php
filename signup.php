<html>
<head>
</head>
<body>
<form method ="post">
<input type ="text"name="text1"required placeholder="Enter id"><br>
<input type ="text"name="text2"required placeholder="Enter Username"><br>
<input type ="number"name="text3"required placeholder="Enter Mobile no"><br>
<input type ="password"name="text4"required placeholder="Enter Password"><br>
<input type="submit" name="submit" value ="signup"/>
</form>
</body>
</html>

<?php

    if(isset($_POST['submit']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bca5";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if(!$conn){
            ("Connection failed: ".mysqli_connect_error());
        }
        echo "Connected to db";
        
        $id = $_POST['text1'];
        $user = $_POST['text2'];
        $mobile = $_POST['text3'];
        $pass = $_POST['text4'];

        $query =mysqli_query($conn,"insert into signup(id,username,password,Mobile_No) values($id,'$user','$pass',$mobile)") or die("Error in query");

        echo "Data Inserted";

    }

?>