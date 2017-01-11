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
				<div class="col-md-3 col-sm-12 col-xs-12">
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
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="line"></div>
					<div class="user-search">
						<div class="top">
							<i class="fa fa-university" aria-hidden="true"></i>
							<p>Ce que l'utilisateur a saisit, statique</p>
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
							<div class="museum" onclick="triggerClass()">
								<i class="fa fa-university" aria-hidden="true"></i>
							</div>
							<p>Musée</p>
						</div>
						<div class="col-md-4 col-sm-5 col-xs-5 button-monument">
							<div class="monument" onclick="triggerClass()">
								<i class="fa fa-fort-awesome" aria-hidden="true"></i>
							</div>
							<p>Monument</p>
						</div>
					</div>
				</div>
			</div>
		</div>
  	</body>
</html>