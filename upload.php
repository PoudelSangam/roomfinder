<?php
include ("db.php");
//include("v_session.php");
include("rent_upload.php");
?>
<html>
    <head><title>upload</title></head>
    <body>
<form action="#" method="POST" id="form" enctype="multipart/form-data">
    <label>Address:</label>
    <input type="text" name="location"><br><br>
    <label>Title:</label>
    <input type="text" name="title"><br><br>
    <label>facility:</label>
    <input type="text" name="facility"><br><br>
    <label>Room number:</label>
    <input type="number" name="roomnumber"><br><br>
    <label>Price:</label>
    <input type="number" name="price"><br><br>
    <label>Details:</label>
    <textarea name="details">
    </textarea><br><br>
    <label>Photo:</label>
    <input type="file" name="img1" ><br><br>
    <input type="submit" name="login" value="submit">
    
</form>
</body>
</html>


