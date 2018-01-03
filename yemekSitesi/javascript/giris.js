
$.Kapat = function(){
	$(".adminEkle").hide();
	$(".AdminSil").hide();
	$(".AdminListele").hide();
	$(".RestaurantEkle").hide();
	$(".RestaurantListele").hide();
	$(".RestaurantSil").hide();
	$(".KuponlarıListele").hide();
	$(".kuponEkle").hide();
	$(".KuponSil").hide();
	$(".menuEkle").hide();
	$(".menuSil").hide();
	$(".menuList").hide();
	$(".siparisList").hide();
	$(".butunSiparisList").hide();
	$(".kazanc").hide();
}

$(document).ready(function(){
	$(".gonder").css({
		'background-color' : '#ad2331',
		'width' : '100px',
		'height': '30px',
		'padding':'5px',
		'cursor':'pointer',
		'color': '#fff',
		'borderTop':'solid',
		'borderRight':'solid',
		'borderColor':"#fff"
	});

	$(".giris").css({
		'width': '380px',
		'height' : '500px',
		'paddingLeft' : '20px'
	});

$.Kapat();


$(".resEkle").click(function(){
	$.Kapat();
	 $(".RestaurantEkle").show();;
});

$(".resSil").click(function(){
	$.Kapat();
	 $(".RestaurantSil").show();
});

$(".resList").click(function(){
	$.Kapat();
	 $(".RestaurantListele").show();
});

$(".admEkle").click(function(){
	$.Kapat();
	 $(".adminEkle").show();
});

$(".admSil").click(function(){
	$.Kapat();
	 $(".AdminSil").show();
});

$(".admList").click(function(){
	$.Kapat();
	 $(".AdminListele").show();
});

$(".kupEkle").click(function(){
	$.Kapat();
	 $(".kuponEkle").show();
});

$(".kupSil").click(function(){
	$.Kapat();
	 $(".KuponSil").show();
});

$(".kupList").click(function(){
	$.Kapat();
	 $(".KuponlarıListele").show();
});


});