
/*
* Programme permettant d'afficher les coordonnées dans la barre de naviguation
* Langage: jQuery (Framework JavaScript)
*/

$(document).ready(function(){
    //Initialisation des variables
    var $adresse = $(".contacter #text-adresse");
    var $phone = $(".contacter #text-telephone");
    //Le texte est caché
    $(".contacter p").hide();
    //Lorsque l'on clique , il s'affiche ou se cache
    $(".contacter #icon-adresse").click(function(){
        $adresse.show(500);
    });

    $(".contacter #icon-telephone").click(function(){
        $phone.show(500);
    });
    //Cette fonction permet de cacher l'élément lorsque l'on clique à n'importe quel endroit
    $(document).mouseup(function (e) {
        if (!$phone.is(e.target) && $phone.has(e.target).length === 0) 
        {
          $phone.hide(500);

        }

         if (!$adresse.is(e.target) && $adresse.has(e.target).length === 0)
        {
           $adresse.hide(500);
        }
      });

});
