<?php include('login_header.php'); ?>

<div class="container">
    <?php echo form_open('/user/editProduct'); ?>
    <?=form_hidden('id',$article->id) ?>
    <div class="form-group">
        <label>Name</label>
        <div class="row">
            <div class="col-sm-6">
                <?= form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Product Name','value'=>set_value('name',$article->name)]) ?>
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
                <?= form_input(['name'=>'url','class'=>'form-control','placeholder'=>'Image URL','value'=>set_value('url',$article->url)]) ?>
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
                <?=form_textarea(['name'=>'description','class'=>'form-control','placeholder'=>'Description','value'=>set_value('description',$article->description)]) ?>
            </div>
            <div class="col-sm-6">
                <?=form_error('description') ?>
            </div>
        </div>
    </div>
    <?=form_reset(['value'=>'Cancel','class'=>'btn btn-secondary']) ?>
    <?=form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Update Product']) ?>
    </form>
</div>

<?php include('footer.php'); ?>