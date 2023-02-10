<!DOCTYPE html>
<html>
    <head>
        <!-- Title -->
        <title>Category</title>
        
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
    <body class="page-header-fixed compact-menu pace-done page-sidebar-fixed small-sidebar">
        <div class="overlay"></div>
        <main class="page-content content-wrap">

        <?php
            $this->load->view('backend/layout/menubar.php');
        ?>

            
            <div class="page-inner">
                <div class="page-title">
                    <h3>Category</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('backend/dashboard');?>">Dashboard</a></li>
                            <li><a href="#">Post</a></li>
                            <li class="active">Category</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <button type="button" class="btn btn-success m-b-sm" data-toggle="modal" data-target="#myModal">Add New Row</button>
                                    
                                    <div class="table-responsive">
                                        <table id="data-table" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Category</th>
                                                    <th>Slug</th>
                                                    <?php if($this->session->userdata('role') == 1){?>
                                                        <th style="text-align: center;">Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                                $no=0;
                                                foreach ($data->result() as $row):
                                                    $no++;
                                            ?>
                                                <tr>
                                                    <td><?php echo $no;?></td>
                                                    <td><?php echo $row->category_name;?></td>
                                                    <td><?php echo $row->category_slug;?></td>
                                                    <?php if($this->session->userdata('role') == 1){?>
                                                        <td style="text-align: center;">
                                                            <a href="javascript:void(0);" class="btn btn-xs btn-edit" data-id="<?php echo $row->category_id;?>" data-category="<?php echo $row->category_name;?>"><span class="fa fa-pencil"></span></a>
                                                            <a href="javascript:void(0);" class="btn btn-xs btn-delete" data-id="<?php echo $row->category_id;?>"><span class="fa fa-trash"></span></a>
                                                        </td>
                                                    <?php } ?>
                                                </tr>
                                            <?php endforeach; ?>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <?php
                    $this->load->view('backend/layout/footer.php');
                ?>
            </div><!-- Page Inner -->
        </main><!-- Page Content -->

        <!--ADD RECORD MODAL-->
        <form action="<?php echo site_url('backend/category/save');?>" method="post">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">New Category</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="category" class="form-control" placeholder="Category Name" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Add</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
	
        <!--EDIT RECORD MODAL-->
        <form action="<?php echo site_url('backend/category/edit');?>" method="post">
            <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Category</h4>
                    </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="category2" class="form-control" placeholder="Category Name" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="kode" required>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <!--DELETE RECORD MODAL-->
        <form action="<?php echo site_url('backend/category/delete');?>" method="post">
            <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Delete Category</h4>
                    </div>
                        <div class="modal-body">
                            <div class="alert alert-info">
                                Anda yakin mau menghapus data ini?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" required>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

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
        <script>
            $(document).ready(function(){
                $('#data-table').dataTable();

                //Edit Record
                $('.btn-edit').on('click',function(){
                    var id=$(this).data('id');
                    var name=$(this).data('category');
                    $('[name="kode"]').val(id);
                    $('[name="category2"]').val(name);
                    $('#EditModal').modal('show');
                });

                //Edit Record
                $('.btn-delete').on('click',function(){
                    var id=$(this).data('id');
                    $('[name="id"]').val(id);
                    $('#DeleteModal').modal('show');
                });

            });
        </script>

        <!--Toast Message-->
        <?php if($this->session->flashdata('msg')=='success'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Category Saved!",
                        showHideTransition: 'slide',
                        icon: 'success',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#7EC857'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='info'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Info',
                        text: "Category Updated!",
                        showHideTransition: 'slide',
                        icon: 'info',
                        hideAfter: false,
                        position: 'bottom-right',
                        bgColor: '#00C9E6'
                    });
            </script>
        <?php elseif($this->session->flashdata('msg')=='success-delete'):?>
            <script type="text/javascript">
                    $.toast({
                        heading: 'Success',
                        text: "Category Deleted!.",
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