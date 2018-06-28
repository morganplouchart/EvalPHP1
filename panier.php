<?php
$header = file_get_contents('./templates/header.php');
echo $header;

session_start();

if (isset($_GET["vider"]))
{
  session_unset();
}
?>

<div class="content">
            <div class="row">
                <div class="col-12"> 
                    <h3>Mon panier</h3>
                    <a href="panier.php?vider=1">Vider le panier</a>
                    <hr>
                </di>
            </div>
</div>
 
<?php

if (isset($_SESSION["list"]))
{
  foreach ($_SESSION["list"] as $value){
    echo $value . "<br>";
  }
}
?>
 
<hr>
 
<a href="index.php">Continue shopping</a>

<?php
$footer = file_get_contents('./templates/footer.php');
echo $footer;
?>