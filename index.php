<?php
        $header = file_get_contents('./templates/header.php');
        echo $header;
        session_start();
        
        if (isset($_GET["ajouter"]))
        {
        if (!isset($_SESSION["list"]))
        {
            $_SESSION["list"] = array();
        }
        array_push($_SESSION["list"], $_GET["ajouter"]);
        }

        $panier_count = 0;
        if (isset($_SESSION["list"]))
        {
        $panier_count = sizeof($_SESSION["list"]);
        }
        
?>



<section>
        <div class="content">
        <form action="panier.php" method="POST">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">PS4</h5>
                            <img src="./img/ps4.png"/>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p>prix : <span>249 €</span></p>
                            <a href="index.php?ajouter=PS4">Ajouter</a>
                            <a href="panier.php">Voir le panier</a> <br><br><br> (<?php print $panier_count; ?> produits)<br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Nintendo Switch</h5>
                            <img src="./img/switch.jpg"/>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p>prix : <span>249 €</span></p>
                            <a href="index.php?ajouter=Switch">Ajouter</a>
                            <a href="panier.php">Voir le panier</a> <br><br><br> (<?php print $panier_count; ?> produits)<br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">X box One</h5>
                            <img src="./img/xbox.png"/>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p>prix : <span>199 €</span></p>
                            <a href="index.php?ajouter=XboxOne">Ajouter</a>
                            <a href="panier.php">Voir le panier</a> <br><br><br> (<?php print $panier_count; ?> produits)<br><br><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Xbox one X</h5>
                            <img src="./img/xboxonex.jpg"/>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p>prix : <span>399 €</span></p>
                            <a href="index.php?ajouter=XboxOneX">Ajouter</a>
                            <a href="panier.php">Voir le panier</a> <br><br><br> (<?php print $panier_count; ?> produits)<br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">PS4 pro</h5>
                        <img src="./img/ps4pro.jpg"/>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p>prix : <span>349 €</span></p>
                            <a href="index.php?ajouter=PS4PRO">Ajouter</a>
                            <a href="panier.php">Voir le panier</a> <br><br><br> (<?php print $panier_count; ?> produits)<br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Produit3</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="index.php?ajouter=Produit6">Ajouter</a>
                            <a href="panier.php">Voir le panier</a> <br><br><br> (<?php print $panier_count; ?> produits)<br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</section>

<?php
        $footer = file_get_contents('./templates/footer.php');
        echo $footer;  
?>