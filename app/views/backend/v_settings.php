<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title>Site Settings</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="M Fikri Setiadi" />
        <link rel="shortcut icon" href="<?php echo base_url().'assets/images/favicon.png'?>">

        <!-- Styles -->
        <link href="<?php echo base_url().'assets/plugins/pace-master/themes/blue/pace-theme-flash.css'?>" rel="stylesheet"/>
        <link href="<?php echo base_url().'assets/plugins/uniform/css/uniform.default.min.css'?>" rel="stylesheet"/>
        <link href="<?php echo base_url().'assets/plugins/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/fontawesome/css/font-awesome.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/line-icons/simple-line-icons.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/waves/waves.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/switchery/switchery.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/3d-bold-navigation/css/style.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/slidepushmenus/css/component.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.datatables.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/datatables/css/jquery.datatables_themeroller.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.css'?>" rel="stylesheet" type="text/css"/>
        <!-- Theme Styles -->
        <link href="<?php echo base_url().'assets/css/modern.min.css'?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/css/themes/green.css'?>" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url().'assets/css/custom.css'?>" rel="stylesheet" type="text/css"/>

        <script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/modernizr.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/snap.svg-min.js'?>"></script>


    </head>
    <body class="page-header-fixed  compact-menu  pace-done page-sidebar-fixed small-sidebar">
        <div class="overlay"></div>
        <main class="page-content content-wrap">

        <?php
            $this->load->view('backend/layout/menubar.php');
        ?>

            
            <div class="page-inner">
                <div class="page-title">
                    <h3>Site Information</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Site</a></li>
                            <li class="active">Settings</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <form class="form-horizontal" action="<?php echo base_url().'backend/settings/update'?>" method="post" enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="panel panel-white">

                                <div class="panel-body">

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" id="input1" value="<?php echo $site_name;?>" placeholder="Site Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Title</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="title" class="form-control" id="input1" value="<?php echo $site_title;?>" placeholder="Site Title">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Site Description</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" class="form-control" rows="6"><?php echo $site_description;?></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Favicon</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo_icon" class="form-control" id="input1">
                                                <p class="help-block">Favicon harus beresolusi 32 x 32 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$site_favicon;?>" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Logo Header</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo_header" class="form-control" id="input1">
                                                <p class="help-block">Logo harus beresolusi 248 x 54 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$site_logo_header;?>" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Logo Big</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="logo_big" class="form-control" id="input1">
                                                <p class="help-block">Logo big harus beresolusi 560 x 315 Pixels.</p>
                                                <img src="<?php echo base_url().'theme/images/'.$site_logo_big;?>" width="560" class="thumbnail">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Forum URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="facebook" class="form-control" value="<?php echo $site_facebook;?>" id="input1" placeholder="Forum URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Github URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="twitter" class="form-control" value="<?php echo $site_twitter;?>" id="input1" placeholder="Github URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Linkedin URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="linkedin" class="form-control" value="<?php echo $site_linkedin?>" id="input1" placeholder="Linkedin URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Instagram URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="instagram" class="form-control" value="<?php echo $site_instagram;?>" id="input1" placeholder="Instagram URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="input1" class="col-sm-2 control-label">Youtube URL</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pinterest" class="form-control" value="<?php echo $site_pinterest;?>" id="input1" placeholder="Youtube URL">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="hidden" name="site_id" value="<?php echo $site_id?>" required>
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">UPDATE</button>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>


                        </form>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <?php
                    $this->load->view('backend/layout/footer.php');
                ?>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->

        <!-- Javascripts -->
        <script src="<?php echo base_url().'assets/plugins/jquery/jquery-2.1.4.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/pace-master/pace.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-blockui/jquery.blockui.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/switchery/switchery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/uniform/jquery.uniform.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/classie.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/offcanvasmenueffects/js/main.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/waves/waves.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/3d-bold-navigation/js/main.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/jquery-mockjax-master/jquery.mockjax.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/moment/moment.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/datatables/js/jquery.datatables.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/modern.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/plugins/toastr/jquery.toast.min.js'?>"></script>
        <!--Toast Message-->
        <?php if($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Site Information Saved!",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php else:?>

        <?php endif;?>

    </body>
</html>
