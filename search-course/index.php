<?php include_once("../common/library/header.php");?>
<script type="text/javascript" src="search-course.js"></script>
<h4>Search Course</h4>

<form action="list-course.php" method="post">

	<div class="row-fluid ">
		<div class="span6">
			<p>
				<label for="course_name">Course Name</label>
				<input type="text" class="text" name="course_name"/>
			</p>
			<p>
				<label for="course_code">Course Code</label>
				<input name="course_code" type="text" class="text" style="width:120px"/>
			</p>
			<p>
				<label for="subject">Subject</label>
				<input name="subject" type="text" class="text" />
			</p>

		</div>
		<div class="span6">
			<p>
				<label for="credit_range">Credit Range</label>
				<input type="text" class="text"name="credit_range_min"  style="width: 50px;" />
				to
				<input type="text" class="text" name="credit_range_max" style="width: 50px;margin-left:10px" />
			</p>
			<p>
				<label for="faculty">Faculty</label></label>
				<select class="select" name="faculty">
					<option>ALL</option>
					<option>Pure and Applied Sciences</option>
					<option>Humanities</option>
					<option>Social Sciences</option>
				</select>
			</p>
			<p>
				<label>Days of The Week</label>
				<br>
				<input type="checkbox" checked = "checked" value="mon"/>Mon
				<input type="checkbox" checked = "checked" value="tue"/>Tue
				<input type="checkbox" checked = "checked" value="wen"/>Wen
				<input type="checkbox" checked = "checked" value="thur"/>Thur
				<input type="checkbox" checked = "checked" value="fri"/>Fri
				<input type="checkbox" checked = "checked" value="sat"/>Sat
			</p>
		</div>
	</div>
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Detailed Search<i class="icon-chevron-down" id="detail-search-dropdown-icon"></i>
      </a>
    </div>
    <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
        			<div id="personal_prefrence">
						<p>
							<label for="degree_name">Degree Name</label>
							<input name="degree_name"type="text" class="text"/>
						</p>
						<p>
							<label for="simester">Simester</label>
							<label for="year_of_degree"style="margin-left:100px;">Year/Level of Degree</label>
							<select name="simester" class="select" style="width:150px;">
								<option>ALL</option>
								<option>First Simester</option>
								<option>Second Simester</option>
								<option value="3">Summer</option>
							</select>
							<select name="year_of_degree"class="select">
								<option>ALL</option>
								<option>1st</option>
								<option>2nd</option>
								<option>3rd</option>
								<option>4th</option>
								<option>5th</option>
								<option>6th</option>
								<option>7th</option>
							</select>
						</p>
					</div>
					<div  id="other">
						<p>
							<label for="lecture_name">Lecturer's Name </label>
							<input name="lecture_name" type="text" class="text"/>
						</p>
						<p>
							<label for="time_range">Course Time </label>
							<input name="time_range_min" type="text" class="text" style="width:70px;margin-right:10px;"/>
							to <input name="time_range_max" type="text" class="text" style="width:70px;margin-left:10px;" />
						</p>
						<p>
							<label for="max_class_duration">Max Class Duration</label>
							<input name="max_class_duration" type="text" class="text" style="width:100px;">
						</p>
						<p>
							<label for="lecture_gender">Lecture's Gender </label>
							<input type="checkbox" name="gender" checked = "checked">Male
							<input type="checkbox" name="gender" checked = "checked">Female
						</p>
						<p>
							<label>Type of Course</label>
							<input type="checkbox" checked = "checked" value="theoretical"/>Theoretical
							<input type="checkbox" checked = "checked" value="practical"/>Practical
							<input type="checkbox" checked = "checked" value="technical"/> Technical
						</p>
						<p>
							<label for="schedule_type">Schedule Type </label>
							<select class="select" name="schedule_type" style="width:100px;">
								<option>ALL</option>
								<option>Lab</option>
								<option>Lecture</option>
								<option>Tutorial</option>
							</select>
						</p>
					</div>

      </div>
    </div>


	<input type="submit" value="submit" class="submit" />
</form>
<?php include_once("../common/library/footer.php");?>