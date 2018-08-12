/*
* Programme permettant d'afficher les descriptions dans la section 'Prise en charge pluridisciplinaire'
* Langage: jQuery (Framework JavaScript)
*/

$(document).ready(function(){

    function no_repeat(number , element){
        return '#suivie-container > .suivie-description:nth-child('+number+') '+element+''; 
    }

    $('.suivie-description > div').hide();
    //Initialisation des variables
        $(no_repeat(1,'img')).click(function(){
            $(no_repeat(1,'div')).slideToggle(500);
        });

        $(no_repeat(2,'img')).click(function(){
            $(no_repeat(2,'div')).slideToggle(500);
        });

        $(no_repeat(3,'img')).click(function(){
            $(no_repeat(3,'div')).slideToggle(500);
        });

        $(no_repeat(4,'img')).click(function(){
            $(no_repeat(4,'div')).slideToggle(500);
        });  
});