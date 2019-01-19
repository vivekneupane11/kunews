
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="manifest" href="manifest.json" />
       
</head>
<body>
    <!-- Navigation Bar -->
   <div class="navigation">
      <img src="ku.png" alt="" >

      <div class="search">
        <input id="searchBox" type="text" onfocus="searchChange();" class="searchTerm" 
        placeholder="What are you looking for?" 
        style="
        height:40px;width:160px;border:none;
        border-bottom: solid red 0.2px;
        line-height:55px;outline: none;">
        <button type="submit" class="searchButton">
          <i class="fa fa-search" style="font-size: 15px;" onclick="notify()"></i>
       </button>
     </div>

      <i class="material-icons" style="line-height:55px;font-size: 40px;color:red;margin-right:10px;">
        bookmark
    </i>
   </div>
<!-- Navigation Bar Ends Here -->
<br>

<!-- Category Starts Here -->
<ul class="category" id="category">
   <li onclick="selectCategory('home.php');"><i class="fas fa-home fa-5x" id='home' style="font-size: 42px;color:red;"> <br> <span class="subtitle">Home</span></i> </li></a> 
    <li onclick="selectCategory('events.html');"><i class="fas fa-book fa-5x"id='events' style="font-size: 42px;"> <br> <span class="subtitle" >Events</span></i> </li>
    <li onclick="selectCategory('exam.html');"><i class="far fa-newspaper fa-5x"id='exam' style="font-size: 42px;"><br> <span class="subtitle" >Exam</span></i> </li>
    <li onclick="selectCategory('aboutus.html');"><i class="fa fa-info-circle fa-5x"id='aboutus' style="font-size: 42px;"><br> <span class="subtitle" >AboutUs</span></i> </li>
    
</ul>

<!-- Category ends here -->

<br>
<!-- ALL NEWS HOME EVENTS EXAM ABOUTUS GOES HERE --><!-- ALL NEWS HOME EVENTS EXAM ABOUTUS GOES HERE --><!-- ALL NEWS HOME EVENTS EXAM ABOUTUS GOES HERE -->

<div class="news-content" id="newscontent">
<!-- ALL NEWS HOME EVENTS EXAM ABOUTUS GOES HERE -->
Kathmandu University News Section
    <!-- ALL NEWS HOME EVENTS EXAM ABOUTUS GOES HERE --><!-- ALL NEWS HOME EVENTS EXAM ABOUTUS GOES HERE --><!-- ALL NEWS HOME EVENTS EXAM ABOUTUS GOES HERE -->
    
    <?php
 include('database.php');



?>


</div>















   <script src="ajax.js"></script>


   <script type="text/javascript" src="jquery-1.3.2.js"> </script>

</body>
</html>