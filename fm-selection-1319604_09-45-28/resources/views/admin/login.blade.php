<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from demo.dashboardpack.com/finance-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 04:05:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>

    <!-- <link rel="icon" href="img/favicon.png" type="image/png"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/bootstrap.min.css" />
    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/themefy_icon/themify-icons.css" />
    <!-- swiper slider CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/swiper_slider/css/swiper.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/select2/css/select2.min.css" />
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/niceselect/css/nice-select.css" />
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/owl_carousel/css/owl.carousel.css" />
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/gijgo/gijgo.min.css" />
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/tagsinput/tagsinput.css" />
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/datatable/css/buttons.dataTables.min.css" />
    <!-- text editor css -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/text_editor/summernote-bs4.css" />
    <!-- morris css -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/morris/morris.css">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{asset('admin')}}/vendors/material_icon/material-icons.css" />

    <!-- menu css  -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/metisMenu.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/style.css" />
    <link rel="stylesheet" href="{{asset('admin')}}/css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">






<section class="main_content dashboard_part">
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <!-- sign_in  -->

                                <div class="modal-content cs_modal">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Admin Log in</h5>
                                    </div>
                                    @if(session('error'))
                                    <div class="alert alert-danger m-4 text-center ml-3">
                                        {{ session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="modal-body">
                                        <form action="/admin/loginn" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter your email" name="email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" name="password">
                                            </div>
                                            <button class="btn_1 full_width text-center" type="submit">Login</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



        </div>
    </div>

<!-- footer part -->
<div class="footer_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_iner text-center">
                    <p>2020 © Influence - Designed by <a href="{{asset('admin')}}/#"> <i class="ti-heart"></i> </a><a href="{{asset('admin')}}/#"> Dashboard</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- main content part end -->

<!-- footer  -->
<!-- jquery slim -->
<script src="{{asset('admin')}}/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="{{asset('admin')}}/js/popper.min.js"></script>
<!-- bootstarp js -->
<script src="{{asset('admin')}}/js/bootstrap.min.js"></script>
<!-- sidebar menu  -->
<script src="{{asset('admin')}}/js/metisMenu.js"></script>
<!-- waypoints js -->
<script src="{{asset('admin')}}/vendors/count_up/jquery.waypoints.min.js"></script>
<!-- waypoints js -->
<script src="{{asset('admin')}}/vendors/chartlist/Chart.min.js"></script>
<!-- counterup js -->
<script src="{{asset('admin')}}/vendors/count_up/jquery.counterup.min.js"></script>
<!-- swiper slider js -->
<script src="{{asset('admin')}}/vendors/swiper_slider/js/swiper.min.js"></script>
<!-- nice select -->
<script src="{{asset('admin')}}/vendors/niceselect/js/jquery.nice-select.min.js"></script>
<!-- owl carousel -->
<script src="{{asset('admin')}}/vendors/owl_carousel/js/owl.carousel.min.js"></script>
<!-- gijgo css -->
<script src="{{asset('admin')}}/vendors/gijgo/gijgo.min.js"></script>
<!-- responsive table -->
<script src="{{asset('admin')}}/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin')}}/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="{{asset('admin')}}/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="{{asset('admin')}}/vendors/datatable/js/jszip.min.js"></script>
<script src="{{asset('admin')}}/vendors/datatable/js/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/vendors/datatable/js/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="{{asset('admin')}}/vendors/datatable/js/buttons.print.min.js"></script>

<script src="{{asset('admin')}}/js/chart.min.js"></script>
<!-- progressbar js -->
<script src="{{asset('admin')}}/vendors/progressbar/jquery.barfiller.js"></script>
<!-- tag input -->
<script src="{{asset('admin')}}/vendors/tagsinput/tagsinput.js"></script>
<!-- text editor js -->
<script src="{{asset('admin')}}/vendors/text_editor/summernote-bs4.js"></script>


<!-- custom js -->
<script src="{{asset('admin')}}/js/custom.js"></script>

<!-- active_chart js -->
<!-- <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') {?> -->
<script src="{{asset('admin')}}/js/active_chart.js"></script>
<!-- <?php }?> -->

</body>

<!-- Mirrored from demo.dashboardpack.com/finance-html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Oct 2021 04:05:27 GMT -->
</html>
