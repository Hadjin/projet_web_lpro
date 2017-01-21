<?php
    include ("connexionBD.php");
    //http://labs.jonsuh.com/jquery-ajax-php-json/
    //https://jonsuh.com/blog/jquery-ajax-call-to-php-script-with-json-return/
    ///https://openclassrooms.com/courses/protegez-vous-efficacement-contre-les-failles-web/l-injection-sql-1
    //http://stackoverflow.com/questions/2770273/pdostatement-to-json
    //https://openclassrooms.com/courses/un-site-web-dynamique-avec-jquery/le-fonctionnement-de-ajax
    //https://openclassrooms.com/courses/simplifiez-vos-developpements-javascript-avec-jquery/plus-loin-avec-ajax
    //http://stackoverflow.com/questions/19767894/warning-do-not-access-superglobal-post-array-directly-on-netbeans-7-4-for-ph
    //Fields for monuments

    $first = true;
    $sql_musee = "SELECT * FROM musees ";

    if (isset($_POST['nom'])){
        if (!empty($_POST['nom'])){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee."Nom like '%".$_POST['nom']."%' ";
        }
    }

    if (isset($_POST['commune'])){
        if (!empty($_POST['commune'])){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee."Commune like '%".$_POST['commune']."%' ";
        }
    }

    if (isset($_POST['musee_adresse'])){
        if (!empty($_POST['musee_adresse'])){
        if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee."Adresse like '%".$_POST['musee_adresse']."%' ";
        }
    }

    if (isset($_POST['musee_cp'])){
        if (!empty($_POST['musee_cp'])){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee+"CodePosal = ".$_POST['musee_cp']." ";
        }
    }

    if (isset($_POST['musee_telephone'])){
        if (!empty($_POST['musee_telephone'])){
            if ($first){
                $sql_musee = $sql_musee."WHERE ";
                $first = false;
            }
            else{
                $sql_musee = $sql_musee."AND ";
            }
            $sql_musee = $sql_musee+" Telephone like '%".$_POST['musee_telephone']."%' ";
        }
    }




    
    $sql_musee = $sql_musee.";";
    if ($first == false){
        $musee_statement = $connexion->prepare($sql_musee);
        $musee_statement->execute();
        $musee_result = $musee_statement->fetchAll(PDO::FETCH_ASSOC);
        $json_musee = json_encode($musee_result);
    }
    else{
        $json_musee = json_encode("");
    }
    


    //Création du sql pour les monuments.
    $first = true;
    $sql_monument = "SELECT * FROM monumentshistoriques ";

    if (isset($_POST['nom'])){
        if(!empty($_POST['nom'])){
            if($first){
              $sql_monument = $sql_monument."WHERE ";
              $first = false;
            }
            else {
              $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."designation like '%".$_POST['nom']."%' ";
        }
    }

    if (isset($_POST['commune'])){
        if (!empty($_POST['commune'])){
            if ($first){
                $sql_monument = $sql_monument."WHERE ";
                $first = false;
            }
            else{
                $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."commune like '%".$_POST['commune']."%' ";
        }
    }

    if (isset($_POST['monument_departement'])){
        if (!empty($_POST['monument_departement'])){
            if ($first){
                $sql_monument = $sql_monument."WHERE ";
                $first = false;
            }
            else{
                $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."departement = ".$_POST['monument_departement']." ";
        }
    }

    if (isset($_POST['monument_sciecle'])){
        if (!empty($_POST['monument_sciecle'])){
            if ($first){
                $sql_monument = $sql_monument."WHERE ";
                $first = false;
            }
            else{
                $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."siecle like '%".$_POST['monument_sciecle']."%' ";
        }
    }

    if (isset($_POST['monument_categorie'])){
        if (!empty($_POST['monument_categorie'])){
            if ($first){
                $sql_monument = $sql_monument."WHERE ";
                $first = false;
            }
            else{
                $sql_monument = $sql_monument."AND ";
            }
            $sql_monument = $sql_monument."categorie like '%".$_POST['monument_categorie']."%' ";
        }
    }
    
    $sql_monument = $sql_monument.";";
    
    if ($first==false){
        $monument_statement = $connexion->prepare($sql_monument);
        $monument_statement->execute();
        $monument_result = $monument_statement->fetchAll(PDO::FETCH_ASSOC);
        $json_monument = json_encode($monument_result);    
    }
    else {
        $json_monument = json_encode("");    
    }
    

    $result = Array("musees"=>$json_musee,"monuments"=>$json_monument);

    $json_result = json_encode($result);

    echo $json_result;
    
    //ajouter les % vers les likes.
?>