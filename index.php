
<html>
<body>
<form method="post" action="newproject.php">
<input type="text" name="name" value="enter name">
<input type="submit">
</form>
</body>
</html>
<?php
if(isset($_POST["name"])){
$newname=$_POST["name"];
print($newname);
}
?>