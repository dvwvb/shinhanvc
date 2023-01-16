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

        <section class="sub" id="contents">
            <!-------------------------------------------- sub layout start -------------------------------------------->
            <div class="sub_img" style="background:url('../../images/aboutUs/suv_vis01.jpg') no-repeat; background-size:cover; background-position:center center;">
                <div class="wrap">
                    <h5 class="sh_m" data-aos="fade-down" data-aos-duration="800">About Us</h5>
                    <div class="title sh_m" data-aos="fade-down" data-aos-duration="1000">Organization</div>
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
                var sub_nav = "Organization";
                $('.sub_' + sub_nav).addClass("on");
            </script>


            <!-------------------------------------------- sub layout end -------------------------------------------->

            <!-------------------------------------------- sub content start -------------------------------------------->
            <div class="subWrap">
                <div class="sub_ct sub_01">
                    <div class="wrap">
                        <div class="title">This is an organization chart of <span class="bb sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment.</span></div>
                        <div class="organization">
                            <img src="../../images/aboutUs/organization_img_en.png" alt="Organization Chart" class="img-responsive" />
                        </div>
                    </div>
                </div>
            </div>
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