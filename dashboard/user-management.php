<?php include_once("../common/library/user.php");?>


<h2>User Management</h2>
<table class="table">
	<tr>
		<th>#</th>
		<th>Username</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Type</th>
		<th colspan="2">Email</th>

	</tr>
	<?php foreach(User::getAllUserIds() as $id):
		$user = new User($id);
	 ?>
		<tr>
			<td><?php echo $user->getID();?></td>
			<td><?php echo $user->getUsername();?></td>
			<td><?php echo $user->getFirstName();?></td>
			<td><?php echo $user->getLastName();?></td>
			<td><?php echo User::getUserTypeS($user->getType());?></td>
			<td><?php echo $user->getEmail();?></td>
			<td>
				<?php if($user->getIsMain()==0):?>
					<a href="#" onclick="editUser(<?php echo $user->getID() ?>)">
					<i class="icon-pencil" ></i></a>
				<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
    <tr>
    	<td></td>
        <td colspan="6">
            <a href="#" onclick="populateBody('create user');" >Add User
            </a>
        </td>
    </tr>
</table>