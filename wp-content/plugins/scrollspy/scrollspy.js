var sections = [];               // Nos sections correspondants aux ancres
var $navbar = $('#id_article');  // L'élément contenant nos liens
var $navbara = $('a', $navbar);  // Nos liens 

$navbara.each(function(){
    // On incrémente notre super tableau section avec les sections correspondant aux liens
    // <a href="HREF"...
    // $(HREF) <= l'élément correspondant au lien dans mon code HTML
    sections.push($($(this).attr('href')));
});

// On écoute le scroll
$(window).scroll(function(e){ 
    var scrollTop = $(this).scrollTop() + ($(window).height() / 2); // La position du scroll + moitié de la fenêtre
    // On parcourt nos sections stocké préalablement
    for(var i in sections){
      var section = sections[i];
      // cette section est dépassé par le scroll ?
      if (scrollTop > section.offset().top) {
        scrolled_id = section.attr('id');   // On stocke son ID
      }
    }
});

navbara.removeClass('current');
$('a[href="#' + scrolled_id + '"]', $navbar).addClass('current');