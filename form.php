<form
action= "form.php" method= "GET">
NAME : <input type="text" name="fname">
<br>
Last: <input type="text" name="lname">
<br>
<input type="submot">

</form>

<?php 
echo $_REQUEST["fname"];
echo $_REQUEST["lname"];




?>