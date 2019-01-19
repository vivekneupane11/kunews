<?php
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

$sql = "SELECT id, category, image, description , author FROM News  ORDER BY id DESC";
$result = $conn->query($sql);





if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      
            




        ?>
    <div class="homenews" id="a">
<div class="content">
    <img src="<?php echo $row['image'] ?>" alt="" id="image" style="border-radius:5px;margin-left:2px;padding:5px;height:110px;width:110px;">
    <div class="descriptions">
  
        <p style="overflow:hidden;padding:3px;"><?php echo $row['description'];?></p>  <a style="color:red;font-style:italic;padding:1px;margin-left:30px;" href="test.php?something=something&something1=<?php echo $row['id'] ?>">View More</a>
        <br> 
        <span style="margin-right:10px;padding:5px;font-size:12px;color:grey;font-family: 'Times New Roman', Times, serif"><?php echo $row['author']; ?></span> 
        <i class="fas fa-share-alt" style="padding:5px;"></i> &nbsp;&nbsp;&nbsp;&nbsp;<i class=""></i><i class="fas fa-heart"></i> <i class=""></i>
   
    </div>
</div>

<div class="content" style="padding:15px;float:right;margin-right:2px;">
        <img src="ku.png" alt="">
        <div class="descriptions">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat facilis quos atque tenetur dolor aut hic inven</p>
            <br>
            <span style="margin-right:10px;font-size:12px;color:grey;font-family: 'Times New Roman', Times, serif">By KUDOCSE</span> 
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