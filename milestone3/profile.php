
<?php echo form_open();?>
<?php echo validation_errors();?>
<form action="profile.php" method="POST">
 <!--   <p>ID:</p><?php /*echo $_SESSION['userId'];*/?>
    <p>Username:</p>--><?php /*echo $_SESSION['username'];*/?>

    <p>Email:</p><?php echo $_SESSION['email'];?><br>

    <!--   <a href="updating.php"><button>Update email</button></a>-->
    New Email: <input type="text" name="newEmail"  placeholder="new email" required>
    <?= form_error('newEmail'); ?>
    <button type="submit">Update Email</button>
    <!--<input type="hidden" name="id">-->
<!--    <a href="--><?php //echo base_url();?><!--Home/update_email" name="update"><button type="submit">Update Email</button></a>-->
    <br>
    <a href="<?php echo base_url();?>Home/add_favorite_list" ><buttton>My favorite Images</buttton></a>


    <?php echo form_close() ?>
</form>
</body>
</html>


