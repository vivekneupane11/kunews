
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <form  >

    <input type="text" id="category" placeholder="category">
    <input type="text" id="description" placeholder="news" >
    <input type="text" id="image" placeholder="image" >
    <input type="text" id="author" placeholder="News author name" >
 <button onclick="insertData()">Submit</button>


    </form>

    <div id="message"></div>
    <script>

function insertData() {
var category=$("#category").val(); //name
var description=$("#description").val(); //roll
var image=$("#image").val(); //image //class
var author=$("#author").val();


// AJAX code to send data to php file.
    $.ajax({
        type: "POST",
        url: "insert-data.php",
        data: {category:category,description:description,image:image,author:author},
        dataType: "JSON",
        success: function(data) {
        
        
        },
        error: function(err) {
        alert(err);
        }
    });

    // request permission on page load
document.addEventListener('DOMContentLoaded', function () {
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.'); 
    return;
  }

  if (Notification.permission !== "granted")
    Notification.requestPermission();
});


  if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
    var notification = new Notification('Notification title', {
      icon: 'ku.png',
      body: "Kathmandu University has posted new News!",
    });

    notification.onclick = function () {
      window.open("http://localhost/NewsApp");      
    };

  

}

 }
    
   </script>
</body>
</html>