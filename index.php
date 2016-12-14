<html>
    <head>
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script>

function sendToDatabase(){

  var name = document.getElementById('sn').value;
  var sid = document.getElementById('sid').value;
  
  
  
  $.post( "pageb.php", { studentname: name, sid: sid })
         .done(function( data ) {
           
            
            alert( "Data Loaded: " + data );
         });
}
</script>
    </head>

    Student name: <input type="text" id="sn"/>   <br>
    SID: <input type="text" id = "sid"/>
    
    <button onclick="sendToDatabase()">Send Details!</button>


</html>