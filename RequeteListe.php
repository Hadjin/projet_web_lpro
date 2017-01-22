<?php
    include ("connexionBD.php");
?>
<!-- // Script pour récupérer uniquement (Département & Catégorie) pour liste déroulante // -->
<script>

    var listeDep = new Array();
    var listeCat = new Array();
    <?php
        // Pour Départements
        $resultats = $connexion->query("SELECT DISTINCT département FROM monumentshistoriques");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
        $compteur = 0;
        while( $ligne = $resultats->fetch()) {
            echo "listeDep[".$compteur."]= new Array('"
            .$ligne->département."');\n";
            $compteur++;
        }
        $resultats->closeCursor();
        // Pour Catégories
        $resultats = $connexion->query("SELECT DISTINCT catégorie FROM monumentshistoriques");
        $resultats->setFetchMode(PDO::FETCH_OBJ);
        $compteur = 0;
        while( $ligne = $resultats->fetch()) {
            echo "listeCat[".$compteur."]= new Array('"
            .$ligne->catégorie."');\n";
            $compteur++;
        }
        $resultats->closeCursor();
    ?>
    
</script>