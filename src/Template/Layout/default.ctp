<!DOCTYPE html>
<html lang="en">

    <head>
        <title>CEDP | <?= $this->fetch('title') ?></title>
        <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 10]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Phoenixcoded" />
        <!-- Favicon icon -->
        <link rel="icon" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/images/favicon.ico" type="image/x-icon">
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <!-- waves.css -->
        <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
        <!-- feather icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/icon/feather/css/feather.css">
        <!-- Required Fremwork -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/bootstrap/css/bootstrap.min.css">

        <!-- multiselect -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/bootstrap/css/bootstrap-multiselect.css">

        <!-- themify-icons line icon -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/icon/themify-icons/themify-icons.css">
        <!-- ico font -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/icon/icofont/css/icofont.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- Data Table Css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/data-table/css/buttons.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
        <!-- animation nifty modal window effects css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/css/component.css">

        <!-- sweet alert framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/sweetalert/css/sweetalert.css">

        <!-- datepicker -->

        <!-- jquery -->

        <!-- jpro forms css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/j-pro/css/demo.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/j-pro/css/j-forms.css">

        <!-- Treeview css -->
        <!--        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>jstree/css/style.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/treeview/treeview.css">-->


        <!-- Style.css -->
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/css/style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/css/pages.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/css/widget.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>css/cedp_style.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>jsTree/themes/style.min.css">


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

        <!-- C3 chart -->
        <!--<link rel="stylesheet" href="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/c3/css/c3.css" type="text/css" media="all">-->

        <style>
            fieldset.scheduler-border {
                border: solid 1px #DDD !important;
                padding: 0 10px 10px 10px;
                border-bottom: none;
                margin-bottom: 10px;
            }

            legend.scheduler-border {
                width: auto !important;
                border: none;
                font-size: 14px;
                color: white;
                font-weight: bold;
                border: 1px lightgray;
                background: #448aff;
                border-radius: 2px;
                padding-left: 5px;
                padding-right: 5px;
            }
        </style>
<!--        <script>
            var csrfToken = <?= json_encode($this->request->getParam('_csrfToken')) ?>;
            // ...
        </script>-->
        <script>
            $(document).ready(function() {
                $(".zebradate").Zebra_DatePicker({
                    direction: [true, true],
                    format:'d-m-Y'

                });

                $('.Zebra_DatePicker_Icon_Wrapper').css('width','100%');
                $('.Zebra_DatePicker_Icon').css('top','8px');

                $( "#styleSelector" ).hide();
            });
        </script>
    </head>
    <!-- Custom js -->
    <!--<script type="text/javascript" src="<?php echo $this->request->webroot; ?>Scripts/custom.js"></script>-->
    <body>
        <div id="wait">

        </div>
        <!-- [ Pre-loader ] start -->
        <div class="loader-bg">
            <div class="loader-bar"></div>
        </div>
        <!-- [ Pre-loader ] end -->
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                <!-- [ Header ] start -->
                <nav class="navbar header-navbar pcoded-header">
                    <div class="navbar-wrapper">
                        <div class="navbar-logo " style="width:70%;padding-left:17%">
                            <ul class="nav-right">
                                <li>
                                    <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                                        <i class="feather icon-toggle-right"></i>
                                    </a>
                                </li>
                            </ul>
                            <a href="/Admins/dashboard" class="pull-right">
                                <img class="img-fluid" src="<?php echo $this->request->webroot; ?>img/cedp.png" alt="Theme-Logo" style="height: 53px;"/>
                                <span>College Education Development Project (CEDP)</span>
                            </a>
                            <a class="mobile-options waves-effect waves-light">
                                <i class="feather icon-more-horizontal"></i>
                            </a>
                        </div>
                        <div class="navbar-container container-fluid">
                            <ul class="nav-right">
                                <li class="header-notification">

                                    <a href="">
                                        <div class="dropdown-primary dropdown">
                                            <div class="dropdown-toggle" data-toggle="dropdown">
                                                <i class="feather icon-bell"></i>
                                                <span class="badge bg-c-red"></span>
                                            </div>
                                        </div>

                                    </a>

                                </li>
                                <!--li class="header-notification">
<div class="dropdown-primary dropdown">
<div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
<i class="feather icon-message-square"></i>
<span class="badge bg-c-green">0</span>
</div>
</div>
</li-->
                                <li class="user-profile header-notification">
                                    <div class="dropdown-primary dropdown">
                                        <div class="dropdown-toggle" data-toggle="dropdown">


                                            <img src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/images/noimage.png" class="img-radius" alt="User-Profile-Image">


                                            <span></span>
                                            <i class="feather icon-chevron-down"></i>
                                        </div>
                                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                            <li>
                                                <a href="">
                                                    <i class="feather icon-lock"></i> Change Password
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/cedp/login/index"> <i class="feather icon-log-out"></i>Log off</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <!-- [ Header ] end -->
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        <!-- [ navigation menu ] start -->
                        <nav class="pcoded-navbar">
                            <div class="pcoded-inner-navbar">
                                <?php echo $this->element('top_menu'); ?>
                            </div>
                        </nav>
                        <!-- [ navigation menu ] end -->
                        <div class="pcoded-content">
                            <!-- [ breadcrumb ] start -->
                            <div class="page-header" style="padding-bottom: 0px !important;">
                                <div class="page-block">
                                    <div class="row align-items-center">
                                        <div class="col-md-8">
                                            <div class="page-header-title">
                                                <h4 class="m-b-10"></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- [ breadcrumb ] end -->
                            <div class="pcoded-inner-content">
                                <!-- Main-body start -->
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <!-- Page-body start -->
                                        <div id="page-body" class="page-body">

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <!-- Zero config.table start -->
                                                    <div class="card">
                                                        <div class="card-header text-center head-color">
                                                            <div class="card-title"><?php if(isset($page_title)) echo $page_title; ?></div>
                                                        </div>
                                                        <div class="card-block card-padding">
                                                            <?php echo $this->element('content'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Page-body end -->
                                    </div>
                                </div>
                                <!-- Main-body end -->
                                <!-- <div id="styleSelector">

</div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 







    </body>

</html>


<!-- Required Jquery -->

<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<!-- multiselect-->
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/bootstrap/js/bootstrap-multiselect.js"></script>



<!-- waves js -->
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- data-table js -->
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- sweet alert js -->
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/sweetalert/js/sweetalert.min.js"></script>

<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/js/classie.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/js/modalEffects.js"></script>

<!-- Validation js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>

<!-- Tree view js -->

<!--<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/treeview/jquery.tree.js"></script>-->

<!-- Custom js -->

<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/js/pcoded.min.js"></script>
<!--<script src="<?php// echo $this->request->webroot; ?>AbleProTheme/files/assets/js/vertical/vertical-layout.min.js"></script>-->
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/js/script.js"></script>



<script src="<?php echo $this->request->webroot; ?>jsTree/jstree.min.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>Scripts/Zebra_Datepicker/dist/css/metallic/zebra_datepicker.min.css">
<script type="text/javascript" src="<?php echo $this->request->webroot; ?>Scripts/Zebra_Datepicker/dist/zebra_datepicker.min.js"></script>

<!--<script type="text/javascript" src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/dashboard/custom-dashboard.min.js"></script>-->
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/js/vertical/horizontal-layout.min.js"></script>
<!--<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/js/vertical/menu/menu-hori-fixed.js"></script>-->


<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/d3/js/d3.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/bower_components/c3/js/c3.js"></script>
<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Custom js -->
<!--<script src="<?php echo $this->request->webroot; ?>AbleProTheme/files/assets/pages/chart/c3/c3-custom-chart.js"></script>-->

<script src="<?php echo $this->request->webroot; ?>Scripts/pd/Chart.js"></script>
<script src="<?php echo $this->request->webroot; ?>Scripts/pd/chart-pie-demo.js"></script>
<?php
if (isset($user_script))
{
    echo '<script src="'.$this->request->webroot . $user_script . '"></script>';
}