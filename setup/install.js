$(document).ready(function()
{


	$("form").submit(function(){
		if(is_fields_valid())
		{
			var mysql_username = $("input[name=mysql_username]");
			var mysql_host = $("input[name=mysql_host]");
			var admin_username = $("input[name=admin_username]");
			var admin_fname = $("input[name=admin_fname]");
			var mysql_password = $("input[name=mysql_password]");
			var admin_password = $("input[name=admin_password]");
			var admin_lname = $("input[name=admin_lname]");
			var admin_email = $("input[name=admin_email]");
			$.post('install.php',{mysql_username:mysql_username.val(), mysql_host:mysql_host.val(),
				mysql_password:mysql_password.val(),admin_username:admin_username.val(),
				admin_password:admin_password.val(), admin_fname:admin_fname.val(), admin_lname:admin_lname.val(),
				admin_email:admin_email.val()}, function(data)
				{
					console.log(data);
				if(data=="success"){
					$("#error-messages").empty();
					$(location).attr('href',"../index.php");
					return true;

				}else
				{
					$("#error-messages").empty().append($("<p>"+data+"</p>"));

					return false;
				}
				});
		}
		return false;
	});
	$("input").blur(function()
	{
		if($(this).attr("class")=="error-field")

			is_fields_valid();
	})
});
/*--------------------------------------------------------------------
 is_field_valid() Checks if the the fields on the setup page is valid
 and displays error messages for fields that are not valid.
-----------------------------------------------------------------s-----*/
function is_fields_valid(){

	//Fields class id stored to variables for easy manipulation later.
	var mysql_username = $("input[name=mysql_username]");
	var mysql_host = $("input[name=mysql_host]");
	var admin_username = $("input[name=admin_username]");
	var admin_fname = $("input[name=admin_fname]");
	var admin_lname = $("input[name=admin_lname]");
	var admin_email = $("input[name=admin_email]");
	var admin_password = $("input[name=admin_password]");
	var admin_confirm_password = $("input[name=admin_confirm_password]");

	var is_valid = true;
	if(mysql_username.val().trim()=="")
	{
		mysql_username.attr("class", "error-field");
		is_valid = false;
	}
	else
		mysql_username.removeAttr("class");


	if(mysql_host.val().trim()=="" ||
		mysql_host.val().substring(mysql_host.val().indexOf("http://")+7,mysql_host.val().length).trim()=="")
		{
			mysql_host.attr("class", "error-field");
			is_valid = false;
		}
	else
		mysql_host.removeAttr("class");

	if(admin_username.val().trim()=="")
		{
			admin_username.attr("class", "error-field");
			is_valid = false;
		}
	else
		admin_username.removeAttr("class");

	if(!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(admin_email.val().trim()))
		{
			admin_email.attr("class", "error-field");
			is_valid= false;
		}
	else
		admin_email.removeAttr("class");

	if(admin_fname.val().trim()=="")
		{
			admin_fname.attr("class", "error-field");
			is_valid = false;
		}
	else
		admin_fname.removeAttr("class");

	if(admin_lname.val().trim()=="")
		{
			admin_lname.attr("class", "error-field");
			is_valid = false;
		}
	else
		admin_lname.removeAttr("class");

	if(admin_password.val().trim()!=admin_confirm_password.val().trim())
		{
			admin_password.attr("class", "error-field");
			admin_confirm_password.attr("class", "error-field");
			is_valid = false;
		}
	else
	{
		admin_password.removeAttr("class");
		admin_confirm_password.removeAttr("class");
	}


	return is_valid;
}