<style media="screen">
.container{
    width: 500px;
    padding-top: 120px;

  }
</style>
<div class="container">

<h5>Enter Your NIC Number..</h5>
<?php echo form_open('users/login') ?>

<div class="form-group">
	<input type="password" name="nic" class="form-control" placeholder="NIC" required
  >
	<span class="text-danger"><?php echo form_error('nic'); ?></span>
</div>

<div class="form-group">
	<input type="submit" name="login" class="btn btn-primary" value="Login">
</div>



<?php echo form_close(); ?>

</div>
