<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<?php wp_head();?>
</head>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1>For Cat's Lovers!</h1>
		</div>
	</div>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/cat2.jpg" alt="" class="img-thumbnail img-responsive">
				</div>
				<div class="col-xs-10">
					<h1>First title</h1>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
						Tempore temporibus, suscipit quis rerum similique aliquid adipisci itaque,
						iusto aspernatur explicabo, provident nam.
						Provident minus autem ad nostrum perferendis magni eum!
					</p>
					<button class='btn btn-success'>click</button>
				</div>
			</div>
		</div>
	</section>

		<?php wp_footer();?>
</body>
</html>
