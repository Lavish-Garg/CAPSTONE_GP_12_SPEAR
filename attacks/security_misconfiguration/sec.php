﻿<html>
<title>Security Misconfiguration</title>
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

  <center><h1>Security Misconfiguration</h1></center>
 

<section class="content">
<br><br>
<span id="c"><b>What is Security Misconfiguration?</b></span><br>

<p>Security Misconfiguration as its name suggests is a vulnerability that might occur in a web application or the web server 
 configuration or database server configuration or any internal detail made available to external entities. Security misconfiguration
  mainly occurs when configuration of an application or deployed software is not done properly leaving behind loopholes leading to 
  exploitation.</p><br>
 
 <span id="c"><b>Are You Vulnerable To 'Security Misconfiguration'?</b></span><br>
 <p>Is your application missing the proper security hardening across any part of the application stack? Including:

<ul>
<li>Is any of your software out of date? This software includes the OS, Web/App Server, DBMS, applications, APIs, and all components and libraries.</li>
<li>Are any unnecessary features enabled or installed (e.g., ports, services, pages, accounts, privileges)?</li>
<li>Are default accounts and their passwords still enabled and unchanged?</li>
<li>Does your error handling reveal stack traces or other overly informative error messages to users?</li>
<li>Are the security settings in your application servers, application frameworks (e.g., Struts, Spring, ASP.NET), libraries, databases, etc. not set to secure values?
Without a concerted, repeatable application security configuration process, systems are at a higher risk.</li></p><br>
</ul>

<span id="c"><b>Attack Vectors</b></span><br>
<p>Attackers access default accounts, unused pages, unpatched flaws, unprotected files and directories, etc. to gain unauthorized access to or knowledge of the system.
Security misconfiguration can happen at any level of an application stack, including the platform, web server, application server, database, frameworks, and custom code.
 Developers and system administrators need to work together to ensure that the entire stack is configured properly.
Automated scanners are useful for detecting missing patches, misconfigurations, use of default accounts, unnecessary services, etc.</p><br>

<span id="c"><b>What an attacker can do?</b></span><br>
<ul>
<li>The web server deployed is installed in its default configuration and no hardening has been done.</li>
 <li>The application server uses default username password for admin/manager accounts.</li>
<li>The database server is not up-to-date leading to remote exploitation.</li>
<li>Example files or demo files that come with web server software are not removed after installation.</li>
 <li>The web application does not handle expectations properly leading to disclosure of internal details like source code snippets, SQL 
  queries, internal path, etc.</li>
<li>Directory listing is enabled due to which contents of a directory in document root (where web application's files are placed) is visible.</li>
</ul>
</section>
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