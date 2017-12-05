
/*  header,body,left,right and footer areas   */  

$(document).ready(function(){
	$("#header ul li").each(function(){
		 $(this).hover(function (argument) {
		 	$(this).css("background-color","#68111a");
		 },function (argument) {
		 	$(this).css("background-color","#ab0012");
		 });
	
	});
	


});