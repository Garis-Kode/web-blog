<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Garis Kode - Contact</title>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('static/') ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('static/') ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('static/') ?>css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('static/') ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('static/') ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('static/') ?>css/style.css" type="text/css">
	</head>

	<body>
    <!-- Page Preloder -->


		<?php echo $header;?>

		<div class="breadcrumb-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__option my-1">
                        <a href="<?= base_url(); ?>"><span class="fa fa-home"></span> Home</a>
												<a href="<?= base_url($this->uri->segment(1)); ?>"></span> <?= $this->uri->segment(1); ?></a>
												<span><?= $this->uri->segment(2); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<div class="contact-form spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
										<h4 class="mb-2 fw-bold">Contact Us</h4>
                    <p class="mb-5">Tulis apa saja yang mau kamu bicarain</p>
											<form method="post" action="<?php echo site_url('contact/send');?>" role="form" class="form">
                        <div class="input-list d-md-flex">
                            <input type="text" name="name"  class="w-100 shadow-sm"  placeholder="Name">
                            <input type="text" name="email" class="w-100 shadow-sm	" placeholder="Email">
													</div>
													<div class="input-list d-flex">
														<input type="text" name="subject" class="w-100 shadow-sm" placeholder="Subject">
													</div>
                        <textarea name="message" class="w-100 shadow-sm" placeholder="Question"></textarea>
												<button type="submit" class="btn btn-primary fw-bold rounded-pill py-2 px-5 bg-blue-link border-0 shadow">Send</button>                    </form>
											</form>
								</div>
            </div>
        </div>
    </div>

		<?php echo $footer;?>
			
		<!-- Js Plugins -->
    <script src="<?= base_url('static/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="<?= base_url('static/') ?>js/jquery.slicknav.js"></script>
    <script src="<?= base_url('static/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('static/') ?>js/main.js"></script>
</body>
</html>