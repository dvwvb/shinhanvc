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
                    <div class="title sh_m" data-aos="fade-down" data-aos-duration="1000">CEO Message</div>
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
                var sub_nav = "CEO Message";
                $('.sub_' + sub_nav).addClass("on");
            </script>


            <!-------------------------------------------- sub layout end -------------------------------------------->

            <!-------------------------------------------- sub content start -------------------------------------------->
            <div class="subWrap">
                <div class="sub_ct sub_01">
                    <div class="wrap">
                        <div class="title">Thank you for visiting the <span class="bb sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment</span> website.</div>
                        <div class="article clearfix">
                            <div class="imgWrap" data-aos="fade-down" data-aos-duration="800">
                                <img src="../../images/aboutUs/ceo_img.jpg" alt="Dong-hyeon Lee CEO of Shinhan Venture Investment" class="img-responsive" />
                            </div>
                            <div class="segment">
                                <div class="text">
                                    Founded in April 2000, Shinhan Venture Investment has been steadily pursuing our two goals as the development of the Korean venture industry and the fund management income in Korea and the global economy, despite the various changes in domestic and foreign economy and industrial structure, by the best professionals and differentiated value increase methods.
                                    <br />
                                    <br />
                                    Venture Capital division form venture investment associations to provide capital to start-up companies with innovative technologies and ideas, although they lack funds and provide essential management consulting for each stage of corporate growth.
                                    <br />
                                    <br />
                                    Private Equity division participate in management by acquiring a stake in the invested company through the formation of an institutional private equity fund and are actively supporting corporate restructuring innovation to increase the value and growth of invested companies.
                                    <br />
                                    <br />
                                    Shinhan Venture Investment is doing its best to become an investor that companies want to invest, to become a company that investors want to invest, to become a company that shares happiness with employees.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub_ct sub_02">
                    <div class="wrap">
                        <div class="title">
                            <span class="bb sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment</span> is one of the important investment principles.
                        </div>
                        <ul class="list-unstyled clearfix">
                            <li data-aos="fade-right" data-aos-duration="800">
                                <div class="num sh_b">01</div>
                                <div class="article">
                                    <div class="text">
                                        It does not seek short-term returns on investment
                                    </div>
                                </div>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1000">
                                <div class="num sh_b">02</div>
                                <div class="article">
                                    <div class="text">
                                        Continues to keep Win-Win partnership with invested company in long term perspective
                                    </div>
                                </div>
                            </li>
                            <li data-aos="fade-right" data-aos-duration="1200">
                                <div class="num sh_b">03</div>
                                <div class="article">
                                    <div class="text">
                                        We top priority is to satisfy LP’s needs by maximizing the value of our portfolio companies based on our teamwork and open communication with stakeholders.
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sub_ct sub_03">
                    <div class="wrap">
                        <div class="greetings_sub3_bg">
                            <div class="article clearfix">
                                <div class="segment">
                                    <div class="title sh_m">Shinhan Venture Investment</div>
                                    <div class="text">
                                        is a company with the industry's best expert group and global investment capabilities to become a more reliable partner.
                                        We will continue to develop by raising it. In addition, while adhering to honest and transparent management principles, as an investment company by creating the highest corporate value,
                                        We will fulfill my responsibilities.<br />
                                        <br />
                                        <b><span>Dong-hyeon Lee CEO of</span> <span>Shinhan Venture Investment</span></b>
                                    </div>
                                </div>
                            </div>
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