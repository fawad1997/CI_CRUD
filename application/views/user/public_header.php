<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('assets/css/bootstrap.min.css') ?>" /> -->
    <?= link_tag('assets/css/bootstrap.min.css') ?>
    <script src="main.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#">Products</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="<?=base_url('/') ?>">Home</a>
				</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-link">Register &emsp; </li>
					<a href="<?=base_url('user/login') ?>" class="nav-link active">Login</a>
				</ul>
			</div>
		</div>
</nav>