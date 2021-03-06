<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.0.0.379"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "consumer-orders.css"], "outOfDate":[]};
</script>
  
  <title>Consumer Orders</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=444006867"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?crc=4276979596"/>
  <link rel="stylesheet" type="text/css" href="css/consumer-orders.css?crc=390115951" id="pagesheet"/>
    <!--HTML Widget code-->
  
		<style>
	
  table, th, td {
    border: 1px solid black;
}
.mf-menu {
  height: 70px;
  width: 70px;
  right: 70px;
  text-align: center;
  position: absolute;
  background: #000000;
  overflow: hidden;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
  z-index: 999;
position:fixed;
}
.mf-menu.active {
  width: calc(100% - 140px);
}
.mf-menu.active .menuContent * {
  opacity: 1;
}
.mf-menu.active span i:nth-child(1) {
  -webkit-transform: rotate(-45deg) translate(-50%, -50%);
          transform: rotate(-45deg) translate(-50%, -50%);
  top: 50%;
}
.mf-menu.active span i:nth-child(2) {
  -webkit-transform: translateX(-100px);
          transform: translateX(-100px);
  opacity: 0;
}
.mf-menu.active span i:nth-child(3) {
  -webkit-transform: rotate(45deg) translate(-50%, -50%);
          transform: rotate(45deg) translate(-50%, -50%);
  top: 50%;
}
.mf-menu span {
  width: 70px;
  height: 70px;
  position: absolute;
  right: 0;
  cursor: pointer;
  background: {menuColor};
  z-index: 1;
}
.mf-menu span i {
  position: absolute;
  -webkit-transform-origin: 50% 50%;
          transform-origin: 50% 50%;
  width: 45%;
  height: 2px;
  left: 0;
  right: 0;
  margin: auto;
  background-color: #FFFFFF;
  -webkit-transition: opacity .1s ease .1s, -webkit-transform .3s ease;
  transition: opacity .1s ease .1s, -webkit-transform .3s ease;
  transition: transform .3s ease, opacity .1s ease .1s;
  transition: transform .3s ease, opacity .1s ease .1s, -webkit-transform .3s ease;
}
.mf-menu span i:nth-child(1) {
  top: 40%;
}
.mf-menu span i:nth-child(2) {
  top: 50%;
}
.mf-menu span i:nth-child(3) {
  top: 60%;
}
.mf-menu .menuContent {
  position: absolute;
  width: 100%;
  height: 100%;
  line-height: 70px;
  right: 0px;
  text-align: center;
}
.mf-menu .menuContent * {
  opacity: 0;
}
.mf-menu .menuContent ul li {
  display: inline-block;
  margin-left: 50px;
  margin-right: 50px;
  color: #FFFFFF;
  -webkit-transition: opacity .3s ease .3s;
  transition: opacity .3s ease .3s;
  cursor: pointer;
  position: relative;
}
.mf-menu .menuContent ul li:hover:before {
  opacity: .8;
  top: 13px;
  left: 20px;
}
.mf-menu .menuContent ul li:hover:after {
  opacity: .8;
  bottom: 13px;
  left: -20px;
}
.mf-menu .menuContent ul li:before, .mf-menu .menuContent ul li:after {
  content: "";
  position: absolute;
  width: 20px;
  height: 2px;
  background: #FFFFFF;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.mf-menu .menuContent ul li:before {
  -webkit-transform: rotate(-55deg);
          transform: rotate(-55deg);
  left: 60px;
  top: -30px;
  opacity: 0;
  right: 0;
  margin: auto;
}
.mf-menu .menuContent ul li:after {
  -webkit-transform: rotate(-55deg);
          transform: rotate(-55deg);
  left: -60px;
  bottom: -30px;
  opacity: 0;
  right: 0;
  margin: auto;
}

.linkClass {
    color: #FFFFFF !important;
    text-decoration:none !important;
}
	
</style>
	
 </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="clip_frame colelem" id="u104"><!-- image -->
    <img class="block" id="u104_img" src="images/e-tribeblack.png?crc=4239119762" alt="" width="563" height="117"/>
   </div>
   <div class="clearfix colelem" id="pu114-4"><!-- group -->
    <div class="clearfix grpelem" id="u114-4"><!-- content -->
     <p>State of the art E-Commerce retail manager</p>
    </div>
    <div class="size_fixed grpelem" id="u202"><!-- custom html -->
     
<div class='mf-menu'>
  <span class='toggle'>
    <i></i>
    <i></i>
    <i></i>
  </span>
  <div class='menuContent'>
    <ul>
            <li class="lineClass"><a class="linkClass" href="index.html">Home</a></li>
            <li class="lineClass"><a class="linkClass" href="#">Orders</a></li>
            <li class="lineClass"><a class="linkClass" href="#">Restock</a></li>
            <li class="lineClass"><a class="linkClass" href="#">Products</a></li>
            <li class="lineClass"><a class="linkClass" href="#">Accounts</a></li>
            <li class="lineClass"><a class="linkClass" href="#">Events</a></li>
    </ul>
  </div>
</div>

    </div>
   </div>
   <div class="colelem" id="u427"><!-- content -->
  </div>
   <div class="verticalspacer" data-offset-top="419" data-content-above-spacer="419" data-content-below-spacer="81"><?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dc";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<table><tr><th>Number</th><th>Account</th><th>Address</th><th>Date</th><th>Total</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["number"]. "</td><td>" . $row["account"]. "</td><td>" . $row["address"]. "</td><td>" . $row["date"] ."</td><td>" . $row["total"]. "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
    
    $conn->close();
    ?> </div>
  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js?crc=209076791" type="text/javascript">\x3C/script>');
</script>
  <!-- Other scripts -->
  <script type="text/javascript">
   // Decide weather to suppress missing file error or not based on preference setting
var suppressMissingFileError = false
</script>
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),suppressMissingFileError?(f+="\nUse SuppressMissingFileError key in AppPrefs.xml to show missing file error pop up.",console.log(f)):alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?
setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.makeButtonsVisibleAfterSettingMinWidth();/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4157109226" type="text/javascript" async data-main="scripts/museconfig.js?crc=380897831" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
  
  <!--HTML Widget code-->
  
<script>
    $('.lineClass a:empty').parent().hide();
    $('.toggle').on('click', function() {
	$('.mf-menu').toggleClass('active');

});
</script>
	
   </body>
</html>
