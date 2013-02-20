<?php
    $user;
    if(isset($_GET['id'])){
        include_once("../common/library/user.php");
        $user = new User($_GET['id']);
    }

?>
<script type="text/javascript" src="create-user.js"></script>

<h2>User Management</h2>
<form id="<?php echo !isset($user)?'save-user':'update-user'?>" >
  <fieldset>
    <legend>Add User</legend>

    <?php if(isset($user)):?>
        <label>ID</label>
        <input  disabled id="disabledInput" type="text" name="id" value="<?php echo isset($user)?$user->getID():''?>">
    <?php endif ?>

    <label>User</label>
    <input <?php echo isset($user)?'disabled  id="disabledInput"':''?> type="text" name="user_name" value="<?php echo isset($user)?$user->getUsername():''?>">

    <label>Password</label>
    <input type="password" name="password" value="">


    <label>First Name</label>
    <input type="text" name="first_name" value="<?php echo isset($user)?$user->getFirstname():''?>">

    <label>Last Name</label>
    <input type="text" name="last_name" value="<?php echo isset($user)?$user->getLastname():''?>">

    <label>Type</label>
    <input type="text" name="type" value="<?php echo isset($user)?$user->getType():''?>">

    <label>Email</label>
    <input type="text" name="email" value="<?php echo isset($user)?$user->getEmail():''?>">

  </fieldset>
  <button type="submit" class="btn">Submit</button>
</form>