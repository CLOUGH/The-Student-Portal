function populateBody(name)
{
	switch(name)
	{
		case "course management":
			$.post('course-management.php',{}, function(data){
				$("#sidebar-body").empty().append(data);
			});
			break;
		case "user management":
			$.post('user-management.php',{}, function(data){
				$("#sidebar-body").empty().append(data);
			});
			break;
		case "create course":
			$.post('create-course.php',{}, function(data){
				$("#sidebar-body").empty().append(data);
			});
			break;
		case "create user":
			$.post('create-user.php',{}, function(data){
				$("#sidebar-body").empty().append(data);
			});
			break;

	}
}
function editCourse(id)
{
	console.log(id+"reached");
	$.post('create-course.php?id='+id,{}, function(data){
		$("#sidebar-body").empty().append(data);
	});
}
function editUser(id)
{
	console.log(id+"reached");
	$.post('create-user.php?id='+id,{}, function(data){
		$("#sidebar-body").empty().append(data);
	});
}
