<?php
		$getCategory = $this->db->get('tbl_category');
    $site = $this->db->get('tbl_site')->row_array();
    $logo= $site['site_logo_header'];
		$site_name= $site['site_name'];
		$site_title= $site['site_title'];
		$site_desc= $site['site_description'];
		$site_github= $site['site_twitter'];
		$site_forum= $site['site_facebook'];
		$site_instagram= $site['site_instagram'];
		$site_youtube= $site['site_pinterest'];
		$site_linkedin= $site['site_linkedin'];
?>
<!-- Offcanvas Menu Begin -->
<div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper bg-blue shadow">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="<?= base_url() ?>"><img src="<?php echo base_url().'theme/images/'.$logo;?>" width="80" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="py-2"><a href="<?= base_url() ?>">Home</a></li>
                <li class="py-2"><a href="<?= base_url('blog') ?>">Blog</a>
                    <ul class="dropdown">
                        <li><a href="<?= base_url('blog') ?>">ALL</a></li>
                        <?php foreach($getCategory->result() as $row):?>
                        <li><a href="<?= base_url('category/') ?><?= $row->category_slug ?>"><?= $row->category_name ?></a></li>
                        <?php endforeach;?>
                    </ul>
                </li>
                <li class="py-2"><a href="<?= base_url('contact') ?>">Contact</a></li>
                <li class="py-2"><a href="<?= $site_forum ?>">Forum</a></li>
                <li class="py-2"><a href="./contact.html">Login</a></li>
                <li class="py-2"><a href="./contact.html">Register</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-2">
                    <div class="header__logo">
                        <a href="<?= base_url() ?>"><img src="<?php echo base_url().'theme/images/'.$logo;?>" width="70" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-10">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?= base_url() ?>">Home</a></li>
                            <li class="<?php if($this->uri->segment(1) == 'blog' OR $this->uri->segment(1) == 'category' OR $this->uri->segment(1) == 'tag' OR $this->uri->segment(1) == 'search'){echo'active';} ?>"><a href="<?= base_url('blog') ?>">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="<?= base_url('blog') ?>">All</a></li>
                                    <?php foreach($getCategory->result() as $row):?>
                                    <li><a href="<?= base_url('category/') ?><?= $row->category_slug ?>"><?= $row->category_name ?></a></li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                            <li class="<?php if($this->uri->segment(1) == 'contact'){echo'active';} ?>"><a href="<?= base_url('contact') ?>">Contact</a></li>
                            <li><a href="<?= $site_forum ?>">Forum</a></li>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="py-1 px-1 me-5 fw-bold fs-5 text-white"><i class="bi bi-search "></i></a>
                            <a href="#"  class="py-1 px-4 btn btn-outline-light btn-sm rounded-pill fw-bold me-2">Login</a>
                            <a href="#"  class="py-1 px-4 btn btn-light btn-sm rounded-pill fw-bold ms-2">Register</a>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open mt-3 mt-lg-0">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="input-group" action="<?php echo site_url('search');?>" method="GET">
                            <input type="text" name="search_query" class="form-control border border-primary form-lg" placeholder="Ketik Apa Saja ...">
                            <button class="btn btn-primary bg-blue" type="submit" id="button-addon2">Search</button>
                        </form>
                    </div>  
                </div>
            </div>
        </div>