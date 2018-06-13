<php
$id = filter_input(INPUT_POST,'id');
$title = filter_input(INPUT_POST,'title');
$author = filter_input(INPUT_POST,'author');
$date = filter_input(INPUT_POST,'date');
     
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "testFile_db";

//Connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
     
if (mysqli_connect_error()){
     die('Connect Error ('.mysqli_connect_error().')'.mysqli_connect_error());
     }
else{
     $sql = "INSERT INTO documentinfo (id, title, author, date) values ('$id','$title','$author','$date')";
     if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
      }
      else{
        echo "Error: " . $sql. "<br>". $conn->error;
      }
      $conn->close();
     }
?>
