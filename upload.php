<?php
include ("db.php");
?>
<html>
    <head><title>upload</title></head>
    <body>
<form action="#" id="form" enctype="multipart/form-data">
    <label>Address:</label>
    <input type="text" name="address"><br><br>
    <label>Room number:</label>
    <input type="number" name="roomnumber"><br><br>
    <label>Rent:</label>
    <input type="number" name="rent"><br><br>
    <label>Details:</label>
    <textarea name="details">
    </textarea><br><br>
    <label>Photo:</label>
    <input type="file" name="img" ><br><br>
    <input type="submit" name="submit" value="submit">
    
</form>
</body>
</html>


