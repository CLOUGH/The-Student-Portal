<?php include_once("../common/library/header.php");?>
<script type="text/javascript" src="dashboard.js"></script>
<div class="container-fluid">
	 <div class="row-fluid">
    <div class="span3 sidebar">
    	<ul class="nav nav-list sidenav">
    		<li>
    			<a href="#" onclick="populateBody('course management');">
    				<i class="icon-chevron-right"></i>
    				Courses Management
    			</a>
    		</li>
    		<li>
    			<a href="student-management.php">
    				<i class="icon-chevron-right"></i>
    				Student Management
    			</a>
    		</li>
    		<li>
    			<a href="#" onclick="populateBody('user management');">
    				<i class="icon-chevron-right"></i>
    				User Management
    			</a>
    		</li>

    	</ul>
    </div>
    <div class="span8" id="sidebar-body">
    	<h3>Website Management</h3>
    	<p>
    		This section of the website is used to manage Student Portal.
    		Some of the features include adding data to the site, viewing records
    		within the database, editing and updating these records, etc.
    	</p>
    </div>
  </div>
</div>
<?php include_once("../common/library/footer.php");?>