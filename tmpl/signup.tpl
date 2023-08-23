{$siteEmail = "info@skylinetrades.ltd"}
{$siteLogo = "/images/logo.png"}
{$siteIcon = "/fav.png"}
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
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <link rel="icon" type="image/png" href="{$siteIcon}">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Register | {$siteName}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
.material-symbols-outlined {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
</head>
<body>
    <section class="py-3 bg-secondary text-light">
      <div class="container">
      	<div class="row">
        	<div class="col-6">
            	<div class="button-wrapper">
						<a href="/" class="text-white d-flex align-items-center"><span class="mr-2 p-2 rounded bg-light text-dark material-symbols-outlined">arrow_back</span> Back to home</a>
                </div>
            </div>
            <div class="col-6 d-flex justify-content-end">
            	<div class=" text-white text-right">
                	{if $userinfo.logged != 1}
						<a href="?a=login" class="text-white d-flex align-items-center"> Login <span class="ml-2 p-2 rounded bg-light text-dark material-symbols-outlined">arrow_forward</span></a>{else}
                     	<a href="?a=account" class="text-white d-flex align-items-center">My Account <span class="ml-2 p-2 rounded bg-light text-dark material-symbols-outlined">arrow_forward</span></a>{/if}
                </div>
            </div>
        </div>
      </div>
    </section>
    
       <section class="h-100 " style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 p-lg-0 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid h-100" style="border-radius: 1rem 0 0 1rem; object-fit:cover;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
            
           
                       {if $deny_registration}
                        <h3 style="text-align: center;"> We are closed for new registrations now.</h3>
                        {elseif $settings.use_referal_program && $settings.force_upline && !$referer && !$settings.get_rand_ref}
                        <h5 style="text-align: center;"> You do not have a upline. Our system require a upline for each user.</h5>
                        {else}
                        {literal}

                        <script language=javascript>
                            function checkform() {
                                if (document.regform.fullname.value == '') {
                                    alert("Please enter your full name!");
                                    document.regform.fullname.focus();
                                    return false;
                                } {
                                    /literal} {
                                    if $settings.use_user_location == 1
                                } {
                                    literal
                                }
                                if (document.regform.address.value == '') {
                                    alert("Please enter your address!");
                                    document.regform.address.focus();
                                    return false;
                                }
                                if (document.regform.city.value == '') {
                                    alert("Please enter your city!");
                                    document.regform.city.focus();
                                    return false;
                                }
                                if (document.regform.state.value == '') {
                                    alert("Please enter your state!");
                                    document.regform.state.focus();
                                    return false;
                                }
                                if (document.regform.zip.value == '') {
                                    alert("Please enter your ZIP!");
                                    document.regform.zip.focus();
                                    return false;
                                }
                                if (document.regform.country.options[document.regform.country.selectedIndex].text == '--SELECT--') {
                                    alert("Please choose your country!");
                                    document.regform.country.focus();
                                    return false;
                                } {
                                    /literal} { /
                                    if
                                } {
                                    literal
                                }
                                if (document.regform.username.value == '') {
                                    alert("Please enter your username!");
                                    document.regform.username.focus();
                                    return false;
                                }
                                if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
                                    alert("For username you should use English letters and digits only!");
                                    document.regform.username.focus();
                                    return false;
                                }
                                if (document.regform.password.value == '') {
                                    alert("Please enter your password!");
                                    document.regform.password.focus();
                                    return false;
                                }
                                if (document.regform.password.value != document.regform.password2.value) {
                                    alert("Please check your password!");
                                    document.regform.password2.focus();
                                    return false;
                                } {
                                    /literal} {
                                    if $settings.use_transaction_code
                                } {
                                    literal
                                }
                                if (document.regform.transaction_code.value == '') {
                                    alert("Please enter your transaction code!");
                                    document.regform.transaction_code.focus();
                                    return false;
                                }
                                if (document.regform.transaction_code.value != document.regform.transaction_code2.value) {
                                    alert("Please check your transaction code!");
                                    document.regform.transaction_code2.focus();
                                    return false;
                                } {
                                    /literal} { /
                                    if
                                } {
                                    literal
                                }
                                if (document.regform.email.value == '') {
                                    alert("Please enter your e-mail address!");
                                    document.regform.email.focus();
                                    return false;
                                }
                                if (document.regform.email.value != document.regform.email1.value) {
                                    alert("Please retupe your e-mail!");
                                    document.regform.email.focus();
                                    return false;
                                }

                                for (i in document.regform.elements) {
                                    f = document.regform.elements[i];
                                    if (f.name && f.name.match(/^pay_account/)) {
                                        if (f.value == '') continue;
                                        var notice = f.getAttribute('data-validate-notice');
                                        var invalid = 0;
                                        if (f.getAttribute('data-validate') == 'regexp') {
                                            var re = new RegExp(f.getAttribute('data-validate-regexp'));
                                            if (!f.value.match(re)) {
                                                invalid = 1;
                                            }
                                        } else if (f.getAttribute('data-validate') == 'email') {
                                            var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
                                            if (!f.value.match(re)) {
                                                invalid = 1;
                                            }
                                        }
                                        if (invalid) {
                                            alert('Invalid account format. Expected ' + notice);
                                            f.focus();
                                            return false;
                                        }
                                    }
                                }

                                if (document.regform.agree.checked == false) {
                                    alert("You have to agree with the Terms and Conditions!");
                                    return false;
                                }

                                return true;
                            }

                            function IsNumeric(sText) {
                                var ValidChars = "0123456789";
                                var IsNumber = true;
                                var Char;
                                if (sText == '') return false;
                                for (i = 0; i < sText.length && IsNumber == true; i++) {
                                    Char = sText.charAt(i);
                                    if (ValidChars.indexOf(Char) == -1) {
                                        IsNumber = false;
                                    }
                                }
                                return IsNumber;
                            }

                        </script>
                        {/literal}

                              
            
              <div class="card-body p-4 p-lg-5 text-black">
              
                 {if $errors}
                        <ul style="color:red">
                            {section name=e loop=$errors}
                            {if $errors[e] eq 'full_name'}
                            <li>Please enter your full name!
                                {/if}
                                {if $errors[e] eq 'address'}
                            <li>Please enter your address!
                                {/if}
                                {if $errors[e] eq 'city'}
                            <li>Please enter your city!
                                {/if}
                                {if $errors[e] eq 'state'}
                            <li>Please enter your state!
                                {/if}
                                {if $errors[e] eq 'zip'}
                            <li>Please enter your zip!
                                {/if}
                                {if $errors[e] eq 'country'}
                            <li>Please choose your country!
                                {/if}
                                {if $errors[e] eq 'username'}
                            <li>Please enter valid username! It should contains English letters and digits only.
                                {/if}
                                {if $errors[e] eq 'username_exists'}
                            <li>Sorry, such user already exists! Please try another username.
                                {/if}
                                {if $errors[e] eq 'email_exists'}
                            <li>Sorry, such email already exists! Please try another email.
                                {/if}
                                {if $errors[e] eq 'password'}
                            <li>Please enter a password!
                                {/if}
                                {if $errors[e] eq 'password_confirm'}
                            <li>Please check your password!
                                {/if}
                                {if $errors[e] eq 'password_too_small'}
                            <li>The password you provided is too small, please enter at least {$settings.min_user_password_length} characters!
                                {/if}
                                {if $errors[e] eq 'transaction_code'}
                            <li>Please enter the Transaction Code!
                                {/if}
                                {if $errors[e] eq 'transaction_code_confirm'}
                            <li>Please check your Transaction Code!
                                {/if}
                                {if $errors[e] eq 'transaction_code_too_small'}
                            <li>The Transaction Code you provided is too small, please enter at least {$settings.min_user_password_length} characters!
                                {/if}
                                {if $errors[e] eq 'transaction_code_vs_password'}
                            <li>The Transaction Code should differ from the Password!
                                {/if}
                                {if $errors[e] eq 'egold'}
                            <li>Please enter your e-gold account number!
                                {/if}
                                {if $errors[e] eq 'invalid_perfectmoney_account'}
                            <li>Please enter USD PerfectMoney account number!
                                {/if}
                                {if $errors[e] eq 'email'}
                            <li>Please enter your e-mail!
                                {/if}
                                {if $errors[e] eq 'agree'}
                            <li>You have to agree with the Terms and Conditions!
                                {/if}
                                {if $errors[e] eq 'turing_image'}
                            <li>Enter the verification code as it is shown in the corresponding box.
                                {/if}
                                {if $errors[e] eq 'no_upline'}
                            <li>The system requires an upline to register. {if $settings.get_rand_ref}You have to be agreed to random one or found a referral link in the net.{/if}
                                {/if}
                                {if $errors[e] eq 'ip_exists_in_database'}
                            <li>Your IP already exists in our database. Sorry, but registration impossible.
                                {/if}

                                {if $errors[e] eq 'invalid_account_format'}
                                {foreach from=$account_errors item=err}
                            <li>{$err}
                                {/foreach}
                                {/if}

                                <br>
                                {/section}
                        </ul>
                        {/if}  
              
			{if $userinfo.logged != 1}
                        <form method=post onsubmit="return checkform()" name="regform">
                            <input type=hidden name=a value="signup">
                            <input type=hidden name=action value="signup">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">
                    	<img src="{$siteLogo}" alt="logo" class="w-50"/>
                    </span>
                  </div>
                    
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=fullname value="{$frm.fullname|escape:" quotes"}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Full Name</label>
                  </div>

					<div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=username value="{$frm.username|escape:" quotes"}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Username</label>
                  </div>
                
                <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" name=email value="{$frm.email|escape:" quotes"}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example17" name=email1 value="{$frm.email1|escape:" quotes"}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Retype Email</label>
                  </div>
                  
                   <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=sq value="{$frm.sq|escape:" quotes"}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Secret Question</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name=sa value="{$frm.sa|escape:" quotes"}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Secret Answer</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name=password value="{$frm.password|escape:" quotes"}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name=password2 value="{$frm.password2|escape:" quotes"}" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Retype Password</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example27" class="form-control form-control-lg display-6 h6" Placeholder="E.g bc1qd9mndaw3me5e9zpqv3sex97ef63p6xgq8yqpt9" />
                    <label class="form-label" for="form2Example27">BTC Address</label>
                  </div>
                  
                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example27" class="form-control form-control-lg display-6 h6" Placeholder="E.g 0x94F995314B997c082506B042BD648618Ee76BE91" />
                    <label class="form-label" for="form2Example27">ETH Address</label>
                  </div>
					
                    <div class="form-outline my-1">
                    	 <input type=checkbox name="agree" value=1 class="mr-1"> I agree with <a href="?a=rules">Terms and conditions</a>
                    </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type=submit value="Register">Register</button>
                    
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="?a=login"
                      style="color: #393f81;">Login here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>
                {else}
                
                <div class="py-4">
                    	<h4 class="mb-3">You are already signed In</h4>
                        <div class="p-2 bg-secondary text-light mt-2 rounded text-center w-75">
                        	<a href="?a=account" class="text-light px-1">Back to my account</a>
                        </div>
                    </div>
				{/if}
                {/if}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
    
</body>

</html>