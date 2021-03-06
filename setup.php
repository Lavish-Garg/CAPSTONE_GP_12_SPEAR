<html>
<title>Setup/Create Database</title>
<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<script type="text/javascript" src="ddsmoothmenu.js"></script>
  <script type="text/javascript" src="jquery.min.js">
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
    <h3 class="w3-padding-50"> <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><b><br>VAPT<br>SIMULATOR</b></a></h3>
  </div>

<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./index.php">Home</a>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./setup.php">Setup/Reset Database</a>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu"> 
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/injections/inject.php">Injections</a>
      <ul>
        <li>
          <a href="./attacks/injections/inject.php">About</a>
        </li>
        <li>
          <a href="./attacks/injections/auth.php">Authentication Bypass</a>
        </li>
        <li>
          <a href="./attacks/injections/sql_unsecure.php">Union Based Sql Injection</a>
        </li>
        <li>
          <a href="./attacks/injections/cmdinj.php">Command Injection</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu"> 
     <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/broken/broken_main.php">Broken Authentication and Session Management</a>
      <ul>
        <li>
          <a href="./attacks/broken/broken_main.php">About</a>
        </li>
        <li>
          <a href="./attacks/broken/lesson1.php">Weak login credentials</a>
        </li>
      </ul>
    </li>
  </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/xss/xss_main.php">Cross Site Scripting (XSS)</a>
      <ul>
        <li>
          <a href="./attacks/xss/xss_main.php">About</a>
        </li>
        <li>
          <a href="./attacks/xss/xss_r.php">Reflected XSS</a>
        </li>
        <li>
          <a href="./attacks/xss/xss_s.php">Stored XSS</a>
        </li>
      </ul>
    </li>
  </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
  <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/security_misconfiguration/sec.php">Security Miscofiguration</a>
      <ul>
        <li>
          <a href="./attacks/security_misconfiguration/sec.php">About</a>
        </li>
        <li>
          <a href="./attacks/security_misconfiguration/bruteforce.php">Brute Force Attack</a>
        </li>
      </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">    
          <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/senstive_data_exposure/sde.php">Sensitive Data Exposure</a>
      <ul>
        <li>
          <a href="./attacks/senstive_data_exposure/sde.php">About</a>
        </li>
        <li>
          <a href="./attacks/senstive_data_exposure/plaintext.php">User Credentials Sent in Plaintext</a>
        </li>
        <li>
          <a href="./attacks/senstive_data_exposure/plaintext_db.php">Plaintext Passwords in Database</a>
        </li>
      </ul>
 </div>
<div id="smoothmenu1" class="ddsmoothmenu">     
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/missing_function/msflac.php">Missing Function Level Access Control</a>
      <ul>
        <li>
          <a href="./attacks/missing_function/msflac.php">About</a>
        </li>
        <li>
          <a href="./attacks/missing_function/unauthenticated.php">Unauthenticated User Access to Admin</a>
        </li>
        <li>
          <a href="./attacks/missing_function/auth/authenticated.php">Authenticated User Access to Admin</a>
        </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/csrf/csrf_main.php">Cross-Site Request Forgery (CSRF)</a>
      <ul>
        <li>
          <a href="./attacks/csrf/csrf_main.php">About</a>
        </li>
        <li>
          <a href="./attacks/csrf/gmail.php">CSRF in Gmail(Logout)</a>
        </li>
        <li>
          <a href="./attacks/csrf/comment.php">CSRF in Comment Box</a>
        </li>
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/unvalidated_redirects/unvalidated.php">Unvalidated Redirects & Forwards</a>
      <ul>
        <li>
          <a href="./attacks/unvalidated_redirects/unvalidated.php">About</a>
        </li>
        <li>
          <a href="./attacks/unvalidated_redirects/manual.php">Manual Redirects</a>
        </li>
        <li>
          <a href="./attacks/unvalidated_redirects/automatic.php">Automatic Redirects</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/file_inclusion/fi.php">Unrestricted File Upload</a>
      <ul>
        <li>
          <a href="./attacks/file_inclusion/fi.php">About</a>
        </li>
        <li>
          <a href="./attacks/file_inclusion/arbitrary.php">Arbitrary File Upload</a>
        </li>
        
      </ul>
         </li>
      </ul>
</div>
<div id="smoothmenu1" class="ddsmoothmenu">
      <ul>
    <li style="border-color: #ffffff;border-style: solid;border-width: 1px;">
      <a href="./attacks/click_jacking/click_jack.php">Click Jacking</a>
      <ul>
        <li>
          <a href="./attacks/click_jacking/click_jack.php">About</a>
        </li>
        <li>
          <a href="./attacks/click_jacking/Click.html">Click Jack</a>
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

<center><h1>Database Setup</h1></center>

<section class="content">
<br>
<center>
  <style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 50%;
    padding: 15px 10px;
    margin: 10px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 5px 20px;
    margin: auto;
    border: none;
    cursor: pointer;
    width: 50%;
}

button:hover {
    opacity: 0.8;
}

}


}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 10px) {
    span.psw {
       display: block;
       float: none;
    }
}
</style>
<center>
<span id="c"></span><br>
<p><ul>
<li>For Setup the Database again, click on the "Create / Reset Database" Button below to Create or Reset your Database.</li>
<li>By clicking on the "Create / Reset Database" Button below, You'll get a page saying "Welcome to VAPT Simulator, Database has been Created".</li> 
<li>If the Database already exists, clicking this will Overwrite it and the data in the previous Database will be Reset.</li>
<li>You can also use the "Create / Reset Database" Button below anytime when you want to clear the data of the Functionalities of the Simulator.</li>
</ul><p>
<br>

<!-- The url from the victim site -->
<a href="./reset.php">
<button>Create/Reset Database</button>
</a>
</form>
</center>
</form>
</center>

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