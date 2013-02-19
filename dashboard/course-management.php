<?php include_once("../common/library/course.php");?>


<h2>Course Management</h2>
<table class="table">
	<tr>
		<th>#</th>
		<th>Title</th>
		<th>Faculty</th>
		<th>Credit</th>
		<th colspan="2">Simester</th>
	</tr>
	<?php foreach(Course::getAllCourseIds() as $id):
		$course = new Course();
		$course->initByID($id);
	 ?>
		<tr>
			<td><?php echo $course->getID();?></td>
			<td><?php echo $course->getTitle();?></td>
			<td><?php echo $course->getFaculty();?></td>
			<td><?php echo $course->getCredit();?></td>
			<td><?php echo $course->getSimester();?></td>
			<td><a href="" onclick="editCourse(<?php echo $course->getID() ?>)"><i class="icon-pencil"></i></a></td>
		</tr>
	<?php endforeach; ?>
    <tr>
    	<td></td>
        <td colspan="5">
            <a href="#" onclick="populateBody('create course');" >Add Course
            </a>
        </td>
    </tr>
</table>