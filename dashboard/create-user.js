$(document).ready(function(){
	$("form").submit(function(){
		var user_name = $("input[name=user_name]");
		var first_name= $("input[name=first_name]");
		var password= $("input[name=password]");
		var last_name = $("input[name=last_name]");
		var type = $("input[name=type]");
		var email= $("input[name=email]");
		if(is_fields_valid())
		{
			if($(this).attr("id")=='save-user')
			{
				$.post('save-user.php',
					{user_name:user_name.val(), password:password.val(),first_name:first_name.val(), last_name:last_name.val(),
					type:type.val(),email:email.val()}, function(data){
					if(data.trim()==="success")
						populateBody('user management');
				});
			}else if($(this).attr("id")=='update-user')
			{
				var id = $("input[name=id]");
				$.post('update-user.php',
					{id:id.val(), password:password.val(),user_name:user_name.val(), first_name:first_name.val(), last_name:last_name.val(),
					type:type.val(),email:email.val()}, function(data){
					if(data.trim()==="success")
						populateBody('user management');
				});
			}
		}
		return false;
	});

});
function is_fields_valid()
{
	var found_invalid = true;
	jQuery.each($("input"), function(){

		if($(this).val()=="" && $(this).attr("type")!="password")
		{
			$(this).css("border","2px solid orange");
			found_invalid = false;
		}else
			$(this).css("border","1px solid #ccc");
	});
	return found_invalid;
}
