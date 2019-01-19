<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=kunews", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
$student_name=$_POST['category'];
$student_roll_no=$_POST['description'];
$student_class=$_POST['image'];
$student_author=$_POST['author'];

$stmt = $conn->prepare("INSERT INTO 
news(category,description,image,author) 
VALUES(:student_name, :student_roll_no,:student_class,:student_author)");

 $stmt->bindparam(':student_name', $student_name);
 $stmt->bindparam(':student_roll_no', $student_roll_no);
 $stmt->bindparam(':student_class', $student_class);
 $stmt->bindparam(':student_author', $student_author);
 if($stmt->execute())
 {
     echo 'sucessful';
  $res="Data Inserted Successfully:";
  echo json_encode($res);

  }
  else {
  $error="Not Inserted,Some Probelm occur.";
  echo json_encode($error);
  }



  ?>