<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
		<title><?php echo $site_title;?></title>

		<!-- SEO Tag -->
			<meta http-equiv="X-UA-Compatible" content="ie=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta name="description" content="<?php echo $site_desc;?>"/>
	    <link rel="canonical" href="<?php echo site_url();?>" />
	    <meta property="og:locale" content="id_ID" />
	    <meta property="og:type" content="website" />
	    <meta property="og:title" content="<?php echo $site_title;?>" />
	    <meta property="og:description" content="<?php echo $site_desc;?>" />
	    <meta property="og:url" content="<?php echo site_url();?>" />
	    <meta property="og:site_name" content="<?php echo $site_name;?>" />
	    <meta property="og:image" content="<?php echo base_url().'theme/img/'.$site_image?>" />
	    <meta property="og:image:secure_url" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <meta property="og:image:width" content="560" />
	    <meta property="og:image:height" content="315" />
	    <meta name="twitter:card" content="summary" />
	    <meta name="twitter:description" content="<?php echo $site_desc;?>" />
	    <meta name="twitter:title" content="<?php echo $site_title;?>" />
	    <meta name="twitter:image" content="<?php echo base_url().'theme/images/'.$site_image?>" />
	    <link rel="stylesheet" href="<?php echo base_url().'static/css/font-awesome.min.css'?>"/>

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
    <div id="preloder">
        <div class="loader"></div>
    </div>

		<?php echo $header_home;?>

		<div class="breadcrumb-section ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__option my-1">
                        <a href="<?= base_url(); ?>"><span class="fa fa-home"></span> Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

		 <!-- Blog Section Begin -->
		 <section class="blog-section spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div >
                        <h4 class="mb-2 fw-bold">Artikel Terbaru</h4>
                        <p class="mb-5">Baca Tutorial coding menarik disini</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
												<?php foreach($latest_post->result() as $row):?>
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="card rounded-4 shadow-sm border-0">
                                <div class="card-body">
                                    <div class="blog__item">
                                        <div class="blog__pic set-bg rounded-4" data-setbg="<?php echo base_url().'assets/images/thumb/'.$row->post_image?>">
                                            <div class="label shadow-sm"><?php echo $row->category_name;?></div>
                                        </div>
                                        <div class="blog__text">
                                            <h5><a href="<?php echo site_url('blog/'.$row->post_slug);?>"><?php echo $row->post_title;?></a></h5>
                                            <ul class="mt-4">
                                                <li><img src="<?php echo base_url().'assets/images/'.$row->user_photo;?>" class="rounded-pill me-3" width="30" height="30" alt=""> <?php echo $row->user_name;?></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
												<?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5">
                    <nav aria-label="..." class="">
                        <ul class="pagination">
                            <li class="page-item disabled shadow">
                                <a class="page-link border-0 rounded-0">Previous</a>
                            </li>
                            <li class="page-item shadow"><a class="page-link border-0" href="#">1</a></li>
                            <li class="page-item active shadow" aria-current="page">
                                <a class="page-link border-0" href="#">2</a>
                            </li>
                            <li class="page-item shadow"><a class="page-link border-0" href="#">3</a></li>
                            <li class="page-item shadow ">
                                <a class="page-link border-0 rounded-0" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

		<?php echo $footer;?>


		<!-- Js Plugins -->
    <script src="<?= base_url('static/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('static/') ?>https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="<?= base_url('static/') ?>js/jquery.slicknav.js"></script>
    <script src="<?= base_url('static/') ?>js/owl.carousel.min.js"></script>
    <script src="<?= base_url('static/') ?>js/main.js"></script>
</body>

</html>
