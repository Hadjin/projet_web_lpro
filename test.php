<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css"/>
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
        <h2>ALL</h2>
        <div id="All">
            
        </div>
        <h2>Result musee</h2>
        <div id="result_musee">
            
        </div>
        
        <h2>Result monument</h2>
        <div id="result_monument">
            
        </div>
        
        <script>
            jQuery("#btn_validation").click(function(e){
               var donnees = jQuery("#form_test").serialize();
               jQuery.ajax({
                    url: "Requete.php",
                    type: 'POST',
                    data: donnees,
                    success: function (data, textStatus, jqXHR) {
                        display_Result(data);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        jQuery("#All").text("erreur");
                    },
                    complete: function (jqXHR, textStatus ) {
                        
                    }
               }); 
            });
            
            function display_Result(data){
                var parsed_data = jQuery.parseJSON(data);
                var html_musees = "";
                var html_monuments = "";
                var musees = jQuery.parseJSON(parsed_data['musees']);
                var monuments = jQuery.parseJSON(parsed_data['monuments']);
                
                jQuery.each(musees, function(key,value){
                    html_musees +"<p>";
                    jQuery.each(value, function (k, v){
                        html_musees += k +": "+v+"<br/>"; 
                    });
                    html_musees += "</p><br/><br/>";
                });
                jQuery("#result_musee").html(html_musees);
                
                jQuery.each(monuments, function (key, value){
                    html_monuments+="<p>";
                    jQuery.each(value, function(k,v){
                        html_monuments+=k+": "+v+"<br/>";
                    });
                    html_monuments+="</p><br/><br/>";
                });
                jQuery("#result_monument").html(html_monuments);
            }
            
        </script>
    </body>
</html>