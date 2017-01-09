<?php
    //http://labs.jonsuh.com/jquery-ajax-php-json/
    //https://jonsuh.com/blog/jquery-ajax-call-to-php-script-with-json-return/
    ///https://openclassrooms.com/courses/protegez-vous-efficacement-contre-les-failles-web/l-injection-sql-1
    //http://stackoverflow.com/questions/2770273/pdostatement-to-json
    //quand v1 ok ajouter gestion sécu


    //ajouter les isset($_POST[...])

    //Fields for museum
    $musee_nom = $_POST['nom'];
    $musee_adresse = $_POST['musee_adresse'];
    $musee_commune = $_POST['commune'];
    $musee_cp = $_POST['musee_cp'];
    $musee_telephone = $_POST['musee_telephone'];

    //Fields for monuments
    $monument_nom = $_POST['nom'];
    $monument_departement = $_POST['monument_departement'];
    $monument_commune = $_POST['commune'];
    $monument_sciecle = $_POST['monument_sciecle'];
    $monument_categorie = $_POST['monument_categorie'];

    if (isset($musee_nom) && isset($musee_adresse) && isset($monument_commune)
        && isset($musee_cp) && isset($musee_telephone) && isset($monument_nom)
        && isset($monument_departement) && isset($monument_commune) && 
        isset($monument_sciecle) && isset($monument_categorie)){
        
        $first = true;
        $sql_musee = "SELECT * FROM musees ";

        if (!empty($musee_nom)){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee."Nom like '".$musee_nom."' ";
        }

        if (!empty($musee_adresse)){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee."Adresse like '".$musee_adresse."' ";
        }

        if (!empty($musee_commune)){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee."Commune like '".$musee_commune."' ";
        }

        if (!empty($musee_cp)){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee+"CodePosal like '".$musee_cp."' ";
        }

        if (!empty($musee_telephone)){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee+" Telephone like '".$musee_adresse."' ";
        }

        $sql_musee = $sql_musee.";";
        //$resultats_musee=$connexion->query($sql_musee);
        //$resultats_musee->setFetchMode(PDO::FETCH_OBJ);
        $musee_statement = $connexion->prepare($sql_musee);
        $json_musee = json_encode($musee_statement);

        //Création du sql pour les monuments.
        $first = true;
        $sql_monument = "SELECT * FROM monumentshistoriques ";

        if(!empty($monument_nom)){
          if($first){
            $sql_monument = $sql_monument."WHERE ";
            $first = false;
          }
          else {
            $sql_monument = $sql_monument."AND ";
          }
          $sql_monument = $sql_monument."designation like '".$monument_nom."' ";
        }

        if (!empty($monument_departement)){
            if ($first){
                $sql_monument = $sql_monument."WHERE ";
                $first = false;
            }
            else{
                $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."departement = ".$monument_departement." ";
        }

        if (!empty($monument_commune)){
            if ($first){
                $sql_monument = $sql_monument."WHERE ";
                $first = false;
            }
            else{
                $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."commune like '".$monument_commune."' ";
        }

        if (!empty($monument_sciecle)){
            if ($first){
                $sql_monument = $sql_monument."WHERE ";
                $first = false;
            }
            else{
                $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."siecle like '".$monument_sciecle."' ";
        }

        if (!empty($monument_categorie)){
            if ($first){
                $sql_monument = $sql_monument."WHERE ";
                $first = false;
            }
            else{
                $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."categorie like '".$monument_categorie."' ";
        }

        $sql_monument = $sql_monument.";";

        $monument_statement = $connexion->prepare($sql_monument);
        $json_monument = json_encode($monument_statement);

        //$resultats_monument=$connexion->query($sql_monument);
        //$resultats_monument->setFetchMode(PDO::FETCH_OBJ);

        $result = Array("musees"=>$json_musee,"monuments"=>$json_monument);

        $json_result = json_encode($result);

        echo $json_result;
    }
    else{
        echo 'error';
    }
?>
