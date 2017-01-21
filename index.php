<html>
    <head>
        <title>Projet Musée Franche-Comté</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/Function.js"></script>
        <!-- Pour les listes -->
        <?php include ("RequeteListe.php"); ?>
    </head>
        <body >
            
        <div class="container-fluid">
            <div class="row row-head"> <!-- Head [MD 3-6-3 SM/XS 12] -->
                <!-- 1ère colonne Desktop / Mobile -->
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div id="col1" class="col1">
                        <div class="col-md-11 col-sm-10 col-xs-10 title">
                            <h1>Que cherchez-vous&nbsp;?</h1>
                        </div>
                        <div class="col-md-1 col-sm-2 col-xs-2 icon">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </div>
                    </div>
                </div>
                <!-- 2ème colonne Desktop -->
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="line"></div>
                    <div class="user-search">
                        <div class="top">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <p>Le musée de la Choucroute Garnie, Montbéliard, 25200</p>
                        </div>
                        <div class="bot">
                            <i class="fa fa-fort-awesome" aria-hidden="true"></i>
                            <p>Ce que l'utilisateur a saisit, statique, juste pour test si ça marche bien sur deux lignes...</p>
                        </div>
                    </div>
                </div>
                <!-- 3ème colonne Desktop -->
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="line"></div>
                    <div class="block">
                        <div class="col-md-4 col-sm-2 col-xs-2 eye-block">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <p>Affichage<br/>sur la Carte</p>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-5 button-museum">
                            <div class="museum" onclick="triggerClass(this)">
                                <i class="fa fa-university" aria-hidden="true"></i>
                            </div>
                            <p>Musée</p>
                        </div>
                        <div class="col-md-4 col-sm-5 col-xs-5 button-monument">
                            <div class="monument" onclick="triggerClass(this)">
                                <i class="fa fa-fort-awesome" aria-hidden="true"></i>
                            </div>
                            <p>Monument</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-form">
            	<div id="icon" class="col-sm-2 col-xs-2">
                    <span id="loupe" class="glyphicon glyphicon-search visible" aria-hidden="true"></span>
                    <span id="croix" class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </div>
                <div id="deploy" class="col-md-4 col-sm-12 col-xs-12 formulaire">
                    <div class="desc">
                        <p>Votre Recherche...</p>
                    </div>
                    <form id="form_test">
                        <!-- Partie commune au formulaire -->
                            <div class="col-md-12 col-sm-12 col-xs-12 form-commun">
                                
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control" value="">    
                            </div>
                            <div class="form-group">
                                <label for="commune">Commune</label>
                                <input type="text" name="commune" id="commune" class="form-control">    
                            </div>
                            
                        </div>
                        <!-- Partie concernant la recherche Musée -->
                            <div class="col-md-6 col-sm-6 col-xs-6 form-musee">
                                
                            <h2>+ Musee</h2>
                            <div class="form-group">
                                <label for="musee_adresse">Adresse</label>
                                <input type="text" name="musee_adresse" id="musee_adresse" class="form-control">    
                            </div>
                            <div class="form-group">
                                <label for="musee_cp">Code postal</label>
                                <input type="text" name="musee_cp" id="musee_cp" class="form-control" maxlength="5">    
                            </div>
                            <div class="form-group">
                                <label for="musee_telephone">Téléphone</label>
                                <input type="text" name="musee_telephone" id="musee_telephone" class="form-control" maxlength="10">    
                            </div>
                            
                        </div>
                        <!-- Partie concernant la recherche Monument -->
                            <div class="col-md-6 col-sm-6 col-xs-6 form-monument">
                                
                            <h2>+ Monument</h2>
                            <div class="form-group">
                                <label for="monument_departement">Département</label>
                                <select type="text" name="monument_departement" id="monument_departement" class="form-control">
                                	<option></option>
                                	<script>
                                		for (i=0;i<listeDep.length;i++) {
											document.write('<option>'+listeDep[i][0]+'</option>');
										}
                                	</script>
                                </select>  
                            </div>
                            <div class="form-group">
                                <label for="monument_sciecle">Siècle</label>
                                <input type="text" name="monument_siecle" id="monument_siecle" class="form-control" maxlength="2">    
                            </div>
                            <div class="form-group">
                                <label for="monument_categorie">Catégorie</label>
                                <input type="text" name="monument_categorie" id="monument_categorie" class="form-control">    
                            </div>
                            
                        </div>
                        <button type="button" id="btn_validation" class="center-block"><span class="glyphicon glyphicon-search" aria-hidden="true"></span><span class="go">GO</span></button>  
                    </form>
                </div>
                
                <div class="row row-map">
                    <div id="map" style="height: 100%;">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 47.25, lng: 6.0333},
                zoom: 9
            });
        }
        
        jQuery("#btn_validation").click(function(e){
            var donnees = jQuery("#form_test").serialize();
            console.log(donnees);
            jQuery.ajax({
                url: "Requete.php",
                type: 'POST',
                data: donnees,
                success: function (data, textStatus, jqXHR) {
                    display_Result(data,map);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    jQuery("#All").text("erreur");
                },
                complete: function (jqXHR, textStatus ) {
                    
                }
            }); 
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBa5sLPMIAAoTdE_baKTOOgRGl-p14wjBs&callback=initMap"
    async defer></script>
    <script>
        
        // Fonction pour ajouter ou supprimer une classe aux boutons
        function triggerClass(element) {
            var test = element.classList.contains('active'); // Renvoie un booléen
            
            // Si c'est faux, on ajoute la classe "active", si c'est vrai on la retire
            if (test == false) { 
                element.classList.add('active');
            }else{
                element.classList.remove('active');
            }
        }
        
        var largeur = window.innerWidth; // Taille de la fenêtre
        // En fonction de la taille de la fenêtre au chargement de la page, on ajoute des écouteurs d'événement différents pour le déploiement du formulaire
        if (largeur >= 992) {
            document.getElementById("col1").addEventListener("click", deployForm);
            document.getElementById("btn_validation").addEventListener("click", deployForm);
        }else{
            document.getElementById("icon").addEventListener("click", deployFormMobile);
            document.getElementById("btn_validation").addEventListener("click", deployFormMobile);
            // Juste pour faire un effet au niveau de la loupe (transforme en croix)
            document.getElementById("icon").addEventListener("click", visible);
            document.getElementById("btn_validation").addEventListener("click", visible);
        }
        
        // Fonction pour déployer ou dissimuler le formulaire de recherche Desktop
        function deployForm() {
            var cible = document.getElementById("deploy");
            var deploy = cible.classList.contains('deploy');
            
            if (deploy == false) { 
                cible.classList.add('deploy');
            }else{
                cible.classList.remove('deploy');
            }
        }
        // Fonction pour déployer ou dissimuler le formulaire de recherche Mobile
        function deployFormMobile() {
            var cible = document.getElementById("deploy");
            var deploy = cible.classList.contains('deployM');
            
            if (deploy == false) { 	
                cible.classList.add('deployM');
            }else{
                cible.classList.remove('deployM');
            }
        }
        // Fonction pour afficher ou masquer la loupe/croix
        function visible() {
            var loupe = document.getElementById("loupe");
            var croix = document.getElementById("croix");
            
            var visibleL = loupe.classList.contains('visible');
            var visibleC = croix.classList.contains('visible');
            
            if (visibleL == true && visibleC == false){
                loupe.classList.remove('visible');
                croix.classList.add('visible');
            }else if (visibleL == false && visibleC == true){
                loupe.classList.add('visible');
                croix.classList.remove('visible');
            }
        }
        
    </script>
</html>