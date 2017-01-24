
//https://developers.google.com/maps/documentation/javascript/examples/marker-remove?hl=fr
var markers = [];
var infowindows = [];
function display_Result(data, map){
    deleteMarkers();
    var parsed_data = jQuery.parseJSON(data);
    var html_musees = "";
    var html_monuments = "";
    var musees = jQuery.parseJSON(parsed_data['musees']);
    var monuments = jQuery.parseJSON(parsed_data['monuments']);
    console.log(musees);
    console.log(monuments);
    
    jQuery.each(musees, function (key,value){
        var position = new google.maps.LatLng(value.Latitude, value.Longitude);
        var image = 'ico/musee.png';
        // Pour l'infobulle
        var contentString =  '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading">'+value.Nom+'</h1>'+
                '<div id="bodyContent">'+
                '<p class="descriptif">' +value.DescriptifLong+
                '</p><div class="adresse">'+
                '<i class="fa fa-map-marker" aria-hidden="true"></i><p>'+ value.Adresse+' '+ value.CodePostal+' '+ value.Commune+' '+
                '</p></div><div class="insee">'+
                '<p>Numéro Insee : ' +value.NumInsee+
                '</p></div><div class="acces">'+
                '<i class="fa fa-question-circle-o" aria-hidden="true"></i><p>Accès : ' + value.Acces+ 
                '</p></div><div class="contact">'+
                '<p class="c">Contacts : </p>'+
                '<i class="fa fa-phone" aria-hidden="true"></i><p class="tel">'+value.Telephone+'</p>'+
                '<i class="fa fa-envelope" aria-hidden="true"></i><p class="mail">'+value.Courriel+'</p><br/>'+
                '<a href="http://'+value.SiteInternet+'" target="_blank" class="site"><i class="fa fa-at" aria-hidden="true"></i>   '+value.SiteInternet+'</a>'+
                '<a href="https://'+value.Facebook+'" target="_blank" class="facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i>   '+value.Facebook+'</a>'+
                '</p></div>'+
                '</div>'+
                '</div>';
        
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        var marker = new google.maps.Marker({
            position: position,
            title: value.Nom,
            icon: image
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
        markers.push(marker);
        infowindows.push(infowindow);
    });
    
    jQuery.each(monuments, function(key,value){
        var position = new google.maps.LatLng(value.latitude, value.longitude);
        var image = getIconeName(value.catégorie);
        var photo = "";
        // Pour l'infobulle
        var contentString =  '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h1 id="firstHeading" class="firstHeading">'+value.designation+'</h1>'+
                '<div id="bodyContent">'+
                '<p class="descriptif2">' +value.description+
                '</p><div class="categorie">'+
                '<i class="fa fa-star" aria-hidden="true"></i><p class="ca">'+value.catégorie+
                '</p></div><div class="siecle">'+
                '<i class="fa fa-clock-o" aria-hidden="true"></i><p class="si">Siècle : '+value.siècle+
                '</p></div><div class="proprietaire">'+
                '<i class="fa fa-id-card" aria-hidden="true"></i><p class="pr">Propriétaire : '+value.propriétaire+
                '</p></div><div class="commune">'+ 
                '<i class="fa fa-map-marker" aria-hidden="true"></i><p class="co">'+value.commune+
                '</p></div>'+ 
                '</div>'+
                '</div>';
        
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        
        var marker = new google.maps.Marker({
            position: position,
            title: value.designation,
            icon: image
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
        markers.push(marker);
        infowindows.push(infowindow);
    });
    setMapOnAll(map);
}

function setMapOnAll(map) {
    for (var i = 0; i < markers.length; i++) {
        markers[i].setMap(map);
    }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
    setMapOnAll(null);
}

function clearInfoWindows(){
    infowindows = [];
}

// Shows any markers currently in the array.
function showMarkers() {
    setMapOnAll(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
    clearMarkers();
    clearInfoWindows();
    markers = [];
}

function getIconeName(name){
    var img = "";
    switch (name) {
        case "édifice religieux":
            img = "ico/edifice_religieux.png";
            break;
        case "fontaine – lavoir":
            img = "ico/fontaine–lavoir.png";
            break;
        case "immeuble":
            img = "ico/immeuble.png";
            break;
        case "mairie":
            img = "ico/mairie.png";
            break;
        case "statue":
            img = "ico/statue.png";
            break;
        case "marché":
            img = "ico/marche.png";
            break;
        case "fortification":
            img = "ico/fortification.png";
            break;
        case "croix":
            img = "ico/croix.png";
            break;
        case "site archéologique":
            img = "ico/site_archeologique.png";
            break;
        case "ferme":
            img = "ico/ferme.png";
            break;
        case "usine":
            img = "ico/usine.png";
            break;
        case "jardin":
            img = "ico/jardin.png";
            break;
        case "château":
            img = "ico/chateau.png";
            break;
        case "saline":
            img = "ico/saline.png";
            break;
        case "cabane":
            img = "ico/saline.png";
            break;
        case "hôpital":
            img = "ico/hopital.png";
            break;
        case "palais":
            img = "ico/palais.png";
            break;
        case "porte":
            img = "ico/porte.png";
            break;
        case "théâtre":
            img = "ico/theatre.png";
            break;
        case "route":
            img = "ico/route.png";
            break;
        case "grotte":
            img = "ico/grotte.png";
            break;
        case "pont":
            img = "ico/pont.png";
            break;
        case "borne":
            img = "ico/borne.png";
            break;
        case "puits":
            img = "ico/puits.png";
            break;
        case "site archéologique":
            img = "ico/site_archeologique.png";
            break;
        case "établissement thermal":
            img = "ico/etablissement_thermal.png";
            break;
        case "canal":
            img = "ico/canal.pn";
            break;
        case "gare":
            img = "ico/gare.png";
            break;
        default:
            img = "ico/monument.png";
            break;
    }
    return img;
}
