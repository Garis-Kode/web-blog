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
<div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="yiwimk"></button>
      </div>

      <div class="modal-body p-5 pt-0">
                    <h6 class=" text-muted">Masuk sebagai author garis kode</h6>
                    <form action="https://tif-unimal20.web.id/auth/login_proses" method="POST" class="row g-4 pt-4">
                      <div class="col-12">
                          <label class="fw-semibold">Email<span class="text-danger">*</span></label>
                          <div class="input-group">
                              <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                              <input type="email" class="form-control" name="email" placeholder="Enter Email" required="">
                          </div>
                      </div>

                      <div class="col-12">
                          <div class="d-flex justify-content-between">
                            <label class="fw-semibold">Password<span class="text-danger">*</span></label>
                            <a href="#" onclick="forget()" class="text-end text-primary"><small>Lupa Password?</small></a>
                          </div>
                          <div class="input-group">
                              <div class="input-group-text"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control" name="password" placeholder="Enter Password" required="">
                          </div>
                      </div>

                      <div class="col-sm-6">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                              <label class="form-check-label" for="inlineFormCheck">Remember me</label>
                          </div>
                      </div>

                      <div class="d-grid gap-2 ">
                        <button type="submit" class="btn btn-primary bg-blue-link rounded-pill border-0 button-slave mx-3  rounded"> Log In</button>
                      </div>
                      <div class="col-sm-12 text-center">
                          Belum Memiliki Akun?<a href="#" onclick="register()" class="text-primary">Daftar</a>
                      </div>
                    </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forget" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h1 class="modal-title fs-5" >Modal title</h1> -->
        <h1 class="fw-bold mb-0 fs-2">Forget</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" fdprocessedid="yiwimk"></button>
      </div>

      <div class="modal-body p-5 pt-0">
                    <h6 class=" text-muted">Masukan Email Untuk Mereset Password Anda</h6>
                    <form action="https://tif-unimal20.web.id/auth/login_proses" method="POST" class="row g-4 pt-4">
                      <div class="col-12">
                          <label class="fw-semibold">Email<span class="text-danger">*</span></label>
                          <div class="input-group">
                              <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                              <input type="email" class="form-control" name="email" placeholder="Enter Email" required="">
                          </div>
                      </div>

                      <div class="d-grid gap-2 ">
                        <button type="submit" class="btn btn-primary bg-blue-link rounded-pill border-0 button-slave mx-3  rounded"> Submit</button>
                      </div>
                      <div class="col-sm-12 text-center">
                          <a href="#"  onclick="login()" ><span class="text-primary">Kembali Login</span></a>
                      </div>
                    </form>
      </div>
    </div>
  </div>
</div>

<script>
function login(){
    $('#register').modal('hide');
    $('#forget').modal('hide');
    $('#login').modal('show');
}
function register(){
    $('#login').modal('hide');
    $('#forget').modal('hide');
    $('#register').modal('show');
}
function forget(){
    $('#login').modal('hide');
    $('#register').modal('hide');
    $('#forget').modal('show');
}
</script>