$(document).ready(function(){
	$('input').focusin(function(){
		$('input').css('backgroundColor','');
	});
});

$('#con_btn').click(function(){
	$('.converter').toggleClass('converter');
});

	$('#height_click1').click(function(){
		var x  =$('#ft1').val();
		if(x > 7 || x < 2){
			$('#display_height1').html('Can\'t be more than 7 less than 2 feet');
			exit;
		}
		var y = x * 30.48;
		$('#display_height1').html(y).append(' cm');
	});


		$('#height_click2').click(function(){
		var z  =$('#ft2').val();
		if(z > 213 || z < 60){
			$('display_height2').html('a normal person can be more tha 183 and less than 60 feet');
			exit;
		
		}
		var u = z * 0.0328084;
		$('#display_height2').html(u).append(' ft');
	});
$('#scroll_report').click(function(){
	$('html , body').animate({scrollTop: 1200} , 800);
});
$('#how_many_meals').change(function(){
	var hmm = $('#how_many_meals').val();
	if(hmm < 3 ){
	$('#display_meal').html('You are alredy taking less meals, Increase meals by 1 or 2  , Procced further!');
	}
	else if(hmm > 6){
		$('#display_meal').html(',You are taking  more meals , Try to lessen the meals Procced further!');
	}else{
		$('#display_meal').html('Nice! Your meals are ideal Proceed further!');
	}
});
//generate the protein:
var multi;
$('#generate_bmi_btn').click(function(){
	var bmi;
	var  metre = ($('#height').val())/3.2808399;
	var kg = $('#weight').val();
	bmi = kg / (metre*metre);
	$('#generate_bmi_body').html(bmi);
 });
 $('#submit').click(function(){
	var bmi;
	var  metre = ($('#height').val())/3.2808399;
	var kg = $('#weight').val();
	bmi = kg / (metre*metre);
	$('#bmi_get').html(bmi);
	var pro_weight = kg* 2.2406;
	if($("select[name='normal'] option:selected"))
	{
		multi  = .8* pro_weight;
	}
	else if($("select[name='inter'] option:selected")){
		multi = 1.2*pro_weight;
	}
	else{
		multi = 1.5* pro_weight;
	}
	$('#pro_get').html(multi);
	
	var name =  $('#name').val();
	var height = $('#height').val();
	var weight = $('#weight').val();
	var age = $('#age').val();
	$('#name_append').html(name);
	$('#age_append').html(age);
	$('#height_append').html(height);
	$('#weight_append').html(weight);
	$('#bmi_append').html(bmi);
	$('#ideal_append').html(multi);
 });
 var total = 0;
 //individual food
$('#eggs_btn').click(function(){
	var eggs = $('#eggs').val();
	var eggs_total = eggs*6.5;
	total =total +  eggs_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('#bread_btn').click(function(){
	var bread = $('#bread').val();
	var bread_total = bread*4;
	total =total + bread_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.paratha_btn1').click(function(){
	var paratha = $('.paratha1').val();
	var paratha_total = paratha*4;
	total =total + paratha_total;
	$('#protein_intake_1 h1').html(total);
});
$('.paratha_btn2').click(function(){
	var paratha = $('.paratha2').val();
	var paratha_total = paratha*4;
	total =total + paratha_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.paratha_btn3').click(function(){
	var paratha = $('.paratha3').val();
	var paratha_total = paratha*4;
	total =total + paratha_total;
	$('#protein_intake_1 h1').html(total);
});  
$('#aloo_paratha_btn').click(function(){
	var aloo_paratha = $('#aloo_paratha').val();
	var aloo_paratha_total = aloo_paratha*13;
	total =total + aloo_paratha_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('#oats_milk_btn').click(function(){
	var oats_milk = $('#oats_milk').val();
	var oats_milk_total = oats_milk*17;
	total =total + oats_milk_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('#milk_btn').click(function(){
	var milk = $('#milk').val();
	var milk_total = milk*10;
	total =total + milk_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('#upma_btn').click(function(){
	var upma = $('#upma').val();
	var upma_total = upma*8;
	total =total + upma_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('#omlet_btn').click(function(){
	var omlet = $('#omlet').val();
	var omlet_total = omlet*11;
	total =total + omlet_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.rice_btn').click(function(){
	var rice = $('.rice').val();
	var rice_total =rice*2.66;
	total =total + rice_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.roti_btn').click(function(){
	var roti = $('.roti').val();
	var roti_total =roti*1.21;
	total =total + roti_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.vegetable_btn').click(function(){
	var vegetable = $('.vegetable').val();
	var vegetable_total =vegetable*5;
	total =total + vegetable_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.pulses_btn').click(function(){
	var pulses = $('.pulses').val();
	var pulses_total =pulses*7;
	total =total + pulses_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.salad_btn').click(function(){
	var salad = $('.salad').val();
	var salad_total =salad*2;
	total =total + salad_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.papad_btn').click(function(){
	var papad= $('.papad').val();
	var papad_total =papad*1;
	total =total + papad_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.dahi_btn').click(function(){
	var dahi= $('.dahi').val();
	var dahi_total =dahi*8;
	//alert(dahi_total);
	total = total + dahi_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('#meetha_btn').click(function(){
	var meetha = $('#meetha').val();
	var meetha_total = meetha* 5;
	total = total + meetha_total;
	$('#protein_intake_1 h1').html(total);

});

$('.rice_btn1').click(function(){
	var rice = $('.rice1').val();
	var rice_total =rice*2.66;
	total =total + rice_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.roti_btn1').click(function(){
	var roti = $('.roti1').val();
	var roti_total =roti*1.21;
	total =total + roti_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.vegetable_btn1').click(function(){
	var vegetable = $('.vegetable1').val();
	var vegetable_total =vegetable*5;
	total =total + vegetable_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.pulses_btn1').click(function(){
	var pulses = $('.pulses1').val();
	var pulses_total =pulses*7;
	total =total + pulses_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('.salad_btn1').click(function(){
	var salad = $('.salad1').val();
	var salad_total =salad*2;
	total =total + salad_total;
	$('#protein_intake_1 h1').html(total);
}); 

$('.dahi_btn1').click(function(){
	var dahi= $('.dahi1').val();
	var dahi_total =dahi*8;
	//alert(dahi_total);
	total = total + dahi_total;
	$('#protein_intake_1 h1').html(total);
}); 
$('#confirm').click(function(){
	$('#intake_append').html(total);
	var diff = multi  - total;
	$('#diff_append').html(diff);
});
$('#generate_protein_intake').click(function(){
	$('#generate_protein_body').html(multi);
});

function imageclick(url) {
    window.location = url;
}
$('#daily').click(function(){
$('body , html').animate({scrollTop : 550}, 1000);
});
$('#require , #select').click(function(){
$('body , html').animate({scrollTop : 1200}, 1800);
});
$('#body').click(function(){
$('body , html').animate({scrollTop : 3800}, 1800);
});

$('#con_up').click(function(){
$('body , html').animate({scrollTop :0}, 1800);
});