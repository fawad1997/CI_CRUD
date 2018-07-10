<?php include('login_header.php'); ?>

<div class="container">
    <?php echo form_open('/user/addProduct'); ?>
    <?=form_hidden('user_id',$this->session->user_id) ?>
    <div class="form-group">
        <label>Name</label>
        <div class="row">
            <div class="col-sm-6">
                <?= form_input(['name'=>'nam','class'=>'form-control','placeholder'=>'Product Name','value'=>set_value('nam')]) ?>
            </div>
            <div class="col-sm-6">
                <?=form_error('nam') ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>URL</label>
        <div class="row">
            <div class="col-sm-6">
                <?= form_input(['name'=>'url','class'=>'form-control','placeholder'=>'Image URL','value'=>set_value('url')]) ?>
            </div>
            <div class="col-sm-6">
                <?=form_error('url') ?>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <div class="row">
            <div class="col-sm-6">
                <?=form_textarea(['name'=>'desc','class'=>'form-control','placeholder'=>'Password','value'=>set_value('desc')]) ?>
            </div>
            <div class="col-sm-6">
                <?=form_error('desc') ?>
            </div>
        </div>
    </div>
    <?=form_reset(['value'=>'Cancel','class'=>'btn btn-secondary']) ?>
    <?=form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Add Product']) ?>
    </form>
</div>

<?php include('footer.php'); ?>