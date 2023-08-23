<?php /* Smarty version 3.1.27, created on 2023-08-05 13:58:25
         compiled from "/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/auth_footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12155490064ce55812e87b6_15960200%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5b273b2a5b4866f2096ff4cf37f3255834819a1' => 
    array (
      0 => '/home/skylinet/domains/app.skylinetrades.ltd/public_html/tmpl/auth_footer.tpl',
      1 => 1685665889,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12155490064ce55812e87b6_15960200',
  'variables' => 
  array (
    'siteLogo' => 0,
    'aboutUrl' => 0,
    'contactUrl' => 0,
    'loginUrl' => 0,
    'signUpUrl' => 0,
    'siteEmail' => 0,
    'tAndCUrl' => 0,
    'appName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64ce558132d978_67190576',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64ce558132d978_67190576')) {
function content_64ce558132d978_67190576 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/skylinet/domains/app.skylinetrades.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '12155490064ce55812e87b6_15960200';
$_smarty_tpl->tpl_vars['appName'] = new Smarty_Variable("Easycrypto Trading LTD", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteEmail'] = new Smarty_Variable("info@easycryptotrading.ltd", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteLogo'] = new Smarty_Variable("images/logo.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteIcon'] = new Smarty_Variable("fav.png", null, 0);?>
<?php $_smarty_tpl->tpl_vars['siteEmail'] = new Smarty_Variable("info@easycryptotrading.ltd", null, 0);?>
<?php $_smarty_tpl->tpl_vars['sitePhone'] = new Smarty_Variable("contact@easycryptotrading.ltd", null, 0);?>
<?php $_smarty_tpl->tpl_vars['aboutUrl'] = new Smarty_Variable("?a=about", null, 0);?>
<?php $_smarty_tpl->tpl_vars['referralUrl'] = new Smarty_Variable("?a=affiliate", null, 0);?>
<?php $_smarty_tpl->tpl_vars['contactUrl'] = new Smarty_Variable("?a=support", null, 0);?>
<?php $_smarty_tpl->tpl_vars['tAndCUrl'] = new Smarty_Variable("?a=rules", null, 0);?>
<?php $_smarty_tpl->tpl_vars['resetPasswordUrl'] = new Smarty_Variable("?a=forgot_password", null, 0);?>
<?php $_smarty_tpl->tpl_vars['loginUrl'] = new Smarty_Variable("?a=login", null, 0);?>
<?php $_smarty_tpl->tpl_vars['signUpUrl'] = new Smarty_Variable("?a=signup", null, 0);?>
    <!--
    </section>
    End Clients Section-->
    <!-- Main Footer -->
    <footer class="main-footer ">
        <!--Widgets Section-->
        <div class="widgets-section" style="background-image: url(home/images1/background/2.jpg);">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-8 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">

                                    <div class="text">
                                        <img class="mt-1" src="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteLogo']->value);?>
" height="100" width="180" />
                                    </div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <h2 class="widget-title">Links</h2>
                                    <ul class="user-links">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['aboutUrl']->value);?>
">About</a></li>
                                        <li><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['contactUrl']->value);?>
">Contact</a></li>
                                        <li><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['loginUrl']->value);?>
">Login</a></li>
                                        <li><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
">Register</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">


                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Contact Us</h2>
                                    <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list">


                                            <li>
                                                <span class="icon flaticon-worldwide"></span>
                                                <div class="text"></div>
                                            </li>

                                            <li>
                                                <span class="icon flaticon-mails"></span>
                                                <div class="text"><a href="#"></a><br><a href="mailto:<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteEmail']->value);?>
"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteEmail']->value);?>
</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
        <div class="footer-bottom">
            <!-- Scroll To Top -->
            <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="footer-nav">
                        <ul class="clearfix">
                            <li><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['tAndCUrl']->value);?>
">Terms & Conditions</a></li>

                        </ul>
                    </div>

                    <div class="copyright-text">
                        <p>2022 © All Rights Reserved by <a href="/"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['appName']->value);?>
</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
	
    <?php echo '<script'; ?>
 src="/home/js/jquery.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/js/popper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/js/jquery.fancybox.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/js/owl.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/js/wow.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/js/appear.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/js/scrollbar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/home/js/script.js"><?php echo '</script'; ?>
>



    <?php echo '<script'; ?>
>
        function btc() {
            var btc = "https://api.blockcypher.com/v1/btc/main/txs";
            $.get(btc, function(data) {

                data.forEach(function(item) {
                    const amount = item.total / 100000000;
                    const link = "https://www.blockchain.com/btc/tx/" + item.hash;
                    const date = new Date(item.received);
                    date1 = date.toJSON().split("T")[0];
                    $("#wdepo").remove();

                    const tr = `<tr class="w3-center w3-tiny w3-hover-opacity ">
                            <td><img src="cssjs/50.html"></td>
                            <td>${date1}</td>
                            <td>${amount}<i class="icofont-bitcoin"></i></td>
                            <td><div title="${item.outputs[0].addresses[0]}" style="width:50px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap">
                            ${item.outputs[0].addresses[0]}
                            </div>
                            </td>
                            <td ><a href='${link}' style="text-decoration:none;font-size:xx-small;color:blue;" class="w3-center w3-hover-text-white " target="_blank">View on Blockchain</td>
                        </tr>`;


                    $("#deposit").append(tr);

                });
            });

        }

        function btc1() {
            var btc1 = "https://api.blockcypher.com/v1/btc/main/txs";
            $.get(btc1, function(data) {
                data.forEach(function(item) {
                    const amount = item.total / 100000000;
                    const link = "https://www.blockchain.com/btc/tx/" + item.hash;
                    const date = new Date(item.received);
                    date1 = date.toJSON().split("T")[0];
                    $("#wimage").remove();

                    const tr = `<tr class="w3-center w3-tiny w3-hover-opacity ">
                            <td><img src="cssjs/50.html"></td>
                            <td>${date1}</td>
                            <td>${amount}<i class="icofont-bitcoin"></i></td>
                            <td><div title="${item.inputs[0].addresses[0]}" style="width:50px;text-overflow: ellipsis;overflow: hidden;white-space: nowrap">
                            ${item.inputs[0].addresses[0]}
                            </div>
                            </td>
                            <td ><a href='${link}' style="text-decoration:none;font-size:xx-small;color:blue;" class="w3-center w3-hover-text-white " target="_blank">View on Blockchain</td>
                        </tr>`;


                    $("#withdraw").append(tr);

                });
            });

        }





        setTimeout(btc, 500);
        setTimeout(btc1, 5000);
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        var country_list = ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla", "Antigua & Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Belarus", "Belgium",  "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burundi", "Cambodia", "Cameroon", "Cape Verde", "Chad", "Chile", "China", "Colombia", "Congo", "Costa Rica", "Cote D Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Estonia", "Ethiopia", "Falkland Islands", "Faroe Islands","Finland", "France", "French Polynesia", "French West Indies", "Gabon", "Gambia", "Georgia", "Germany", "Gibraltar", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jersey", "Jordan", "Kazakhstan", "Kenya", "Kuwait",  "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Mauritania", "Mauritius", "Mexico", "Moldova", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco", "Mozambique", "Namibia", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Norway", "Oman", "Pakistan", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Pierre & Miquelon",  "San Marino", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "South Africa", "South Korea", "Spain", "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad & Tobago", "Tunisia", "Turkey", "Turkmenistan", , "Ukraine", "United Arab Emirates", "United Kingdom", "Uruguay", "Uzbekistan", "Venezuela", "Vietnam", "Virgin Islands (US)", "Yemen"];

        function choice(array) {
            return array[Math.floor(Math.random() * array.length)];
        }

        function randomNumber(min, max) {
            return Math.random() * (max - min) + min;
        }


        function payinout() {
            var nu = Math.floor(randomNumber(100, 3500));
            var con = choice(country_list);
            var mode = choice(['deposited', 'withdrew']);

            spop({
                template: "An Investor from " + con + " " + mode + " $" + nu + " ...",

                position: 'bottom-center',
                style: 'success',
                autoclose : 4000,
            });

        }

        setInterval(payinout,7000);


    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="home/js/calculator.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"><?php echo '</script'; ?>
>
    
<?php echo '<script'; ?>
 src="//code.tidio.co/hnz1cddyntidlic7hetkgxvywf9zbwwk.js" async><?php echo '</script'; ?>
>

    </body>
</html><?php }
}
?>