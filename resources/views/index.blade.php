<!--Author: Template Stock
Author URL: http://templatestock.co
-->
<!DOCTYPE html>
<html>
<head>
    <title>Above Free Responsive Template | Template Stock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
        window.fbAsyncInit = function() {
            FB.init({
                appId            : '912333495590130',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v2.11'
            });
        };
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body>
<div class="header" id="head">
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="index.html"><img src="{{asset('images/logo.jpg')}}" style="width: 100px"/></a>
            </div>
            <div class="top-menu">
                <span class="menu"> </span>
                <ul>
                    <nav class="cl-effect-5">
                        <li><a class="active" href="index.html"><span data-hover="Home">Trang chủ</span></a></li>
                        <li><a href="#about" class="scroll"><span data-hover="about">Giới thiệu</span></a></li>
                        <li><a href="#work" class="scroll"><span data-hover="work"><span>Dịch vụ</span></a></li>
                        <li><a href="#contact" class="scroll"><span data-hover="contact">Liên hệ</span></a></li>
                        <li><a href="#contact" class="scroll"><span data-hover="contact">Liên hệ</span></a></li>
                    </nav>
                </ul>
            </div>
            <!--script-nav-->
            <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle("slow" , function(){
                    });
                });
            </script>
            <div class="clearfix"></div>
        </div>
        <div class="index-banner">
            <div class="wmuSlider example1">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="banner_center">
                                <h1>hello world,</h1>
                                <h2>i am <span>graphic & web designer</span></h2>
                                <h2>from morocco</h2>
                            </div>
                        </div>
                    </article>
                    <article style="position: relative; width: 100%; opacity: 1;">
                        <div class="banner-wrap">
                            <div class="banner_center">
                                <h1>Content here,</h1>
                                <h2>Lorem <span>graphic &  designer</span></h2>
                                <h2>Contrary</h2>
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="banner_center">
                                <h1>Lorem Ipsum ,</h1>
                                <h2>Contrary to <span>&  designer</span></h2>
                                <h2>reproduced below</h2>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
            <script src="{{asset('js/jquery.wmuSlider.js')}}"></script>
            <script>
                $('.example1').wmuSlider();
            </script>
        </div>
    </div>
</div>
<div class="content">
    <div class="about-section" id="about" id="about">
        <div class="container">
            <div class="about-header">
                <h3>CHÀO MỪNG QUÝ  KHÁCH HÀNG & CÁC BẠN ĐẾN VỚI CÔNG TY CP ĐẦU TƯ PHÁT TRIỂN ĐẤT VIỆT</h3>
                <div class="about-text">
                    <p>Công ty chúng tôi là đơn vị  hàng đầu trong lĩnh vực Môi giới mua - bán, cho thuê & xây dựng Bất động sản trên toàn Hà Nội. Với đội ngũ nhân viên chuyên nghiệp và quản lý giàu kinh nghiệm, năng động cùng thị trường rộng lớn, chúng tôi khẳng định sẽ mang tới giá trị tốt nhất cho khách hàng theo đúng phương châm: “TRAO GIÁ TRỊ - NHẬN NIỀM TIN”.</p>
                    <p>Rất mong được sự tin ưu và ủng hộ của quý Khách hàng và các bạn. Trân trọng cảm ơn!</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="about-sectiongrids">
                <div class="col-md-6 about-leftgrid">
                    <div class="polls">
                        <div class="poll">
                            <div class="poll-desc">
                                <h4>Tầm nhìn</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="skills">
                            <div style="width:75%; height: 2px"> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 about-rightgrid">
                    <div class="polls">
                        <div class="poll">
                            <div class="poll-desc">
                                <h4>Sứ mệnh</h4>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="skills">
                            <div style="width:75%; height: 2px"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="arrow1">
                <a href="#work" class="scroll"><img src="images/arrow1.png" alt=""/></a>
            </div>
        </div>
    </div>
    <!-- about-section-ends -->
    <div class="works-section" id="work" id="work">
        <div class="works-header">
            <h3>Các sản phẩm nhà đất mà có thể bạn quan tâm</h3>
            <p>Đất Việt chúng tôi cung cấp cho các bạn giải pháp về nhà ở, mặt bằng kinh doanh, và nhiều danh mục khác</p>
        </div>
        <div class="portfolio-section-bottom-row" id="portfolio">
            <div class="container">

                <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                    $(document).ready(function () {
                        $('#horizontalTab').easyResponsiveTabs({
                            type: 'default', //Types: default, vertical, accordion
                            width: 'auto', //auto or any width like 600px
                            fit: true   // 100% fit in a container
                        });
                    });

                </script>
                <link rel="stylesheet" href="css/swipebox.css">
                <script src="js/jquery.swipebox.min.js"></script>
                <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
                </script>
                <!-- Portfolio Ends Here -->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Tổng quan</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Cho thuê mặt bằng kinh doanh</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Mua bán nhà đất</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>Cho thuê nhà ở</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-4" role="tab"><span>Biệt thự liền kề</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <div id="portfoliolist">
                            <div class="resp-tabs-container">
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                    <div class="tab_img">
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="" class="swipebox"  title="hung cư cao cấp">
                                                <img src="{{asset('images/nha1.jpeg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-2.jpg" class="swipebox"  title="Mặt tiền kinh doanh">
                                                <img src="{{asset('images/nha2.jpeg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-3.jpg" class="swipebox"  title="Chung cư cao cấp">
                                                <img src="{{asset('images/nha3.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-4.jpg" class="swipebox"  title="Chung cư mini">
                                                <img src="{{asset('images/nha7.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-5.jpg" class="swipebox"  title="Biệt thự liền kề">
                                                <img src="{{asset('images/bietthu1.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-6.jpg" class="swipebox"  title="Biệt thự liền kề">
                                                <img src="{{asset('images/bietthu2.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-7.jpg" class="swipebox"  title="Mặt bằng kinh doanh">
                                                <img src="{{asset('images/matbang1.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-8.jpg" class="swipebox"  title="Mặt bằng kinh doanh">
                                                <img src="{{asset('images/matbang2.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                                    <div class="tab_img">
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-5.jpg" class="swipebox"  title="Mặt tiền kinh doanh">
                                                <img src="{{asset('images/matbang4.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-6.jpg" class="swipebox"  title="Mặt tiền kinh doanh">
                                                <img src="{{asset('images/matbang1.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-7.jpg" class="swipebox"  title="Mặt tiền kinh doanh">
                                                <img src="{{asset('images/matbang2.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-8.jpg" class="swipebox"  title="Mặt tiền kinh doanh">
                                                <img src="{{asset('images/matbang3.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">

                                    <div class="tab_img">
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/matbang4.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-3.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/matbang4.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-4.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/matbang4.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
                                    <div class="tab_img">
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/nha4.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/nha5.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/nha6.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/nha7.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-4">
                                    <div class="tab_img">
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-1.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/bietthu1.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/bietthu2.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/bietthu3.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-2.jpg" class="swipebox"  title="Image Title">
                                                <img src="{{asset('images/bietthu4.jpg')}}" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="arrow">
                    <a href="#services" class="scroll"><img src="images/arrow.png" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio-section-ends -->
    <div class="services-section" id="services">
        <div class="container">
            <div class="services-header">
                <h3>Dịch vụ</h3>
                <p>Chúng tôi mang đến nhiều sự lựa chọn trong lĩnh vực bất động sản cho bạn có thể tùy chọn theo mục đích của bản thân</p>
            </div>
            <div class="services-sectiongrids">
                <div class="col-md-2 services-grid">
                    <img src="images/img2.png" alt=""/>
                    <h4>Sutido</h4>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>
                <div class="col-md-2 services-grid">
                    <img src="images/img2.png" alt=""/>
                    <h4>1 phòng ngủ</h4>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>
                <div class="col-md-2 services-grid">
                    <img src="images/img2.png" alt=""/>
                    <h4>1 khách 1 ngủ</h4>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>
                <div class="col-md-2 services-grid">
                    <img src="images/img2.png" alt=""/>
                    <h4>2 Phòng ngủ</h4>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>
                <div class="col-md-2 services-grid">
                    <img src="images/img3.png" alt=""/>
                    <h4>Nhà đất</h4>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>
                <div class="col-md-2 services-grid">
                    <img src="images/img1.png" alt=""/>
                    <h4>Biệt thự liền kề</h4>
                    <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</p>
                </div>

                <div class="clearfix"></div>
                <div class="arrow1">
                    <a href="#contact" class="scroll"><img src="images/arrow1.png" alt=""/></a>
                </div>
            </div>
        </div>
    </div>
    <!-- services-section-ends -->
</div>
<div class="footer-section" id="contact" id="contact">
    <div class="container">
        <div class="contact-header">
            <h3> Liên hệ</h3>
            <p>Liên hệ với chúng tôi</p>
        </div>
        <div class="social-icon">
            <a href="#"><i class="icon1"></i></a>
            <a href="#"><i class="icon2"></i></a>
            <a href="#"><i class="icon3"></i></a>
            <a href="#"><i class="icon4"></i></a>
            <a href="#"><i class="icon5"></i></a>
            <a href="#"><i class="icon6"></i></a>
            <a href="#"><i class="icon7"></i></a>
            <a href="#"><i class="icon8"></i></a>
        </div>
        <div class="contact">
            <form>
                <div class="col-md-4 contactgrid">
                    <input type="text" class="text" value=" name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' name';}">
                </div>
                <div class="col-md-4 contactgrid">
                    <input type="text" class="text" value="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}">
                </div>
                <div class="col-md-4 contactgrid">
                    <input type="text" class="text" value="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'phone';}">
                </div>
                <div class="col-md-8 contactgrid1">
                    <textarea onfocus="if(this.value == 'Your Message') this.value='';" onblur="if(this.value == '') this.value='Your Message';" >Your Message</textarea>
                </div>
                <div class="col-md-4 contactgrid2">
                    <input type="submit" value="[send message]">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="footer-bottom">

            <p>&copy; 2015 Onepage . All rights  Reserved | Template by<a href="http://templatestock.com" target="target_blank">Template Stock</a></p>

        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                var defaults = {
                      containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                 };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>

</div>
</div>
<div class="fb-customerchat"
     page_id="100008303821397"
     theme_color="#459645"
     logged_in_greeting="Hi! How can we help you?"
     logged_out_greeting="GoodBye!... Hope to see you soon."
     minimized="false">
</div>


</body>
</html>
