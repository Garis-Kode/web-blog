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

    <!-- Modal -->
<div class="modal fade" id="sub" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded-4 shadow py-5">
      <div class="modal-body py-0 text-center">
        <img src="<?= base_url('assets/images/speaker.png') ?>" width="200" alt="">
        <h3 class="fw-bold mt-3">HORE...!!</h3>
        <p>Terima kasih telah berlangganan! <br>Nantikan notifikasi dari kami</p>
      </div>
      <div class="modal-footer text-center flex-column border-top-0">
      <button type="button" class="btn btn-primary btn-sm fw-bold rounded-pill py-2 px-5 bg-blue border-0 shadow" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal -->
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2">Sign up for free</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="yiwimk"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form class="">
          <div class="form-floating mb-3">
            <input type="email" class="form-control rounded-3" id="floatingInput" placeholder="name@example.com" fdprocessedid="bj0zl">
            <label for="floatingInput">Email</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control rounded-3" id="floatingPassword" placeholder="Password" fdprocessedid="8y3jw">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit" fdprocessedid="me91kwm">Sign up</button>
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
          <hr class="my-4">
          <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
          <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-3" type="submit" fdprocessedid="j50fmp">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#twitter"></use></svg>
            Sign up with Twitter
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-3" type="submit" fdprocessedid="jqsz">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#facebook"></use></svg>
            Sign up with Facebook
          </button>
          <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-3" type="submit" fdprocessedid="jt9psp">
            <svg class="bi me-1" width="16" height="16"><use xlink:href="#github"></use></svg>
            Sign up with GitHub
          </button>
        </form>
      </div>
    </div>
  </div>
</div>