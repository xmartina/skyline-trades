{$siteEmail = "info@skylinetrades.ltd"}
{$siteLogo = "images/logo.png"}
{$siteIcon = "fav.png"}
{$siteEmail = "contact@skylinetrades.ltd"}
{$sitePhone = "contact@skylinetrades.ltd"}
{$aboutUrl = "?a=about"}
{$referralUrl = "?a=affiliate"}
{$contactUrl = "?a=support"}
{$tAndCUrl = "?a=rules"}
{$resetPasswordUrl = "?a=forgot_password"}
{$loginUrl = "?a=login"}
{$signUpUrl = "?a=signup"}
{$accountUrl = "?a=account"}
{$siteName = "Skyline Trades LTD"}

<html lang="en">
<head>
    <title>{$pageName} | {$settings.site_name}</title>
    <meta charset="utf-8">

    <!-- Stylesheets -->
    <link href="home/css/bootstrap.css" rel="stylesheet">
    <link href="home/css/style.css" rel="stylesheet">
    <link href="home/css/responsive.css" rel="stylesheet">

    <!--<link rel="shortcut icon" href="images1/favicon.html" type="image/x-icon"> -->
    <link rel="icon" href="{$siteIcon}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <meta name="description" content="crypto-wealths.ltd is a Cryptocurrency Trading and assets management company based in United Kingdom. On our platform you can invest your money, get profits daily. Register today and start investing">

    <link rel="stylesheet" href="home/path/to/font-awesome/css/font-awesome.min.html">
    <link rel="stylesheet" href="home/cdn.jsdelivr.net/npm/bootstrap%405.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home/spop/sop.css">
    {literal}
    <script src="home/spop/spop.js"></script>
    {/literal}
    <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding: 0; margin: 0; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&amp;theme=dark&amp;pref_coin_id=1505&amp;invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io/" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;</div></div>

    <!-- jQuery library -->
    {literal}
    <script src="home/ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="home/ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	{/literal}

</head>

<body>
<div class="page-wrapper">

<!-- Main Header-->
<header class="main-header header-style-one">
    <!--Header Top-->
    <div class="header-top">
        <div class="auto-container clearfix">
            <div class="top-left">
                <div class="text"><a href="/"> <img class="" src="{$siteLogo}" height="100" width="180" /></a></div>
            </div>

            <div class="top-right clearfix">
                <ul class="contact-info">

                    <li><span class="icon fa fa-envelope"></span> <a href="mailto:{$siteEmail}">{$siteEmail}</a></li>
                </ul>

            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">
                <div class="pull-left logo-outer">
                    <div class="logo">

						{literal}
                        <style type="text/css">
                            <!--
                            a.gflag {vertical-align:middle;font-size:24px;padding:1px 0;background-repeat:no-repeat;background-image:url(gtranslate.net/flags/24.html);}
                            a.gflag img {border:0;}
                            a.gflag:hover {background-image:url(gtranslate.net/flags/24a.html);}
                            #goog-gt-tt {display:none !important;}
                            .goog-te-banner-frame {display:none !important;}
                            .goog-te-menu-value:hover {text-decoration:none !important;}
                            body {top:0 !important;}
                            #google_translate_element2 {display:none!important;}
                            -->
                        </style>
						{/literal}
                        <div id="google_translate_element2"></div>

                        <div class="select-language">
                            <div  id="google_translate_element"></div>
							
                            {literal}
                            <script>

                                function googleTranslateElementInit() {

                                    new google.translate.TranslateElement({

                                        pageLanguage: 'en'

                                    }, 'google_translate_element');

                                }

                            </script>
                            <script src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
							{/literal}




                        </div>
                    </div>
                    <div class="pull-right upper-right clearfix">
                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class=""></span></div>
                            <ul>
                                <li><br></li>
                            </ul>
                        </div>


                        <!--Info Box-->
                        <div class="upper-column info-box">
                            <div class="icon-box"><span class=""></span></div>
                            <ul>
                                <li><strong></strong></li>
                                <li></li>
                            </ul>
                        </div>


                        <!--Info Box-->
                        <div class="upper-column info-box btn-box {if $userinfo.logged == 1}d-none{/if}">
                            <a href="{$signUpUrl}" class="theme-btn btn-style-one"><span class="btn-title">Join Now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Header Lower-->
        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <!--Nav Box-->
                    <div class="nav-outer clearfix">
                        <a href="/"> <img class="mt-3 d-sm-none" src="{$siteLogo}" height="80" width="130" /></a>

                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="/">Home</a>

                                    </li>
                                    <li class="dropdown"><a href="{$aboutUrl}">About Us</a>

                                    </li>

                                    <li class="dropdown"><a href="{$referralUrl}">Referral</a>

                                    </li>



                                    <li class="dropdown"><a href="{$contactUrl}">Contact Us</a></li>
                                    <li class="dropdown"><a href="{$tAndCUrl}">Terms & Conditions/FAQs</a></li>

									{if $userinfo.logged == 1}
                                    <li class="dropdown"><a href="{$accountUrl}">My Account</a>
                                    {else}
                                    <li class="dropdown"><a href="{$loginUrl}">Log In</a>

                                    </li>
                                    <li class="dropdown"><a href="{$signUpUrl}">Sign Up</a></li>
									{/if}
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->


                    </div>
                </div>
            </div>
        </div>
        <!--End Header Lower-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <style>
                .sticky-menu-custom{
                	max-width:200px;
                }
                </style>
                <div class="logo pull-left">
                    <a href="/" title=""><img src="{$siteLogo}" alt="" title="" class="sticky-menu-custom"></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-close-1"></span></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="/"><img src="{$siteLogo}" alt="" title=""></a></div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-dribbble-square"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube-square"></span></a></li>
                        <li><a href="#"><span class="fa fa-envelope-square"></span></a></li>
                    </ul>
                </div>

            </nav>
        </div><!-- End Mobile Menu -->
</header>