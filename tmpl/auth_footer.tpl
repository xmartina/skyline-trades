{$appName = "Easycrypto Trading LTD"}
{$siteEmail = "info@easycryptotrading.ltd"}
{$siteLogo = "images/logo.png"}
{$siteIcon = "fav.png"}
{$siteEmail = "info@easycryptotrading.ltd"}
{$sitePhone = "contact@easycryptotrading.ltd"}
{$aboutUrl = "?a=about"}
{$referralUrl = "?a=affiliate"}
{$contactUrl = "?a=support"}
{$tAndCUrl = "?a=rules"}
{$resetPasswordUrl = "?a=forgot_password"}
{$loginUrl = "?a=login"}
{$signUpUrl = "?a=signup"}
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
                                        <img class="mt-1" src="{$siteLogo}" height="100" width="180" />
                                    </div>

                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <h2 class="widget-title">Links</h2>
                                    <ul class="user-links">
                                        <li><a href="/">Home</a></li>
                                        <li><a href="{$aboutUrl}">About</a></li>
                                        <li><a href="{$contactUrl}">Contact</a></li>
                                        <li><a href="{$loginUrl}">Login</a></li>
                                        <li><a href="{$signUpUrl}">Register</a></li>
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
                                                <div class="text"><a href="#"></a><br><a href="mailto:{$siteEmail}">{$siteEmail}</a></div>
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
                            <li><a href="{$tAndCUrl}">Terms & Conditions</a></li>

                        </ul>
                    </div>

                    <div class="copyright-text">
                        <p>2022 © All Rights Reserved by <a href="/">{$appName}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
	{literal}
    <script src="/home/js/jquery.js"></script>
    <script src="/home/js/popper.min.js"></script>
    <script src="/home/js/bootstrap.min.js"></script>
    <script src="/home/js/jquery.fancybox.js"></script>
    <script src="/home/js/owl.js"></script>
    <script src="/home/js/wow.js"></script>
    <script src="/home/js/appear.js"></script>
    <script src="/home/js/scrollbar.js"></script>
    <script src="/home/js/script.js"></script>



    <script>
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
    </script>

    <script type="text/javascript">
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


    </script>

    <script type="text/javascript" src="home/js/calculator.js"></script>

    <script src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>
    
<script src="//code.tidio.co/hnz1cddyntidlic7hetkgxvywf9zbwwk.js" async></script>
{/literal}
    </body>
</html>