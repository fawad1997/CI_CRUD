<?php include('login_header.php');?>

<div class="container">
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
        <a href="#" class="btn btn-primary">Edit</a><a href="#" class="btn btn-danger">Delete</a>
    </div>
    </div>
    <?php
            endforeach;
        endif;
    ?>
</div></div>
<?php include('footer.php');?>