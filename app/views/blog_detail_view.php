<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo $title;?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="<?php echo base_url('theme/images/'.$icon);?>">
		<meta name="description" content="<?php echo $description;?>"/>
		<meta name="keywords" content="<?php echo $tags;?>"/>
		<meta name="author" content="<?php echo $author;?>"/>
		<!-- SEO Tags -->
		<meta name="description" content="<?php echo $description;?>"/>
		<link rel="canonical" href="<?php echo site_url('blog/'.$slug);?>" />
		<meta property="og:locale" content="id_ID" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php echo $title;?>" />
		<meta property="og:description" content="<?php echo $description;?>" />
		<meta property="og:url" content="<?php echo site_url('blog/'.$slug);?>" />
		<meta property="og:site_name" content="<?php echo $site_name;?>" />
		<meta property="article:publisher" content="<?php echo $site_facebook;?>" />
		<meta property="article:section" content="<?php echo $category;?>" />
		<meta property="og:image" content="<?php echo base_url().'assets/images/'.$image;?>" />
		<meta property="og:image:secure_url" content="<?php echo base_url().'assets/images/'.$image;?>" />
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:description" content="<?php echo $description;?>" />
		<meta name="twitter:title" content="<?php echo $title;?>" />
		<meta name="twitter:site" content="<?php echo $site_twitter;?>" />
		<meta name="twitter:image" content="<?php echo base_url().'assets/images/'.$image;?>" />
		<!-- / End SEO Tags. -->
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

		    <!-- Blog Hero Section Begin -->
				<section class="blog-hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog__hero__text">
                        <div class="label bg-blue"><?php echo $category;?></div>
                        <h3>
												<?php echo $title;?>
                        </h3>
                        <ul>
                            <li><i class="fa fa-user"></i> <?php echo $author;?></li>
                            <li><i class="fa fa-clock-o"></i> <?php echo date('d M Y',strtotime($date));?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog__hero__pic set-bg" data-setbg="<?php echo base_url().'assets/images/'.$image;?>"></div>
    </section>
    <!-- Blog Hero Section End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details-section  bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__text">
                        <div class="blog__details__social">
                            <div class="position-sticky">
                                <span>Share</span>
                                <ul>
                                    <li>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
																		<li>
                                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="blog__details__title">
												<?php echo $content;?>
                        </div>
                        <div class="blog__details__tags">

													<?php 
				                    $split_tag=explode(",", $tags);
				                    foreach ($split_tag as $tag) : 
				                  ?>
														<a href="<?php echo site_url('tag/'.$tag);?>"><?php echo $tag;?></a>
													<?php endforeach;?>

                        </div>
                        <div class="blog__details__profile">
                            <div class="blog__details__profile__pic">
                                <img src="<?= base_url('assets/images/') ?><?php echo $author_img;?>" alt="">
                            </div>
                            <div class="blog__details__profile__text">
                                <h5><?php echo $author;?></h5>
                                <p><?php echo $author_desc;?></p>
                                <div class="blog__details__profile__social">
																	<a href="<?php echo $author_ig;?>"><i class="fa fa-instagram"></i></a>
                                    <a href="<?php echo $author_in;?>"><i class="fa fa-linkedin-square"></i></a>
                                    <a href="<?php echo $author_git;?>"><i class="fa fa-github"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog__details__option">
                            <div class="row">
                                <div class="col-12">
                                    <div class="blog__details__option__item mb-4">
                                        <h5>Baca Lainnya</h5>
                                    </div>
                                </div>
																<?php foreach ($related_post->result() as $row):?>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <a href="<?= base_url('blog/') ?><?= $row->post_slug ?>" class="blog__details__option__item mb-4">
                                        <div class="label"><?= $row->category_name ?></div>
                                        <h6><?= $row->post_title ?></h6>
                                    </a>
                                </div>
																<?php endforeach;?>	
                            </div>
                        </div>
                        <div class="blog__details__comment mb-5">
                            <div class="d-lg-flex justify-content-between mb-5">
                                <h4 class="mb-3"><?php echo $comment;?> Comment</h4>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#komen">                                
                                    <p class="text-primary fw-medium"><i class="bi bi-pencil-square"></i> Tulis Komentar</p>
                                </a>
                            </div>
														<?php echo $this->session->flashdata('msg');?>
                            <div class="blog__details__comment__list">
															<?php foreach ($show_comments->result() as $row):?>
                                <div class="blog__details__comment__item">
                                    <div class="blog__details__comment__pic">
                                        <img src="https://ui-avatars.com/api/?name=<?php echo $row->comment_name;?>&background=random&color=ffff" alt="">
                                    </div>
                                    <div class="blog__details__comment__text">
                                        <h5><?php echo $row->comment_name;?></h5>
                                        <p>	<?php echo $row->comment_message;?></p>
                                        <ul>
                                            <li><i class="fa fa-clock-o text-blue"></i> <?php echo date('d M Y H:i:s',strtotime($row->comment_date));?></li>
                                        </ul>
                                    </div>
                                </div>
																	<?php
																		$comment_id=$row->comment_id;
																		$query = $this->db->query("SELECT * FROM tbl_comment WHERE comment_status='1' AND comment_parent='$comment_id'");
																		foreach ($query->result() as $i) :
																	?>
																		<div class="blog__details__comment__item blog__details__comment__reply">
																				<div class="blog__details__comment__pic">
																						<img src="<?php echo base_url().'assets/images/'.$i->comment_image;?>" alt="">
																				</div>
																				<div class="blog__details__comment__text">
																						<h5><?php echo $i->comment_name;?></h5>
																						<p><?php echo $i->comment_message;?></p>
																						<ul>
																								<li><i class="fa fa-clock-o"></i> <?php echo date('d M Y H:i:s',strtotime($i->comment_date));?></li>
																						</ul>
																				</div>
																		</div>
																	<?php endforeach;?>	
															<?php endforeach;?>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

		<!-- Modal -->
<div class="modal fade" id="komen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
				<div class="contact-form">
					<div class="container">
							<div class="row">
									<div class="col-12 py-4">
											<h5 class="fw-bold">Komentar</h5>
											<p>Tulis komentarmu tentang tulisan ini</p>
											<form method="post" action="<?php echo site_url('send_comment');?>" role="form" class="form">
											<input type="hidden" name="post_id" value="<?php echo $post_id;?>" required>
                      <input type="hidden" name="slug" value="<?php echo $slug;?>" required>
                        <div class="input-list d-md-flex">
                            <input type="text" name="name" class="w-100 " placeholder="Name" >
													</div>
													<div class="input-list d-flex">
														<input type="email" name="email" class="w-100 " placeholder="Email">
													</div>
                        <textarea name="comment" class="w-100 " placeholder="Question"></textarea>
												<div class="text-center">
													<button type="submit" class="btn btn-primary btn-sm fw-bold rounded-pill py-2 px-5 bg-blue-link border-0 shadow">Submit</button>
													<button type="button" class="btn btn-danger btn-sm fw-bold rounded-pill py-2 px-5  border-0 shadow" data-bs-dismiss="modal">Cancel</button>
												</div>                                        
											</form>
									</div>
							</div>
					</div>
				</div>
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