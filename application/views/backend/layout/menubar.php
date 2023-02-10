
<div class="navbar">
                <div class="navbar-inner">
                    <div class="sidebar-pusher">
                        <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="logo-box">
                        <a href="<?php echo site_url('backend/dashboard');?>" class="logo-text"><img src="<?php echo site_url('assets/images/logo.png');?>" width="35" alt=""></a>
                    </div><!-- Logo Box -->
                    <div class="topmenu-outer">
                        <div class="top-menu">
                            <ul class="nav navbar-nav navbar-right">
                                <?php 
                                    $count_inbox = $this->db->get_where('tbl_inbox', array('inbox_status' => '0'));
                                ?>
                                <?php if($this->session->userdata('access')=='1'):?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge badge-success pull-right"><?php echo $count_inbox->num_rows();?></span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        
                                        <li><p class="drop-title">Anda memiliki <?php echo $count_inbox->num_rows();?> pesan baru !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <?php 
                                                    $query_msg = $this->db->get_where('tbl_inbox', array('inbox_status' => '0'), 6);
                                                    foreach ($query_msg->result() as $row) :
                                                ?>
                                                <li>
                                                    <a href="<?php echo site_url('backend/inbox');?>">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>" alt=""></div>
                                                        <p class="msg-name"><?php echo $row->inbox_name;?></p>
                                                        <p class="msg-text"><?php echo word_limiter($row->inbox_message,5);?></p>
                                                        <p class="msg-time"><?php echo date('d-m-Y H:i:s', strtotime($row->inbox_created_at));?></p>
                                                    </a>
                                                </li>
                                                <?php endforeach;?>
                                                
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="<?php echo site_url('backend/inbox');?>" class="text-center">All Messages</a></li>
                                    </ul>
                                </li>
                                <?php endif;?>
                                <?php
                                    $count_comment = $this->db->get_where('tbl_comment', array('comment_status' => '0'));
                                ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown"><i class="fa fa-comment"></i><span class="badge badge-success pull-right"><?php echo $count_comment->num_rows();?></span></a>
                                    <ul class="dropdown-menu title-caret dropdown-lg" role="menu">
                                        <li><p class="drop-title">Anda memiliki <?php echo $count_comment->num_rows();?> komentar baru !</p></li>
                                        <li class="dropdown-menu-list slimscroll messages">
                                            <ul class="list-unstyled">
                                                <?php 
                                                    $query_cmt = $this->db->get_where('tbl_comment', array('comment_status' => '0'), 6);
                                                    foreach ($query_cmt->result() as $row) :
                                                ?>
                                                <li>
                                                    <a href="<?php echo site_url('backend/comment/unpublish');?>">
                                                        <div class="msg-img"><div class="online on"></div><img class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>" alt=""></div>
                                                        <p class="msg-name"><?php echo $row->comment_name;?></p>
                                                        <p class="msg-text"><?php echo word_limiter($row->comment_message,5);?></p>
                                                        <p class="msg-time"><?php echo date('d-m-Y H:i:s', strtotime($row->comment_date));?></p>
                                                    </a>
                                                </li>
                                                <?php endforeach;?>
                                                
                                            </ul>
                                        </li>
                                        <li class="drop-all"><a href="<?php echo site_url('backend/comment/unpublish');?>" class="text-center">All Comments</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                        <span class="user-name"><?php echo $this->session->userdata('name');?><i class="fa fa-angle-down"></i></span>
                                        <?php
                                            $user_id=$this->session->userdata('id');
                                            $query=$this->db->get_where('tbl_user', array('user_id' => $user_id));
                                            if($query->num_rows() > 0):
                                            $row = $query->row_array();
                                        ?>
                                        <img class="img-circle avatar" src="<?php echo base_url().'assets/images/'.$row['user_photo'];?>" width="40" height="40" alt="">
                                        <?php else:?>
                                        <img class="img-circle avatar" src="<?php echo base_url().'assets/images/user_blank.png';?>" width="40" height="40" alt="">
                                        <?php endif;?>
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="<?php echo site_url('backend/profile');?>"><i class="fa fa-user"></i>Profile</a></li>
                                        <li role="presentation"><a href="<?php echo site_url('backend/comment/unpublish');?>"><i class="fa fa-comment"></i>Comments<span class="badge badge-success pull-right"><?php echo $count_comment->num_rows();?></span></a></li>
                                        <?php if($this->session->userdata('access')=='1'):?>
                                        <li role="presentation"><a href="<?php echo site_url('backend/inbox');?>"><i class="fa fa-envelope"></i>Inbox<span class="badge badge-success pull-right"><?php echo $count_inbox->num_rows();?></span></a></li>
                                        <?php endif;?>
                                        <li role="presentation" class="divider"></li>
                                        <li role="presentation"><a href="<?php echo site_url('logout');?>"><i class="fa fa-sign-out m-r-xs"></i>Log out</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('logout');?>" class="log-out waves-effect waves-button waves-classic">
                                        <span><i class="fa fa-sign-out m-r-xs"></i>Log out</span>
                                    </a>
                                </li>
                            </ul><!-- Nav -->
                        </div><!-- Top Menu -->
                    </div>
                </div>
            </div><!-- Navbar -->
            <div class="page-sidebar sidebar">
                <div class="page-sidebar-inner slimscroll">
                    <ul class="menu accordion-menu">

                        <li><a href="<?php echo site_url('backend/dashboard');?>" class="waves-effect waves-button"><span class="menu-icon icon-home"></span><p>Dashboard</p></a></li>
                        <li class="droplink"><a href="#" class="waves-effect waves-button"><span class="menu-icon icon-pin"></span><p>Post</p><span class="arrow"></span></a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo site_url('backend/post/add_new');?>">Add New</a></li>
                                <li><a href="<?php echo site_url('backend/post');?>">Post List</a></li>
                                <li><a href="<?php echo site_url('backend/category');?>">Category</a></li>
                                <li><a href="<?php echo site_url('backend/tag');?>">Tag</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('backend/comment');?>" class="waves-effect waves-button"><span class="menu-icon icon-bubbles"></span><p>Comments</p></a></li>
                        <li><a href="<?php echo site_url('backend/Profile');?>" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Profile</p></a></li>
                        <?php if($this->session->userdata('access')=='1'):?>
                        <li><a href="<?php echo site_url('backend/inbox');?>" class="waves-effect waves-button"><span class="menu-icon icon-envelope"></span><p>Inbox</p></a></li>
                        <li><a href="<?php echo site_url('backend/subscriber');?>" class="waves-effect waves-button"><span class="menu-icon icon-users"></span><p>Subscribers</p></a></li>
                        <li><a href="<?php echo site_url('backend/users');?>" class="waves-effect waves-button"><span class="menu-icon icon-user"></span><p>Users</p></a></li>
                        <li><a href="<?php echo site_url('backend/settings');?>" class="waves-effect waves-button"><span class="menu-icon icon-settings"></span><p>Settings</p></a></li>
                        <?php else:?>
                        <?php endif;?>
                        <li><a href="<?php echo site_url('logout');?>" class="waves-effect waves-button"><span class="menu-icon icon-logout"></span><p>Log Out</p></a></li>
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->