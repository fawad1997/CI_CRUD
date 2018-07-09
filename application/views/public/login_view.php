<?php $title = "Login"; ?>
<?php include('public_header.php');?>

<div class="container">
<center><h2>Login</h2></center>
<?php echo form_open('user/userLogin'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <?= form_input(['name'=>'em','class'=>'form-control','placeholder'=>'Email']) ?>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <?=form_password(['name'=>'pass','class'=>'form-control','placeholder'=>'Password']) ?>
  </div>
  <?=form_reset(['value'=>'Cancel','class'=>'btn btn-secondary']) ?>
  <?=form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Login']) ?>
</form>
</div>
<?php include('footer.php');?>