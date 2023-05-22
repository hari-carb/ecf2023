//select on change
function selectChange(val){
    $('form').submit();
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
  } ) ( function( datepicker ) {
  "use strict";
  
  datepicker.regional.fr = {
      monthNames: [ "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
          "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre" ],
      monthNamesShort: [ "janv.", "févr.", "mars", "avr.", "mai", "juin",
          "juil.", "août", "sept.", "oct.", "nov.", "déc." ],
      dayNames: [ "dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi" ],
      dayNamesShort: [ "dim.", "lun.", "mar.", "mer.", "jeu.", "ven.", "sam." ],
      dayNamesMin: [ "D", "L", "M", "M", "J", "V", "S" ],
      weekHeader: "Sem.",
      dateFormat: "yy-mm-dd",
      minDate: '0',
      firstDay: 1,
      isRTL: false,
      showMonthAfterYear: false,
      yearSuffix: "" };
  datepicker.setDefaults( datepicker.regional.fr );
  
  return datepicker.regional.fr;
  
  } );

  //FORM AUTOFOCUS
let form = document.getElementById("form");
    if (form != null) {
        if (form.elements.length > 0) {
            form.elements[0].focus();
    }
}

//checkbooking
function displayAjax(data) {
    if(data == '<p>Ce créneau est disponible</p>'){
        $("#result").html(data); 
        $(".display").css("display", "block");
    }else if(data == '<p>Il n\'y a plus de place à ce service</p>') {
        $("#result").html(data);
        $(".time").prop ("checked", false);
    }
};

function checkBooking(){
    let val1 = document.getElementById('datepicker').value;
    let val2 = document.querySelector('input[name="nbpers"]:checked').value;
    let val3 = document.querySelector('input[name="time"]:checked').value;
    $.ajax({
        type: "GET",
        url: "src/model/booking/check-booking.php",
        datatype: "html",
        data: {
            "data1": val1,
            "data2":val2,
            "data3":val3,
        },
        success: function(data) {
            displayAjax(data);
          }
    });
};