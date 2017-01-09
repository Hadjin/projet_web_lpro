<html>
    <head>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
        <script type="text/javascript" src="js/jquery-3.1.1.min"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="container">
                <form class="form-horizontal">
                    <div id="commun">
                        <h2>Commun</h2>
                        <div class="form-group">
                            <label for="nom" >Nom</label>
                            <input type="text" id="nom" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="commune" >Commune</label>
                            <input type="text" id="commune" class="form-control">    
                        </div>
                    </div>
                    <div id="div_musee">
                        <h2>Musee</h2>
                        <div class="form-group">
                            <label for="musee_adresse" >Adresse</label>
                            <input type="text" id="adresse" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="musee_cp" >Code postal</label>
                            <input type="text" id="musee_cp" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="musee_telephone" >Telephone</label>
                            <input type="text" id="musee_telephone" class="form-control">    
                        </div>
                    </div>
                    <div id="div_monument">
                        <h2>Monument</h2>
                        <div class="form-group">
                            <label for="monument_departement" >Departement</label>
                            <input type="text" id="monument_departement" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="monument_sciecle" >Siecle</label>
                            <input type="text" id="monument_sciecle" class="form-control">    
                        </div>
                        <div class="form-group">
                            <label for="monument_categorie" >Departement</label>
                            <input type="text" id="monument_categorie" class="form-control">    
                        </div>
                    </div>
                    <button type="button" id="btn_validation" onclick="ajax()">Valider</button> 
                </form>
            </div>
        </div>
        <div id="result">
            
        </div>
        <script>
            function ajax(){
                
            }
        </script>
    </body>
</html>