<?php include_once("../common/library/header.php");
	include_once("../common/library/course.php");
	$course = new Course();
	// $_POST['course_name'];
	// $_POST['course_code'];
	// $_POST['subject'];
	// $_POST['credit_range_min']; $_POST['credit_range_max'];
	// $_POST['faculty'];
	// $_POST['degree_name'];
	// $_POST['simester'];
	// $_POST['year_of_degree'];
	// $_POST['lecture_name'];
	// $_POST['time_range_min'];$_POST['time_range_max'];
	// $_POST['max_class_duration'];
	// $_POST['schedule_type'];
?>

<script type="text/javascript" src="list-course.js"></script>
<h2>Course List</h2>
<table class="table table-striped table-hover table-bordered">
	<tr>
		<th>Code</th>
		<th>Title</th>
		<th>Faculty</th>
		<th>Credit</th>
		<th>Simester</th>
		<th>Level</th>
	</tr>
	<?php foreach(Course::courseSearch($_POST['course_name'],$_POST['course_code'],$_POST['subject'],
		$_POST['credit_range_max'],$_POST['credit_range_min'],$_POST['faculty'],$_POST['degree_name'],
		$_POST['simester'],$_POST['year_of_degree']) as $id):
		$course = new Course();
		$course->initByID($id);
	 ?>
		<tr class="course-rows" id="<?php echo $course->getID(); ?>">
			<td><?php echo $course->getCode();?></td>
			<td><?php echo $course->getTitle();?></td>
			<td><?php echo $course->getFaculty();?></td>
			<td><?php echo $course->getCredit();?></td>
			<td><?php echo $course->getSimester();?></td>
			<td><?php echo $course->getLevel();?></td>
		</tr>
	<?php endforeach; ?>
</table>

<?php include_once("../common/library/footer.php");?>