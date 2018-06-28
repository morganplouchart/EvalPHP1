
<?php
   if(isset($_COOKIE["password"])){

echo '<a class="log" href="logout.php"> Se delogger</a>';

}elseif(!isset($_COOKIE["password"])){

 echo '<a  href="login.php">Se logger</a>';

}
?>
