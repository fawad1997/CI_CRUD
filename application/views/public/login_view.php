<?php $title = "Login"; ?>
<?php include('public_header.php');?>

<div class="container">
<center><h2>Login</h2></center>
<?php echo form_open('user/userLogin'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <div class="row">
        <div class="col-sm-6">
            <?= form_input(['name'=>'em','class'=>'form-control','placeholder'=>'Email','value'=>set_value('em')]) ?>
        </div>
        <div class="col-sm-6">
            <?=form_error('em') ?>
        </div>
    </div>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <div class="row">
        <div class="col-sm-6">
            <?=form_password(['name'=>'pass','class'=>'form-control','placeholder'=>'Password','value'=>set_value('pass')]) ?>
        </div>
        <div class="col-sm-6">
            <?=form_error('pass',"<p class='text-danger'>","</p>") ?>
        </div>
    </div>
  </div>
  <?=form_reset(['value'=>'Cancel','class'=>'btn btn-secondary']) ?>
  <?=form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Login']) ?>
</form>
</div>
<?php include('footer.php'); ?>