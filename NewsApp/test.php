<?php


if(@$_REQUEST['something']=="something"){
    $id = $_REQUEST['something1'];
     }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kunews";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, category, image, description , author FROM News where id= '$id' ";
$result = $conn->query($sql);





if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      
            




        ?>
    <div class="homenews">
<div class="content">
    <img src="<?php echo $row['image'] ?>" alt="" id="image" style="height:500px;width:100%;">
    <div class="descriptions">
     <p style="font-size:40px;color:grey;font-style:italic;">   Category : <?php echo $row['category'] ?></p>
        <p style="font-size:40px;"><?php echo $row['description'];?></p> 
        <br>
        <span style="font-size:34px;color:grey;font-family: 'Times New Roman', Times, serif">Author: <?php echo $row['author']; ?></span> 
        <i class="fas fa-share-alt"></i> &nbsp;&nbsp;&nbsp;&nbsp;<i class=""></i><i class="fas fa-heart"></i> <i class=""></i>
   
    </div>
</div>


    </div>
        <?php




      






    }
} else {
    echo "0 results";
}
$conn->close();
?>