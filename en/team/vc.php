<!DOCTYPE html>
<html lang="en">

<head>

    <!--config-->
    <?php include "../_inc/config.php"; ?>
    <!--//config-->

    <link href="/css/sub.css" rel="stylesheet">
    <link href="/css/pages/team.css" rel="stylesheet">

</head>

<body class="en">

    <!-- <a href="#contents" class="skip">Skip Menu</a> -->

    <div id="bodyall">

        <!-- header -->
        <?php include "../_inc/header.php"; ?>
        <!-- //header -->

        <section class="sub">
            <!-------------------------------------------- sub layout start -------------------------------------------->


            <div class="sub_img" style="background:url('../../images/team/sub_vis03.jpg') no-repeat; background-size:cover; background-position:center center;">
                <div class="wrap">
                    <h5 class="sh_m" data-aos="fade-down" data-aos-duration="800">Team</h5>
                    <div class="title sh_m" data-aos="fade-down" data-aos-duration="1000">VC</div>
                    <ul class="list-unstyled sh_m team">
                        <li class="sub_VC">
                            <a href="vc.php" alt="VC Investment" title="VC Investment">
                                VC Investment
                            </a>
                        </li>
                        <li class="sub_PE">
                            <a href="vc.php" alt="PE Investment" title="PE Investment">
                                PE Investment
                            </a>
                        </li>
                        <li class="sub_Globalinvestment">
                            <a href="vc.php" alt="Global Investment" title="Global Investment">
                                Global Investment
                            </a>
                        </li>
                        <li class="sub_Investmentstrategy">
                            <a href="vc.php" alt="Investment Strategy" title="Investment Strategy">
                                Investment Strategy
                            </a>
                        </li>
                        <li class="sub_Riskmanagement">
                            <a href="vc.php" alt="Risk Management" title="Risk Management">
                                Risk Management
                            </a>
                        </li>
                        <li class="sub_Businesssupport">
                            <a href="vc.php" alt="Business Support" title="Business Support">
                                Business Support
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                var sub_nav = "VC";
                $('.sub_' + sub_nav).addClass("on");

                if (sub_nav == "Investment Strategy") {
                    $('.sub_Investmentstrategy').addClass("on");
                }
                if (sub_nav == "Global Investment") {
                    $('.sub_Globalinvestment').addClass("on");
                }
                if (sub_nav == "Business Support") {
                    $('.sub_Businesssupport').addClass("on");
                }
                if (sub_nav == "Risk Management") {
                    $('.sub_Riskmanagement').addClass("on");
                }
            </script>

            <!-------------------------------------------- sub layout end -------------------------------------------->
            <style>
                .sub_img ul li a::after {
                    width: 200px;
                }
            </style>
            <!-------------------------------------------- sub content start -------------------------------------------->
            <div class="subWrap">
                <div class="sub_ct sub_08">
                    <div class="wrap">
                        <div class="title">This is VC Investment center from <span class="sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment.</span>
                        </div>
                        <div class="artWrap clearfix">
                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Ho-Jun Lee</div>
                                            <div class="position">Senior Managing Director</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Ho-Jun Lee</span> <span class="nowrap">Senior Managing Director</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>Mr. Lee owns more than 10 years investment experience in multimedia and semiconductor industry<br>Prior to joining Shinhan Venture Investment, he worked at Hynix Semiconductor, KTB Network and I-one Venture Capital<br>He holds a both BA and MA in Electronic Engineering from the Korea University</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub_ct sub_08">
                    <div class="wrap">
                        <div class="title">This is VC Investment 1 center from <span class="sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment.</span>
                        </div>
                        <div class="artWrap clearfix">

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Jae Ho Cho</div>
                                            <div class="position">Managing Director</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Jae Ho Cho</span> <span class="nowrap">Managing Director / VC Investment 1 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>Mr. Cho has expertise in digital media, software/service, and industrial machinery sectors<br>Prior to joining Shinhan Venture Investment, he worked at Samsung Venture Investment Corporation, Samsung Techwin and Furex<br>He holds a BA in Mechanical Engineering from the Hanyang University and earned a MBA </p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Hyunkuk Park</div>
                                            <div class="position">General Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Hyunkuk Park</span> <span class="nowrap">General Manager / VC Investment 1 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>Mr.Park has expertise of investing in mobility, IT SW/HW and industrial machinery sectors.<br>Prior to joining Shinhan Venture Investment, he worked at Hyundai Motors and Magna Investment.<br>He holds a BA in Mechanical Engineering from Sungkyunkwan University and is a member of the Chartered Financial An</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Sunyeol Jung</div>
                                            <div class="position">Team Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Sunyeol Jung</span> <span class="nowrap">Team Manager / VC Investment 1 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>His investment focus covers lifestyle, distribution, logistics and commerce.<br>He also specializes in fund restructuring (LP secondary deals).<br>Worked at Koreaventure Investment Corp. and KB InvestmentBA in Business Administration from Chung-Ang University</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Sinae Kim</div>
                                            <div class="position">Team Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Sinae Kim</span> <span class="nowrap">Team Manager / VC Investment 1 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>He has expertise in IT hardware, software / service, retail / commerce<br>He holds a B.A in English Language and Literature from Yonsei University</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub_ct sub_08">
                    <div class="wrap">
                        <div class="title">This is VC Investment 2 center from <span class="sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment.</span>
                        </div>
                        <div class="artWrap clearfix">

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Jong Yoon Hyun</div>
                                            <div class="position">Managing Director</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Jong Yoon Hyun</span> <span class="nowrap">Managing Director / VC Investment 2 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>Mr. Hyun has expertise in general manufacturing including industrial machinery and equipment sectors<br>Prior to joining Shinhan Venture Investment, He worked at PricewaterhouseCoopers Korea<br>Mr. Hyun holds a BA in Mechanical and Aerospace Engineering from Seoul National University and is a member of the Korean Institute of Certified Public Accountants</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Joohan Park</div>
                                            <div class="position">General Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Joohan Park</span> <span class="nowrap">General Manager / VC Investment 2 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>He has expertise of investing in software/service, healthcare, and fashion/beauty industries<br>Prior to joining Shinhan Venture Investment, He worked at Doosan Infracore and Doosan HQ<br>He holds a BA in Industrial Systems Information Engineering from Korea University</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Won-Ki Hong</div>
                                            <div class="position">General Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Won-Ki Hong</span> <span class="nowrap">General Manager / VC Investment 2 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>Prior to joining Shinhan Venture Investment, he worked at IPO department of Hana Financial Investment.<br>He has expertise in contents/healthcare/IT materials and hardware.<br>He holds a MSc in Finance from The University of Edinburgh.</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Soungpil Youn</div>
                                            <div class="position">Team Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Soungpil Youn</span> <span class="nowrap">Team Manager / VC Investment 2 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>He has expertise in hardware, software, contents and fintech/blockchain.<br>He worked at NHN Investment PE division, prior to joining Shinhan Venture Investment.<br>He holds a B.S in Computer Science from Yonsei University.</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="sub_ct sub_08">
                    <div class="wrap">
                        <div class="title">This is VC Investment 3 center from <span class="sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment.</span>
                        </div>
                        <div class="artWrap clearfix">

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Sung Il Choi</div>
                                            <div class="position">Managing Director</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Sung Il Choi</span> <span class="nowrap">Managing Director / VC Investment 3 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>Mr. Choi owns more than 10 years investment experience in semiconductor, display and chemical industry<br>Prior to joining Shinhan Venture Investment, he worked at Wonik Investment Partners, Atinum Investment, SL Investment and KTB Network<br>He holds a BA in Industrial Chemistry from the Hanyang Universi</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Wonho Lee</div>
                                            <div class="position">Team Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Wonho Lee</span> <span class="nowrap">Team Manager / VC Investment 3 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>He worked at Samsung Electronics Mechatronics R&D Center.<br>He has expertise in IT material & equipment, mechanic/electric control.<br>He holds a BS in Mechanical Engineering from Sungkyunkwan University.</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="sub_ct sub_08">
                    <div class="wrap">
                        <div class="title">This is VC Investment 4 center from <span class="sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment.</span>
                        </div>
                        <div class="artWrap clearfix">

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Tae Hee Kim</div>
                                            <div class="position">Director</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Tae Hee Kim</span> <span class="nowrap">Director / VC Investment 4 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>He has expertise in bio/healthcare technology including pharmaceuticals (biologics, chemicals), medical device and so on.<br>Prior to joining Shinhan Venture Investment, he worked at KHIDI and Daekyo investment.<br>He majored in Molecular biology at KOREA Univ (BS &amp; MS)</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Jae young Lee</div>
                                            <div class="position">Team Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Jae young Lee</span> <span class="nowrap">Team Manager / VC Investment 4 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>He has expertise in bio/healthcare technology including pharmaceuticals (biologics, chemicals), medical devices and so on.<br>Prior to joining Shinhan Venture Investment, he worked at Dong-A socio holdings<br>He holds a BS in Bioinformatics from The University of Sydney and earned a MPharm from Chung-Ang </p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Ilyoung(Chloe) Jung</div>
                                            <div class="position">Team Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Ilyoung(Chloe) Jung</span> <span class="nowrap">Team Manager / VC Investment 4 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>She has expertise in biohealthcare including pharmaceuticals, medical devices and so on.<br>Prior to Shinhan Venture Investment, she worked at Beiersdorf Korea, Inje University Seoul Paik Hospital and Yuantainvestment.<br>She earned Pharm.D. and MPharm from Ewha womans university.</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="sub_ct sub_08">
                    <div class="wrap">
                        <div class="title">This is VC Investment 5 center from <span class="sh_m" style="color:#0426a0" data-aos="fade-in" data-aos-duration="800">Shinhan Venture Investment.</span>
                        </div>
                        <div class="artWrap clearfix">

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Seunghyun Kim</div>
                                            <div class="position">General Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Seunghyun Kim</span> <span class="nowrap">General Manager / VC Investment 5 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>She focuses on investments in mobile service, software and commerce.<br>Before joining Shinhan Venture Investment, she worked at Bass Investment and KAIST Venture Investment Holdings.<br>She holds a BA in Law from Korea University.</p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="article" style="color: black;">
                                <a href="javascript:void(0)" onclick="openPanel()">
                                    <div class="back_img" style="background-image: url(pic/no_pic.jpg); background-position:center center; background-size:cover;">
                                        <div class="mask60"></div>
                                        <div class="segment">
                                            <div class="name">Namgi Kim</div>
                                            <div class="position">Team Manager</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="panelWrap" style="color: black;">
                                    <div class="panel-body">
                                        <div class="top">
                                            <h5><span class="sh_l">Namgi Kim</span> <span class="nowrap">Team Manager / VC Investment 5 Center</span>
                                            </h5>
                                            <button type="button" onclick="closepanel()"></button>
                                        </div>
                                        <div class="middle">
                                            <div class="text">
                                                <p>He has expertise of investing in software/service, e-commerce and fintech Prior to joining Shinhan Venture Investment, He worked at NAVER Corporation. He holds a BA in Economics from Korea University.<br></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <script type="text/javascript" src="/js/page/team.js"></script>
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