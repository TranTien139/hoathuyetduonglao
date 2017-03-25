<?php
/*
Template Name: Liên hệ
*/

get_header(); ?>
    <div id="wrapper_container">
        <div class="container">
            <div id="lienhe_page">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7 col-tn-12 space_bottom_10">
                        <div id="lienhe_map" class="width_common space_bottom_20">
                            <div class="title_box"><h3><a href="#" class="text-uppercase">BẢn đồ</a></h3></div>
                            <div class="content_box">
                                <div class="block_filter_erea">
                                    <div class="item_fillter">
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                Văn phòng Hà Nội
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                <li><a href="#">Văn phòng Hà Nội</a></li>
                                                <li><a href="#">Văn phòng HCM</a></li>
                                                <li><a href="#">Nhà máy sản xuất</a></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="mapgoogle">
                                    <div class="google-map-canvas" id="map-canvas">
                                        <script type='text/javascript' src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
                                        <script>

                                            function initialize() {
                                                var isDraggable = $(document).width() > 992 ? true : false;

                                                var mapOptions = {
                                                    center: new google.maps.LatLng(51.503454,-0.119562),
                                                    zoom: 15,
                                                    scrollwheel: false,
                                                    draggable: isDraggable,
                                                    mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };



                                                var marker = new google.maps.Marker({
                                                    position: new google.maps.LatLng(51.503454,-0.119562),
                                                    url: '/',
                                                    animation: google.maps.Animation.DROP
                                                });

                                                var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
                                                marker.setMap(map);

                                            }

                                            google.maps.event.addDomListener(window, 'load', initialize);
                                        </script>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div id="block_input_lienhe" class="width_common space_bottom_10">
                            <div class="title_box"><h3><a href="#" class="text-uppercase">Gửi liên hệ</a></h3></div>
                            <div class="content_box">
                                <div class="lead_lienhe space_bottom_20">Quý khách có nhu cầu sử dụng dịch vụ của chúng tôi vui lòng điền thông tin theo mẫu dưới đây và gửi về hòm thư của chúng tôi. Chúng tôi xử lý và phản hồi lại quý khách sớm nhất có thể. Trân trọng cảm ơn!</div>

                                <div class="main_form_input_lienhe width_common">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-tn-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Họ tên *">
                                                <span class="error">lỗi nè</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-tn-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tiêu đề *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-tn-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Số điện thoại">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Địa chỉ">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-tn-12">
                                            <div class="form-group">
                                                <textarea  class="form-control input_noidung"  placeholder="Nội dung"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tn-4">
                                            <div class="form-group text_baomat">
                                                Mã bảo mật
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tn-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-4 col-tn-4">
                                            <div class="form-group">
                                                <img src="images/graphics/img_capcha.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 col-tn-12">
                                            <div class="form-group">
                                                <button class="btn btn_site"> gửi</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 col-tn-12 space_bottom_10">
                        <div id="box_diachi_lienhe" class="space_bottom_20 width_common">
                            <div class="title_box"><h3><a href="#" class="text-uppercase">Địa chỉ liên hệ</a></h3></div>
                            <div class="content_box_video width_common">
                                <div class="item_diachi_lienhe">
                                    <div class="title_item_diachi">
                                        Văn phòng Hà Nội
                                    </div>
                                    <div class="content_item_diachi">
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-home"></i>
                                            6A/508 Đường Láng, Quận Đống Đa, Hà Nội, Việt Nam
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-phone"></i>
                                            04.35 62 5766
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-fax"></i>
                                            04.35 62 7005
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                            18006689
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-envelope"></i>
                                            <a href="#">lienhe@nhatnhat.com</a>
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-link"></i>
                                            <a href="#">www.nhatnhat.com </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_diachi_lienhe">
                                    <div class="title_item_diachi">
                                        Văn phòng TP. Hồ Chí Minh
                                    </div>
                                    <div class="content_item_diachi">
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-home"></i>
                                            194/3 Trần Huy Liệu, Phường 15, Q Phú Nhuận, Hồ Chí Minh
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-phone"></i>
                                            08.221 68 967
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-fax"></i>
                                            Fax:08.626 49 400
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                            18006689
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-envelope"></i>
                                            <a href="#">lienhe@nhatnhat.com</a>
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-link"></i>
                                            <a href="#">www.nhatnhat.com </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item_diachi_lienhe">
                                    <div class="title_item_diachi">
                                        Nhà máy sản xuất
                                    </div>
                                    <div class="content_item_diachi">
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-home"></i>
                                            Âp Bình Tiền 2, xã Đức Hòa Hạ, huyện Đức Hòa, tỉnh Long An
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-phone"></i>
                                            072.3817 117
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-fax"></i>
                                            072.3817 337
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                            18006689
                                        </div>
                                        <div class="wap_item_diachi">
                                            <i class="fa fa-envelope"></i>
                                            <a href="#">lienhe@nhatnhat.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>