<?php
 $site = $this->db->get('tbl_site')->row_array();
 // print_r($site);die();
 $site_name= $site['site_name'];
 $site_title= $site['site_title'];
 $site_desc= $site['site_description'];
 $site_github= $site['site_twitter'];
 $site_forum= $site['site_facebook'];
 $site_instagram= $site['site_instagram'];
 $site_youtube= $site['site_pinterest'];
 $site_linkedin= $site['site_linkedin'];
?>
<section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="fw-bold">subscribe</h3>
                        <p>Dapatkan informasi menariknya disini</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="register__text">
                        <div class="register__form">
                            <form action="<?php echo site_url('subscribe');?>" method="post">
                                <input type="email" name="email" placeholder="Your Email...">
                                <button type="submit" class="site-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer Section Begin -->
    <footer>
        <div class="container">
            <section class="py-4 d-flex  justify-content-between">
              <span class="text-light mb-0">2022 © <?= $site_name ?></span>
              <div class="text-white fs-5">
                <a href="<?= $site_github ?>"><i class="bi bi-github px-2"></i></a>
                <a href="<?= $site_linkedin ?>"><i class="bi bi-linkedin px-2"></i></a>
                <a href="<?= $site_instagram ?>"><i class="bi bi-instagram px-2"></i></a>
                <a href="<?= $site_youtube ?>"><i class="bi bi-youtube px-2"></i></a>
              </div>
            </section>
          </div>
    </footer>
    <!-- Footer Section End -->