function populateBody(name)
{
	switch(name)
	{
		case "course management":
			$.post('course-management.php',{}, function(data){
				$("#sidebar-body").empty().append(data);
			});
			break;
		case "create course":
			$.post('create-course.php',{}, function(data){
				$("#sidebar-body").empty().append(data);
			});
			break;

	}
}
function editCourse(id)
{
	$.post('create-course.php?id='+id,{}, function(data){
		$("#sidebar-body").empty().append(data);
	});

}