<?php include('login_header.php'); ?>

<div class="container">
    <?php echo form_open('/user/addProduct'); ?>
    <?=form_hidden('user_id',$this->session->user_id) ?>
    <div class="form-group">
        <label>Name</label>
        <div class="row">
            <div class="col-sm-6">
                <?= form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Product Name','value'=>set_value('name')]) ?>
            </div>
            <div class="col-sm-6">
                <?=form_error('name') ?>
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
                <?=form_textarea(['name'=>'description','class'=>'form-control','placeholder'=>'Description','value'=>set_value('description')]) ?>
            </div>
            <div class="col-sm-6">
                <?=form_error('description') ?>
            </div>
        </div>
    </div>
    <?=form_reset(['value'=>'Cancel','class'=>'btn btn-secondary']) ?>
    <?=form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Add Product']) ?>
    </form>
</div>

<?php include('footer.php'); ?>