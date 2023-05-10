//select on change
function selectChange(val){
    $('formCat').submit();
}

//date-picker
$( function() {
    $( "#datepicker" ).datepicker({
      inline: true,
      showOtherMonths: true,
    }); 
  
  });
  
  ( function( factory ) {
      "use strict";
  
      if ( typeof define === "function" && define.amd ) {
  
          // AMD. Register as an anonymous module.
          define( [ "../widgets/datepicker" ], factory );
      } else {
  
          // Browser globals
          factory( jQuery.datepicker );
      }
  } )( function( datepicker ) {
  "use strict";
  
  datepicker.regional.fr = {
      closeText: "Fermer",
      prevText: "Précédent",
      nextText: "Suivant",
      currentText: "Aujourd'hui",
      monthNames: [ "janvier", "février", "mars", "avril", "mai", "juin",
          "juillet", "août", "septembre", "octobre", "novembre", "décembre" ],
      monthNamesShort: [ "janv.", "févr.", "mars", "avr.", "mai", "juin",
          "juil.", "août", "sept.", "oct.", "nov.", "déc." ],
      dayNames: [ "dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi" ],
      dayNamesShort: [ "dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam." ],
      dayNamesMin: [ "D", "L", "M", "M", "J", "V", "S" ],
      weekHeader: "Sem.",
      dateFormat: "dd/mm/yy",
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: "" };
  datepicker.setDefaults( datepicker.regional.fr );
  
  return datepicker.regional.fr;
  
  } );
  