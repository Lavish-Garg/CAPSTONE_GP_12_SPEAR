<html>
<title>Unvalidated Redirects And Forwards</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/main.css">
<link rel="stylesheet" href="../../css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<script type="text/javascript" src="../../ddsmoothmenu.js"></script>
  <script type="text/javascript" src="../../jquery.min.js">
    /***********************************************
    * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
    * This notice MUST stay intact for legal use
    * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
    ***********************************************/
  </script>
  <script type="text/javascript">
    ddsmoothmenu.init({
      mainmenuid: "smoothmenu1", //menu DIV id
      orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
      classname: 'ddsmoothmenu', //class added to menu's outer DIV
      //customtheme: ["#cccc44", "#cccccc"],
      contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $('[ReflectedXSSExecutionPoint]').attr("title", "");
      $('[ReflectedXSSExecutionPoint]').balloon();
      $('[CookieTamperingAffectedArea]').attr("title", "");
      $('[CookieTamperingAffectedArea]').balloon();
    });
  </script>

</head>
<body onload="onLoadOfBody(this);">

<!-- Sidebar/menu -->
<div class="w3-sidebar w3-red w3-collapse w3-top w3-medium w3-padding" style="z-index:3;width:460px;font-weight:bold;" id=""><br>
  
  <div class="w3-container" align="center">
    <h3 class="w3-padding-50"> <a href="../../index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><b><br>VAPT<br>SIMULATOR</b></a> </h3>
  </div>
  
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../../index.php">Home</a>
    </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../../setup.php">Setup/Reset Database</a>
    </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu"> 
 <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../injections/inject.php">Injections</a>
      <ul>
        <li>
          <a href="./../injections/inject.php">About</a>
        </li>
        <li>
          <a href="./../injections/auth.php">Authentication Bypass</a>
        </li>
        <li>
          <a href="./../injections/sql_unsecure.php">Union Based Sql Injection</a>
        </li>
        <li>
          <a href="./../injections/cmdinj.php">Command Injection</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu"> 
     <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../broken/broken_main.php">Broken Authentication and Session Management</a>
      <ul>
        <li>
          <a href="./../broken/broken_main.php">About</a>
        </li>
        <li>
          <a href="./../broken/lesson1.php">Weak login credentials</a>
        </li>
      </ul>
    </li>
  </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../xss/xss_main.php">Cross Site Scripting (XSS)</a>
      <ul>
        <li>
          <a href="./../xss/xss_main.php">About</a>
        </li>
        <li>
          <a href="./../xss/xss_r.php">Reflected XSS</a>
        </li>
        <li>
          <a href="./../xss/xss_s.php">Stored XSS</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../security_misconfiguration/sec.php">Security Miscofiguration</a>
      <ul>
        <li>
          <a href="./../security_misconfiguration/sec.php">About</a>
        </li>
        <li>
          <a href="./../security_misconfiguration/bruteforce.php">Brute Force Attack</a>
        </li>
      </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">    
          <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../senstive_data_exposure/sde.php">Sensitive Data Exposure</a>
      <ul>
        <li>
          <a href="./../senstive_data_exposure/sde.php">About</a>
        </li>
        <li>
          <a href="./../senstive_data_exposure/plaintext.php">User Credentials Sent in Plaintext</a>
        </li>
        <li>
          <a href="./../senstive_data_exposure/plaintext_db.php">Plaintext Passwords in Database</a>
        </li>
      </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">     
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../missing_function/msflac.php">Missing Function Level Access Control</a>
      <ul>
        <li>
          <a href="./../missing_function/msflac.php">About</a>
        </li>
        <li>
          <a href="./../missing_function/unauthenticated.php">Unauthenticated User Access to Admin</a>
        </li>
        <li>
          <a href="./../missing_function/auth/authenticated.php">Authenticated User Access to Admin</a>
        </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../csrf/csrf_main.php">Cross-Site Request Forgery (CSRF)</a>
      <ul>
        <li>
          <a href="./../csrf/csrf_main.php">About</a>
        </li>
        <li>
          <a href="./../csrf/gmail.php">CSRF in Gmail(Logout)</a>
        </li>
        <li>
          <a href="./../csrf/comment.php">CSRF in Comment Box</a>
        </li>
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../unvalidated_redirects/unvalidated.php">Unvalidated Redirects & Forwards</a>
      <ul>
        <li>
          <a href="./../unvalidated_redirects/unvalidated.php">About</a>
        </li>
        <li>
          <a href="./../unvalidated_redirects/manual.php">Manual Redirects</a>
        </li>
        <li>
          <a href="./../unvalidated_redirects/automatic.php">Automatic Redirects</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../file_inclusion/fi.php">Unrestricted File Upload</a>
      <ul>
        <li>
          <a href="./../file_inclusion/fi.php">About</a>
        </li>
        <li>
          <a href="./../file_inclusion/arbitrary.php">Arbitrary File Upload</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./../click_jacking/click_jack.php">Click Jacking</a>
      <ul>
        <li>
          <a href="./../click_jacking/click_jack.php">About</a>
        </li>
        <li>
          <a href="./../click_jacking/Click.html">Click Jack</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>


<!-- <br style="clear: left" />  -->
      
</div>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span><b>VAPT SIMULATOR</b></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:470px;margin-right:40px">
 <center><h1>Unvalidated Redirects And Forwards</h1></center>
<section class="content">
  <br>
<span id="c"><b>What is Unvalidated Redirects And Forwards ?</b></span><br>
<p>Unvalidated redirects and forwards are possible when a web application accepts untrusted input that could cause the web application to redirect the request to a URL contained within untrusted input. By modifying untrusted URL input to a malicious site, an attacker may successfully launch a phishing scam and steal user credentials. Because the server name in the modified link is identical to the original site, phishing attempts may have a more trustworthy appearance. Unvalidated redirect and forward .. can also be used to maliciously craft a URL that would pass the application’s access control check and then forward the attacker to privileged functions that they would normally not be able to access.
Consider anyone who can trick your users into submitting a request to your website. Any website or other HTML feed that your users use could do this.</p>

<span id="c"><b>Attack Vectors</b></span><br>
<p>Attacker links to unvalidated redirect and tricks victims into clicking it. Victims are more likely to click on it, since the link is to a valid site. Attacker targets unsafe forward to bypass security checks.
Applications frequently redirect users to other pages, or use internal forwards in a similar manner. Sometimes the target page is specified in an unvalidated parameter, allowing attackers to choose the destination page.
Detecting unchecked redirects is easy. Look for redirects where you can set the full URL. Unchecked forwards are harder, because they target internal pages.</p>

<span id="c"><b>Are You Vulnerable To 'Unvalidated Redirects and Forwards'?</b></span><br>
<p>The best way to find out if an application has any unvalidated redirects or forwards is to:

Review the code for all uses of redirect or forward (called a transfer in .NET). For each use, identify if the target URL is included in any parameter values. If so, if the target URL isn’t validated against a whitelist, you are vulnerable.
Also, spider the site to see if it generates any redirects (HTTP response codes 300-307, typically 302). Look at the parameters supplied prior to the redirect to see if they appear to be a target URL or a piece of such a URL. If so, change the URL target and observe whether the site redirects to the new target.
If code is unavailable, check all parameters to see if they look like part of a redirect or forward URL destination and test those that do.</p>

<span id="c"><b>Preventing Unvalidated Redirects and Forwards</b></span><br>
<ul>
	<p>Safe use of redirects and forwards can be done in a number of ways:</p>
<li>Simply avoid using redirects and forwards.</li>
<li>If used, do not allow the url as user input for the destination. This can usually be done. In this case, you should have a method to validate URL.</li>
<li>If user input can’t be avoided, ensure that the supplied value is valid, appropriate for the application, and is authorized for the user. </li>
<li>It is recommended that any such destination input be mapped to a value, rather than the actual URL or portion of the URL, and that server side code translate this value to the target URL. </li>
<li>Sanitize input by creating a list of trusted URL's (lists of hosts or a regex). </li>
<li>Force all redirects to first go through a page notifying users that they are going off of your site, and have them click a link to confirm. </li>
</ul>
 <!-- page end -->
</div>
<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>
</body>
</html>