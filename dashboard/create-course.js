$(document).ready(function(){
	$("form").submit(function(){
		var title = $("input[name=title]");
		var subject = $("input[name=subject]");
		var code = $("input[name=code]");
		var simester = $("input[name=simester]");
		var faculty= $("input[name=faculty]");
		var level = $("input[name=level]");
		var credit= $("input[name=credit]");
		var type = $("input[name=type]");
		var description = $("textarea[name=description]");
		if(is_fields_valid())
		{
			$.post('save-course.php',
				{title:title.val(), subject:subject.val(), code:code.val(), simester:simester.val(),
				faculty:faculty.val(), level:level.val(), credit:credit.val(), type:type.val(),
				description:description.val()}, function(data){
					console.log(data);
				if(data.trim()==="success")
					populateBody('course management');
			});
		}
		return false;
	});

});
function is_fields_valid()
{
	var found_invalid = true;
	jQuery.each($("input"), function(){

		if($(this).val()=="")
		{
			$(this).css("border","2px solid orange");
			found_invalid = false;
		}else
			$(this).css("border","1px solid #ccc");
	});
	// jQuery.each($("textarea"), function(){

	// 	if($(this).val()=="")
	// 	{
	// 		$(this).css("border","2px solid orange");
	// 		found_invalid = true;
	// 	}else
	// 		$(this).css("border","1px solid #ccc");

	// });
	return found_invalid;
}
