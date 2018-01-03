
/* Slider yapılıyor
	
	Muhammed ikbal KILAVUZ

  */



$(document).ready(function(){
	var sure = 6000;
	var toplamLi = $(".Slider ul li").length;
	var length = 1268;
	var toplamBoyut= length * toplamLi;
	var sonraki=0;

	$(".Slider ul").css("width",toplamBoyut + "px");

	$(".onceki").click(function(){
		if(sonraki<toplamLi-1){
			sonraki++;
			yeniWidth = sonraki * length ;
			$(".Slider ul").animate({marginLeft: "-" + yeniWidth + "px"},500);
		}
		return false;
	});

	$(".sonraki").click(function(){
		if(sonraki>0){
			sonraki--;
			yeniWidth = sonraki * length ;
			$(".Slider ul").animate({marginLeft: "-" + yeniWidth + "px"},500);
		}
		return false;

	});


	$.Slider =function(){
		if(sonraki<toplamLi-1){
			sonraki++;
			yeniWidth = sonraki * length ;
			$(".Slider ul").animate({marginLeft: "-" + yeniWidth + "px"},500);
		}else{
			sonraki = 0;
			$(".Slider ul").animate({marginLeft: "0"},500);
		}
	}

	var don = setInterval("$.Slider()",sure);

	$("#Slider").hover(function(){
		clearInterval(don);
	},function(){
		don = setInterval("$.Slider()",sure);
	});

});