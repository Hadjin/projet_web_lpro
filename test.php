<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <script type="text/javascript" src="js/jquery-3.1.1.min"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <form class="form-horizontal" id="form_test" >
                    <div id="commun">
                        <h2>Commun</h2>
                        <div class="form-group">
                            <label for="nom" >Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="">    
                        </div>
                        <div class="form-group">
                            <label for="commune" >Commune</label>
                            <input type="text" name="commune" id="commune" class="form-control">    
                        </div>
                    </div>
                    <div id="div_musee">
                        <h2>Musee</h2>
                        <div class="form-group">
                            <label for="musee_adresse" >Adresse</label>
                            <input type="text" name="musee_adresse" id="musee_adresse" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="musee_cp" >Code postal</label>
                            <input type="text" name="musee_cp" id="musee_cp" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="musee_telephone" >Téléphone</label>
                            <input type="text" name="musee_telephone" id="musee_telephone" class="form-control">    
                        </div>
                    </div>
                    <div id="div_monument">
                        <h2>Monument</h2>
                        <div class="form-group">
                            <label for="monument_departement" >Departement</label>
                            <input type="text" name="monument_departement" id="monument_departement" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="monument_sciecle" >Siècle</label>
                            <input type="text" name="monument_sciecle" id="monument_sciecle" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="monument_categorie" >Catégorie</label>
                            <input type="text" name="monument_categorie" id="monument_categorie" class="form-control">    
                        </div>
                    </div>
                    <button type="button" id="btn_validation">Valider</button> 
                </form>
            </div>
        </div>
        <div id="result">
            
        </div>
        <script>
            jQuery("#btn_validation").click(function(e){
               
               var donnees = jQuery(this).serialize();
               jQuery.ajax({
                    url: "Requete.php",
                    type: 'POST',
                    data: donnees,
                    //dataType: 'json',
                    success: function (data, textStatus, jqXHR) {
                        jQuery("#result").text(data);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        jQuery("#result").text("erreur");
                    },
                    complete: function (jqXHR, textStatus ) {
                        alert("fin");
                    }
               }); 
            });
        </script>
    </body>
</html>