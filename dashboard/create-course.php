<?php
    $course;
    if(isset($_GET['id'])){
        include_once("../common/library/course.php");
        $course = new Course();
        $course->initByID($_GET['id']);
    }

?>
<script type="text/javascript" src="create-course.js"></script>

<h2>Course Management</h2>
<form id="<?php echo !isset($course)?'save-course':'update-course'?>" >
  <fieldset>
    <legend>Add Course</legend>

    <?php if(isset($course)):?>
        <label>ID</label>
        <input  disabled id="disabledInput" type="text" name="id" value="<?php echo isset($course)?$course->getID():''?>">
    <?php endif ?>

    <label>Title</label>
    <input type="text" name="title" value="<?php echo isset($course)?$course->getTitle():''?>">

    <label>Subject</label>
    <input type="text" name="subject" value="<?php echo isset($course)?$course->getSubject():''?>">

    <label>Course Code</label>
    <input type="text" name="code" value="<?php echo isset($course)?$course->getCode():''?>">

    <label>Faculty</label>
    <input type="text" name="faculty" value="<?php echo isset($course)?$course->getFaculty():''?>">

    <label>Simester</label>
    <input type="text" name="simester" value="<?php echo isset($course)?$course->getSimester():''?>">

    <label>Level</label>
    <input type="text" name="level" value="<?php echo isset($course)?$course->getLevel():''?>">

    <label>Credits</label>
    <input type="text" name="credit" value="<?php echo isset($course)?$course->getCredit():''?>">

    <label>Type</label>
    <input type="text" name="type" value="<?php echo isset($course)?$course->getType():''?>">

    <label>Description</label>
    <textarea rows="3" name="description" style="width:80%"><?php echo isset($course)?$course->getDescription():''?></textarea>
  </fieldset>
  <button type="submit" class="btn">Submit</button>
</form>