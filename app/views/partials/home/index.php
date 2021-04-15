<?php 
$page_id = null;
$comp_model = new SharedController;
$current_page = $this->set_current_page_link();
?>
<div>
    <div  class="bg-light p-3 mb-3">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 comp-grid">
                    <h4 ><!DOCTYPE html>
                        <html>
                            <head>
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                    <style>
                                        .alert {
                                        padding: 20px;
                                        background-color: #f44336;
                                        color: white;
                                        opacity: 1;
                                        transition: opacity 0.6s;
                                        margin-bottom: 15px;
                                        }
                                        .alert.success {background-color: #4CAF50;}
                                        .alert.info {background-color: #2196F3;}
                                        .alert.warning {background-color: #ff9800;}
                                        .closebtn {
                                        margin-left: 15px;
                                        color: white;
                                        font-weight: bold;
                                        float: right;
                                        font-size: 22px;
                                        line-height: 20px;
                                        cursor: pointer;
                                        transition: 0.3s;
                                        }
                                        .closebtn:hover {
                                        color: black;
                                        }
                                    </style>
                                </head>
                                <body>
                                    <div class="alert success">
                                        <span class="closebtn">&times;</span>  
                                        <strong>Success!</strong> Wishing you and yours some well-deserved downtime and a very happy new year to come. Cheers to health, happiness, and prosperity in 2021! Wishing you and yours a safe, healthy, and prosperous new year! Wishing you and yours a happy, healthy, and abundant 2021!.
                                    </div>
                                    <script>
                                        var close = document.getElementsByClassName("closebtn");
                                        var i;
                                        for (i = 0; i < close.length; i++) {
                                        close[i].onclick = function(){
                                        var div = this.parentElement;
                                        div.style.opacity = "0";
                                        setTimeout(function(){ div.style.display = "none"; }, 600);
                                        }
                                        }
                                    </script>
                                </body>
                            </html></h4>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_users();  ?>
                            <a class="animated rubberBand record-count alert alert-primary"  href="<?php print_link("users/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-user-times fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Users</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_accounts();  ?>
                            <a class="animated shake record-count card bg-danger text-white"  href="<?php print_link("accounts/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-diamond fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Accounts</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_announcement();  ?>
                            <a class="animated rubberBand record-count alert alert-primary"  href="<?php print_link("announcement/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-arrow-circle-up fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Announcement</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_event();  ?>
                            <a class="animated swing record-count alert alert-info"  href="<?php print_link("event/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-bell fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Event</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_visitorbook();  ?>
                            <a class="animated zoomIn record-count alert alert-warning"  href="<?php print_link("visitorbook/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-tripadvisor fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Visitorbook</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_giving();  ?>
                            <a class="animated rubberBand record-count card bg-warning text-white"  href="<?php print_link("giving/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-navicon fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Giving</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_offering();  ?>
                            <a class="animated rubberBand record-count card bg-success text-white"  href="<?php print_link("offering/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-binoculars fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Offering</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_members();  ?>
                            <a class="animated wobble record-count card bg-success text-white"  href="<?php print_link("members/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-male fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Members</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_teens();  ?>
                            <a class="animated wobble record-count card bg-success text-white"  href="<?php print_link("teens/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-child fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Teens</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_tithe();  ?>
                            <a class="animated zoomIn record-count alert alert-warning"  href="<?php print_link("tithe/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-money fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Tithe</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_prayer();  ?>
                            <a class="animated rubberBand record-count alert alert-primary"  href="<?php print_link("prayer/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-check-circle fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Prayer</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-4 comp-grid">
                            <?php $rec_count = $comp_model->getcount_message();  ?>
                            <a class="animated rubberBand record-count card bg-danger text-white"  href="<?php print_link("message/") ?>">
                                <div class="row">
                                    <div class="col-2">
                                        <i class="fa fa-book fa-4x"></i>
                                    </div>
                                    <div class="col-10">
                                        <div class="flex-column justify-content align-center">
                                            <div class="title">Message</div>
                                            <small class=""></small>
                                        </div>
                                    </div>
                                    <h4 class="value"><strong><?php echo $rec_count; ?></strong></h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
