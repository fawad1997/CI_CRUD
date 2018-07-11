<?php include('login_header.php');?>

<div class="container">
<div class="row">
    <a href="<?=base_url('user/add_product')?>" class="btn btn-secondary">Add Product</a>
</div>
<br/>
<?php
    if($error = $this->session->flashdata('articleaddmsg')): ?>
        <div class="<?=$this->session->flashdata('articleclass')?>" role="alert">
            <?=$error ?>
        </div>
<?php  endif;?>
<div class="row">
    <?php
        if(count($products)):
            foreach($products as $product):
    ?>
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?=$product->url ?>" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title"><?=$product->name ?></h5>
        <p class="card-text"><?=$product->description ?></p>
        <?=anchor("user/edit_product/{$product->id}",'Edit',['class'=>'btn btn-primary']) ?>
        <a href="#" class="btn btn-danger">Delete</a>
    </div>
    </div>
    <?php
            endforeach;
        endif;
    ?>
</div></div>
<?php include('footer.php');?>