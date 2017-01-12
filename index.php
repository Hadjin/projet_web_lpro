<html>
  	<head>
    	<title>Projet Musée Franche-Comté</title>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="css/styles.css">
    	<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.min.css">
  	</head>
  	<body>

  		<div class="container-fluid">
			<div class="row row-head"> <!-- Head [MD 3-6-3 SM/XS 12] -->
				<!-- 1ère colonne Desktop / Mobile -->
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="col1">
						<div class="col-md-11 col-sm-10 col-xs-10 title">
							<h1>Que cherchez-vous&nbsp;?</h1>
						</div>
						<div class="col-md-1 col-sm-2 col-xs-2 icon">
							<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
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
							<p>Ce que l'utilisateur a saisit, statique</p>
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
				<div class="col-md-4 col-sm-12 col-xs-12 formulaire">
					<div class="desc">
						<p>Remplir au moins un des champs pour effectuer une recherche.</p>
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
	                            <input type="text" name="monument_departement" id="monument_departement" class="form-control">    
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
	                    <button type="button" id="btn_validation" class="center-block"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>  
	                </form>
				</div>
			</div>
		</div>
  	</body>
  	<script>
  		// Fonction pour ajouter ou supprimer une classe aux boutons
  		function triggerClass(element) {
  			var test = element.classList.contains('active');
  			if (test == false) {
  				element.classList.add('active');
  			}else{
  				element.classList.remove('active');
  			}
  		}
  	</script>
</html>