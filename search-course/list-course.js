$(document).ready(function(){
	$(".course-rows").hover(function(){
		console.log("rea");
		$(this).css("cursor","pointer");
		$(this).css("cursor","hand");
	},function(){
		$(this).css("cursor","default");
	});

	$(".course-rows").click(function(){
		window.location.replace("course-detail.php?id="+$(this).attr("id"));
	});
});