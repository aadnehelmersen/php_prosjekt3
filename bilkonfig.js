$(document).on("change", "#farge", function(){

    var farget = $(this).val();

    if(farget == 'rod lakk'){
        $("#result").text('Rød lakk: 4000kr');
    } else if(farget == 'blaa lakk'){
        $("#result").text('Blå lakk: 4500kr');
    } else if(farget == 'hvit lakk'){
        $("#result").text('Hvit lakk: 7000kr');
    }

})
$(document).on("change", "#hjulstorrelse", function(){

    var størrelset = $(this).val();

    if(størrelset == '18 tommer felg'){
        $("#result1").text('18 tommer felg: 500kr');
    } else if(størrelset == '20 tommer felg'){
        $("#result1").text('20 tommer felg: 1000kr');
    } else if(størrelset == '22 tommer felg'){
        $("#result1").text('22 tommer felg: 2000kr');
    }

})
$(document).on("change", "#felg", function(){

    var felget = $(this).val();

    if(felget == '5v felg'){
        $("#result2").text('5 v-eiker felg: 5000kr');
    } else if(felget == 'turbin felg'){
        $("#result2").text('5-arms turbin felg: 7000kr');
    }

})




$(document).on("change", "#sete", function(){

	 var setet = $(this).val();

	 if(setet == 'standard seter'){
			 $("#result").text('Standard seter: 8000kr');
	 } else if(setet == 'S-line seter'){
			 $("#result").text('S-Line-seter: 13000kr');
	 }

})
$(document).on("change", "#ratt", function(){

	 var rattet = $(this).val();

	 if(rattet == 'standard ratt'){
			 $("#result1").text('Standard ratt: 5000kr');
	 } else if(rattet == 'S-line flat bottom ratt'){
			 $("#result1").text('S-Line flat bottom ratt: 14000kr');
	 }

})


$(document).on("change", "#cruise", function(){

	 var cket = $(this).val();

	 if(cket == 'med cruise control'){
			 $("#result").text('Cruise Control: 20000kr');
	 } else if(cket == 'uten cruise control'){
			 $("#result").text('ingen Cruise Control: 0kr');
	 }

})
$(document).on("change", "#lydanlegg", function(){

	 var lydet = $(this).val();

	 if(lydet == 'standard lydanlegg'){
			 $("#result1").text('Standard lydanlegg: 5000kr');
	 } else if(lydet == 'Bang&Olufsen lyd'){
			 $("#result1").text('Bang&Olufsen lydanlegg: 18000kr');
	 }

})
$(document).on("change", "#sikkerhet", function(){

	 var sikkerhetet = $(this).val();

	 if(sikkerhetet == 'airbag'){
			 $("#result2").text('Airbag: 1000kr');
	 } else if(sikkerhetet == 'lane keeping assist'){
			 $("#result2").text('Lane keep assist: 20000kr');
	 }

})
