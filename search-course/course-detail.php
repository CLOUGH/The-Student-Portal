<?php include_once("../common/library/header.php");
include_once("../common/library/course.php");
if(!isset($_GET['id'])){
	header("location:../search-course");
	exit;
}
$course = new Course();
$course->initByID($_GET['id']);?>
<h3><?php echo $course->getTitle(); ?></h3>
<div id="description">
	<h5>Description</h5>
	<p><?php echo $course->getDescription(); ?></p>
</div>
<h5>Schedules</h5>
<div class="span11 ">
	<table class="table table-condensed table-bordered ">
		<tr>
			<th>#</th>
			<th>Type</th>
			<th>Day</th>
			<th>Room</th>
			<th>Lecturers</th>
			<th>Register</th>
		</tr>
	</table>
</div>
<?php include_once("../common/library/footer.php");?>