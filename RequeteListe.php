<?php
    include ("connexionBD.php");
?>
<!-- // Script pour récupérer uniquement (Département & Catégorie) pour liste déroulante // -->
<script>

    var listeDep = new Array();
    <?php
        $resultats = $connexion->query("SELECT DISTINCT département FROM monumentshistoriques");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
        $compteur = 0;
        while( $ligne = $resultats->fetch()) {
            echo "listeDep[".$compteur."]= new Array('"
            .$ligne->département."');\n";
            $compteur++;
        }
        $resultats->closeCursor();
    ?>

</script>