 $(document).ready(function (){
            $(".scrollto").click(function (){  // Definerer at når classen .scrollto (vores knap) bliver clicket på, scroller websitet ned til elementet #scrollto1 som er vores mailformular 
                $('html, body').animate({
                    scrollTop: $("#scrollto1").offset().top
                }, 2000);
            });
        });
// KILDE: http://jsfiddle.net/8RUBj/11/ - Får hver knap til at vælge den respektive option i #eventpick//
$(document).ready(function (){
    $('#vlmm').click(function(){ 
         $('#eventpick').val('A').trigger('change');
                    })
                });

 $(document).ready(function (){
    $('#mua').click(function(){ 
        $('#eventpick').val('B').trigger('change');
                    })
                });

 $(document).ready(function (){
    $('#mm').click(function(){ 
        $('#eventpick').val('C').trigger('change');
                    })
                });

 $(document).ready(function (){
    $('#kpo').click(function(){ 
        $('#eventpick').val('D').trigger('change');
                    })
                });

// Indikerer om felterne er udfyldt korrekt //
 $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {

            eventpick: {
                validators: {
                        stringLength: {
                        min: 1  ,
                    },
                        notEmpty: {
                        message: 'Venligst vælg et event'
                    }
                }
            },
        
       // Validators bestemmer at fornavnet minimum skal være et bogstav     
            first_name: {
                validators: {
                        stringLength: {
                        min: 1  ,
                    },
                        notEmpty: {
                        message: 'Venligst udfyld dit fornavn'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Venligst udfyld dit efternavn'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Venligst udfyld din e-mail'
                    },
                    // denne validator bestemmer at emailen skal indholde "@"
                    emailAddress: {
                        message: 'Venligst udfyld en gyldig e-mail'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Venligst udfyld dit telefonnummer'
                    },
                    stringLength: {
                        min:8,
                        max:8,
                        message: 'Venligst udfyld et gyldig telefonnummer'
                    }
                }
            },
                    
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Minimum 10 tegn og max 200 tegn'
                    },
                 
                    }
                }
            }
        })
       
});
// Funktion der viser tekst efter button click - og til sidst scroller ned til bunden //
$(document).ready(function(){
    $('button').click(function(){
        $('.alert').show()
        $('html, body').animate({scrollTop: $('html, body')[0].scrollHeight});
		return false;
    }) 
});

$(document).ready(function(){
	
	// Tjekker hvor langt oppe på siden man er. Derefter vises knappen alt efter position på sitet
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	// Knap der scroller til toppen af html, body
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});



// Kommenteret //