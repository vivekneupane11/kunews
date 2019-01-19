//SPA CODE HERE NOT AJAX DATABASE FETCH WALA


function searchChange(){
    var searchBox = document.getElementById("searchBox");
    searchBox.onfocus= function(){
        searchBox.style.width="180px";
        searchBox.style.borderBottom="solid red 1px";
        searchBox.style.transition="all ease 0.5s";
    } 
   }


   function selectCategory(page){
       switch(page){
      
           case 'events.html':
           document.getElementById('home').style.color ='black';
           document.getElementById('events').style.color ='red';
           document.getElementById('exam').style.color ='black';
           document.getElementById('aboutus').style.color ='black';
     
           break;
           case 'exam.html':
           document.getElementById('home').style.color ='black';
           document.getElementById('events').style.color ='black';
           document.getElementById('exam').style.color ="red";
           document.getElementById('aboutus').style.color ='black';
           break;
           case 'aboutus.html':
           document.getElementById('home').style.color ='black';
           document.getElementById('events').style.color ='black';
           document.getElementById('exam').style.color ='black';
           document.getElementById('aboutus').style.color ='red';
           break;
           default:
           document.getElementById('home').style.color ='red';
           document.getElementById('events').style.color ='black';
           document.getElementById('exam').style.color ='black';
           document.getElementById('aboutus').style.color ='black';

       }

       var xhttprequest = new XMLHttpRequest();
       xhttprequest.onreadystatechange = function(){
           if(this.readyState == 4 && this.status == 200){
            document.getElementById('newscontent').innerHTML = this.responseText;
           }
       }
       xhttprequest.open('GET',page,true);
       xhttprequest.send();




   }




 