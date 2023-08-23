{$loginUrl = "?a=login"}

{$pageName = "Reset Password"}
{include file="auth_header.tpl"}


<!--Page Title-->
<section class="page-title" style="background-image:url(home/images1/background/8.jpg);">
    <div class="auto-container">

        <h1>Forgot password</h1>
        <div class="text">Top Cryptocurrency investment Platform</div>
    </div>
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container clearfix">
            <ul class="bread-crumb">
                <li><a href="/">Home</a></li>
                <li>Forgot password</li>
            </ul>
        </div>
    </div>
    <!--End Page Info-->
</section>
<!--End Page Title-->
{literal}
<script language=javascript>
    function checkform() {
        if (document.forgotform.email.value == '') {
            alert("Please type your username or email!");
            document.forgotform.email.focus();
            return false;
        }
        return true;
    }
</script>
{/literal}
<br><br>

<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">

            {if $errors.turing_image}
            Invalid turing image<br><br>
            {/if}


            {if $found_records == 2}
            Your accound was found. Please check your e-mail address and follow confirm URL to reset your password.
            <br><br>
            {else}

            {if $found_records == 0}
            No accounts found for provided info.
            <br><br>
            {elseif $found_records == 1}
            Request was confirmed. Login and password was sent to your email address.
            <br><br>
            {/if}

            <form method=post name=forgotform onsubmit="return checkform();">
                <input type=hidden name=a value="forgot_password">
                <input type=hidden name=action value="forgot_password">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <p class="error" style="color:red"> </p>

                    <input type="text"  class="form-control" placeholder="username or e-mail" name='email' value="{$frm.email|escape:htmlall}">
                    {if $ti.check.forgot_password}
                    <tr>

                        <td> Code: <img src="{" ?a=show_validation_image&`$ti.session.name`=`$ti.session.id`&rand=`$ti.session.rand`"|encurl}"> <input type=text name=validation_number class=inpts size=15></td>
                    </tr>
                    {/if}
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="check-group flexbox">
                        <label class="check-box">
                            <input type="checkbox" class="check-box-input" checked>
                            <span class="remember-text">Remember me</span>

                        </label>

                        <a class="text-muted" href="{$loginUrl}">Already have password?</a>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <button type="submit" type="submit" id="submit" class="slide-btn login-btn btn bg-success text-white" name="login">Submit</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </form>
            {/if}
        </div>
    </div>
</div>

</div>
<!-- End Login Form -->