<!DOCTYPE html>
<html lang="en">

<head>

    <!-- config -->
    <?php include "../_inc/config.php"; ?>
    <!-- //config -->

    <link href="/css/sub.css" rel="stylesheet">
    <link href="/css/pages/aboutUs.css" rel="stylesheet">
</head>

<body class="en">
    <!-- <a href="#contents" class="skip">Skip Menu</a> -->
    <div id="bodyall">

        <!-- header -->
        <?php include "../_inc/header.php"; ?>
        <!-- //header -->

        <section class="sub">
            <!-------------------------------------------- sub layout start -------------------------------------------->
            <div class="sub_img" style="background:url('../../images/aboutUs/suv_vis01.jpg') no-repeat; background-size:cover; background-position:center center;">
                <div class="wrap">
                    <h5 class="sh_m" data-aos="fade-down" data-aos-duration="800">About Us</h5>
                    <div class="title sh_m" data-aos="fade-down" data-aos-duration="1000">Contact</div>
                    <ul class="list-unstyled sh_m">
                        <li class="sub_Greetings">
                            <a href="greetings.php" alt="CEO Message" title="CEO Message">
                                CEO Message
                            </a>
                        </li>
                        <li class="sub_Organization">
                            <a href="organization.php" alt="Organization" title="Organization">
                                Organization
                            </a>
                        </li>
                        <li class="sub_History">
                            <a href="history.php" alt="History" title="History">
                                History
                            </a>
                        </li>
                        <li class="sub_Contactus">
                            <a href="contactus.php" alt="Contact" title="Contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                var sub_nav = "Contact";
                $('.sub_' + sub_nav).addClass("on");
            </script>


            <!-------------------------------------------- sub layout end -------------------------------------------->

            <!-------------------------------------------- sub content start -------------------------------------------->
            <div class="subWrap">
                <div class="sub_ct sub_05">
                    <div class="wrap">
                        <div class="title">Customer growth! <span class="nowrap"><span class="sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment</span> will join you.</span></div>
                        <div class="map" id="map"></div>
                        <div class="artWrap clearfix">
                            <div class="article" data-aos="fade-right" data-aos-duration="800">
                                <div class="subject sh_m">ADDRESS</div>
                                <ul class="list-unstyled">
                                    <li><span>06181</span> <span>18F Glass Tower Bldg 534 Teheran-ro Gangnam-gu Seoul Korea</span></li>
                                </ul>
                            </div>
                            <div class="article" data-aos="fade-right" data-aos-duration="1000">
                                <div class="subject sh_m">CONTACT</div>
                                <ul class="list-unstyled">
                                    <li>Tel : 82-2-560-9700 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Fax : 82-2-560-9701</li>
                                    <!-- <li>E-mail : webmaster@shinhanvc.com</li> -->
                                </ul>
                            </div>
                            <div class="article" data-aos="fade-right" data-aos-duration="1200">
                                <div class="subject sh_m">SUBWAY</div>
                                <ul class="list-unstyled en_list">
                                    <li><span>Line two</span> <span>Samseong Station Exit 3 (1 minute walk)</span></li>
                                    <li><span>Line nine</span> <span>Bongeunsa Station Exit 7 (10 minutes walk)</span></li>
                                </ul>
                            </div>
                            <div class="article" data-aos="fade-right" data-aos-duration="1400">
                                <div class="subject sh_m">BUS</div>
                                <ul class="list-unstyled en_list">
                                    <li><span>Blue bus</span> <span>401, 146, 333, 341, 360, N13, N61</span></li>
                                    <li><span>Green bus</span> <span>2416, 3425, 4318, 4419</span></li>
                                    <li><span>Town bus</span> <span>Gangnam01, Gangnam06, Gangnam07</span></li>
                                    <li><span>Rapid bus</span> <span>M6450</span></li>
                                    <li><span>Direct seat bus</span> <span>1100, 1700, 2000, 7007, 9303, 2000-1, 8001</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function initMap() {
                    var myLatLng = {
                        lat: 37.508036,
                        lng: 127.062792
                    };
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 17,
                        center: myLatLng
                    });
                    var contentString = '<div>' +
                        '<img src="../../images/main/logo_en.png" alt="logo" style="height:31.2px"></h2>' +
                        '</div>';
                    var infowindow = new google.maps.InfoWindow({
                        content: contentString
                    });
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: 'Shinhan Venture Investment'
                    });
                    infowindow.open(map, marker);
                }
            </script>
            <script src="https://maps.google.co.kr/maps/api/js?key=AIzaSyBP8PKHnrtJujIPJYMObhR68a-HUEsxXmE&amp;v=3&amp;language=ko&amp;callback=initMap" async defer></script>
            <!-------------------------------------------- sub content end -------------------------------------------->

        </section>

        <!-- footer -->
        <?php include "../_inc/footer.php"; ?>
        <!-- //footer -->

    </div>

    <script type="text/javascript" src="../../js/base.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>