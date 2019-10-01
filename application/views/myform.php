<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open(); ?>

<h5>Username</h5>
<?php echo form_error('nom'); ?>
<input type="text" name="nom" value="<?php echo set_value('nom'); ?>" size="50" />

<h5>Password</h5>
<?php echo form_error('pass'); ?>
<input type="text" name="pass" value="<?php echo set_value('pass'); ?>" size="50" />

<h5>Password Confirm</h5>
<?php echo form_error('passconf'); ?>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

<h5>Email Address</h5>
<?php echo form_error('email'); ?>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
<br><br>
<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>