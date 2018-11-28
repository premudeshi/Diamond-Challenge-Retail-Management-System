<?php

$link = mysql_connect("localhost", "root", "");
mysql_select_db("dc", $link);

$result = mysql_query("SELECT * FROM orders", $link);
$num_orders = mysql_num_rows($result);

$result2 = mysql_query("SELECT * FROM orders WHERE type = 'customer'", $link);
$num_customerorders = mysql_num_rows($result2);

$result3 = mysql_query("SELECT * FROM orders WHERE type = 'tribe'", $link);
$num_consumer = mysql_num_rows($result3);


$totalcustomerorders = ($num_customerorders / $num_orders) * 100;
$totalproducerorders = ($num_consumer / $num_orders) * 100;

echo $totalcustomerorders;

$license = array();
$fh = fopen('license.txt','r');
while ($line = fgets($fh)) {
  array_push($license, $line);
}
fclose($fh);

?>

<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2018.0.0.379"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "index.css"], "outOfDate":[]};
</script>
  
  <title>Home</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=444006867"/>
  <link rel="stylesheet" type="text/css" href="css/master_a-master.css?crc=4276979596"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?crc=12480949" id="pagesheet"/>
    <!--HTML Widget code-->
  
		<style>
	

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
	
<style>

.u221 {
  position: relative;
  width: 10em;
  height: 10em;
  text-align: center;
}

.u221 canvas {
  position: absolute;
  top: 0;
  left: 0;
}

.percent {
  font-size: 28px;
  color: #222222;
  line-height: 152px;
  z-index: 2;
}
.percent:after {
  content: '%';
  font-size: #222222px;
}
.percent.no-percent:after {
  content: '';
}
</style>

<style>

.u213 {
  position: relative;
  width: 10em;
  height: 10em;
  text-align: center;
}

.u213 canvas {
  position: absolute;
  top: 0;
  left: 0;
}

.percent {
  font-size: 28px;
  color: #222222;
  line-height: 152px;
  z-index: 2;
}
.percent:after {
  content: '%';
  font-size: #222222px;
}
.percent.no-percent:after {
  content: '';
}
</style>

<style>

.u229 {
  position: relative;
  width: 10em;
  height: 10em;
  text-align: center;
}

.u229 canvas {
  position: absolute;
  top: 0;
  left: 0;
}

.percent {
  font-size: 28px;
  color: #222222;
  line-height: 152px;
  z-index: 2;
}
.percent:after {
  content: '%';
  font-size: #222222px;
}
.percent.no-percent:after {
  content: '';
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
            <li class="lineClass"><a class="linkClass" href="">Orders</a></li>
            <li class="lineClass"><a class="linkClass" href="consumer-orders.php">Restock</a></li>
            <li class="lineClass"><a class="linkClass" href="#">Products</a></li>
            <li class="lineClass"><a class="linkClass" href="#">Accounts</a></li>
            <li class="lineClass"><a class="linkClass" href="#">Events</a></li>
    </ul>
  </div>
</div>

    </div>
   </div>
   <div class="clearfix colelem" id="pu210-18"><!-- group -->
    <div class="clearfix grpelem" id="u210-18"><!-- content -->
     <p>This software is licensed to:</p>
     <p>&nbsp;</p>
     <p id="u210-5"><?php echo $license[0];  ?></p>
     <p id="u210-7"><?php echo $license[1];  ?></p>
     <p id="u210-8">&nbsp;</p>
     <p id="u210-10"><?php echo $license[2];  ?></p>
     <p id="u210-12"><?php echo $license[3];  ?></p>
     <p id="u210-14"><?php echo $license[4];  ?></p>
     <p id="u210-15">&nbsp;</p>
     <p>&nbsp;</p>
    </div>
    <div class="clearfix grpelem" id="pu221"><!-- group -->
     <div class="size_fixed grpelem" id="u221"><!-- custom html -->
      
<!-- This Adobe Muse widget was created by the team at MuseFree.com -->
 <div class="u221" data-percent="<?php echo $totalcustomerorders ?>">
  <span class="percent percent"></span>
</div>  
 	
     </div>
     <div class="clearfix grpelem" id="u222-4"><!-- content -->
      <p>Customer Orders</p>
     </div>
    </div>
    <div class="size_fixed grpelem" id="u213"><!-- custom html -->
     
<!-- This Adobe Muse widget was created by the team at MuseFree.com -->
 <div class="u213" data-percent="<?php echo $num_orders ?>">
  <span class="percent no-percent"></span>
</div>  
 	
    </div>
    <div class="clearfix grpelem" id="u218-4"><!-- content -->
     <p>Orders</p>
    </div>
    <div class="size_fixed grpelem" id="u229"><!-- custom html -->
     
<!-- This Adobe Muse widget was created by the team at MuseFree.com -->
 <div class="u229" data-percent="<?php echo $totalproducerorders ?>">
  <span class="percent percent"></span>
</div>  
 	
    </div>
    <div class="clearfix grpelem" id="u230-4" data-mu-ie-matrix="progid:DXImageTransform.Microsoft.Matrix(M11=0.9998,M12=0.0175,M21=-0.0175,M22=0.9998,SizingMethod='auto expand')" data-mu-ie-matrix-dx="0" data-mu-ie-matrix-dy="-1"><!-- content -->
     <p>Your Orders</p>
    </div>
   </div>
   <div class="verticalspacer" data-offset-top="449" data-content-above-spacer="449" data-content-below-spacer="61"></div>
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
	

        <script>
!function(e,t){"object"==typeof exports?module.exports=t(require("jquery")):"function"==typeof define&&define.amd?define("EasyPieChart",["jquery"],t):t(e.jQuery)}(this,function(e){var t=function(e,t){var n,a=document.createElement("canvas");"undefined"!=typeof G_vmlCanvasManager&&G_vmlCanvasManager.initElement(a);var i=a.getContext("2d");a.width=a.height=t.size,e.appendChild(a);var r=1;window.devicePixelRatio>1&&(r=window.devicePixelRatio,a.style.width=a.style.height=[t.size,"px"].join(""),a.width=a.height=t.size*r,i.scale(r,r)),i.translate(t.size/2,t.size/2),i.rotate((-0.5+t.rotate/180)*Math.PI);var o=(t.size-t.lineWidth)/2;t.scaleColor&&t.scaleLength&&(o-=t.scaleLength+2),Date.now=Date.now||function(){return+new Date};var s=function(e,t,n){n=Math.min(Math.max(0,n||1),1),i.beginPath(),i.arc(0,0,o,0,2*Math.PI*n,!1),i.strokeStyle=e,i.lineWidth=t,i.stroke()},h=function(){var e,n,a=24;i.lineWidth=1,i.fillStyle=t.scaleColor,i.save();for(var a=24;a>0;--a)a%6===0?(n=t.scaleLength,e=0):(n=.6*t.scaleLength,e=t.scaleLength-n),i.fillRect(-t.size/2+e,0,n,1),i.rotate(Math.PI/12);i.restore()},d=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),l=function(){t.scaleColor&&h(),t.trackColor&&s(t.trackColor,t.lineWidth)};this.clear=function(){i.clearRect(t.size/-2,t.size/-2,t.size,t.size)},this.draw=function(e){t.scaleColor||t.trackColor?i.getImageData&&i.putImageData?n?i.putImageData(n,0,0):(l(),n=i.getImageData(0,0,t.size*r,t.size*r)):(this.clear(),l()):this.clear(),i.lineCap=t.lineCap;var a;a="function"==typeof t.barColor?t.barColor(e):t.barColor,e>100?s(a,t.lineWidth,e/1e3):s(a,t.lineWidth,e/100)}.bind(this),this.animate=function(e,n){var a=Date.now();t.onStart(e,n);var i=function(){var r=Math.min(Date.now()-a,t.animate),o=t.easing(this,r,e,n-e,t.animate);this.draw(o),t.onStep(e,n,o),r>=t.animate?t.onStop(e,n):d(i)}.bind(this);d(i)}.bind(this)},n=function(e,n){var a={barColor:"#222222",trackColor:"#E1E1E3",scaleColor:"#e1e1e3",scaleLength:0,lineCap:"round",lineWidth:15,size:152,rotate:0,animate:1e3,easing:function(e,t,n,a,i){return t/=i/2,1>t?a/2*t*t+n:-a/2*(--t*(t-2)-1)+n},onStart:function(){},onStep:function(){},onStop:function(){}};if("undefined"!=typeof t)a.renderer=t;else{if("undefined"==typeof SVGRenderer)throw new Error("Please load either the SVG- or the CanvasRenderer");a.renderer=SVGRenderer}var i={},r=0,o=function(){this.el=e,this.options=i;for(var t in a)a.hasOwnProperty(t)&&(i[t]=n&&"undefined"!=typeof n[t]?n[t]:a[t],"function"==typeof i[t]&&(i[t]=i[t].bind(this)));i.easing="string"==typeof i.easing&&"undefined"!=typeof jQuery&&jQuery.isFunction(jQuery.easing[i.easing])?jQuery.easing[i.easing]:a.easing,this.renderer=new i.renderer(e,i),this.renderer.draw(r),e.dataset&&e.dataset.percent?this.update(parseFloat(e.dataset.percent)):e.getAttribute&&e.getAttribute("data-percent")&&this.update(parseFloat(e.getAttribute("data-percent")))}.bind(this);this.update=function(e){return e=parseFloat(e),i.animate?this.renderer.animate(r,e):this.renderer.draw(e),r=e,this}.bind(this),o()};e.fn.easyPieChart=function(t){return this.each(function(){e.data(this,"easyPieChart")||e.data(this,"easyPieChart",new n(this,t))})}}),$(".u221").easyPieChart({easing:"easeOutBounce",barColor:"#222222",rackColor:"#E1E1E3",scaleColor:"#e1e1e3",scaleLength:0,lineCap:"square",lineWidth:5,size:152,onStep:function(e,t,n){$(this.el).find(".percent").text(Math.round(n))}});        </script>
		

        <script>
!function(e,t){"object"==typeof exports?module.exports=t(require("jquery")):"function"==typeof define&&define.amd?define("EasyPieChart",["jquery"],t):t(e.jQuery)}(this,function(e){var t=function(e,t){var n,a=document.createElement("canvas");"undefined"!=typeof G_vmlCanvasManager&&G_vmlCanvasManager.initElement(a);var i=a.getContext("2d");a.width=a.height=t.size,e.appendChild(a);var r=1;window.devicePixelRatio>1&&(r=window.devicePixelRatio,a.style.width=a.style.height=[t.size,"px"].join(""),a.width=a.height=t.size*r,i.scale(r,r)),i.translate(t.size/2,t.size/2),i.rotate((-0.5+t.rotate/180)*Math.PI);var o=(t.size-t.lineWidth)/2;t.scaleColor&&t.scaleLength&&(o-=t.scaleLength+2),Date.now=Date.now||function(){return+new Date};var s=function(e,t,n){n=Math.min(Math.max(0,n||1),1),i.beginPath(),i.arc(0,0,o,0,2*Math.PI*n,!1),i.strokeStyle=e,i.lineWidth=t,i.stroke()},h=function(){var e,n,a=24;i.lineWidth=1,i.fillStyle=t.scaleColor,i.save();for(var a=24;a>0;--a)a%6===0?(n=t.scaleLength,e=0):(n=.6*t.scaleLength,e=t.scaleLength-n),i.fillRect(-t.size/2+e,0,n,1),i.rotate(Math.PI/12);i.restore()},d=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),l=function(){t.scaleColor&&h(),t.trackColor&&s(t.trackColor,t.lineWidth)};this.clear=function(){i.clearRect(t.size/-2,t.size/-2,t.size,t.size)},this.draw=function(e){t.scaleColor||t.trackColor?i.getImageData&&i.putImageData?n?i.putImageData(n,0,0):(l(),n=i.getImageData(0,0,t.size*r,t.size*r)):(this.clear(),l()):this.clear(),i.lineCap=t.lineCap;var a;a="function"==typeof t.barColor?t.barColor(e):t.barColor,e>100?s(a,t.lineWidth,e/1e3):s(a,t.lineWidth,e/100)}.bind(this),this.animate=function(e,n){var a=Date.now();t.onStart(e,n);var i=function(){var r=Math.min(Date.now()-a,t.animate),o=t.easing(this,r,e,n-e,t.animate);this.draw(o),t.onStep(e,n,o),r>=t.animate?t.onStop(e,n):d(i)}.bind(this);d(i)}.bind(this)},n=function(e,n){var a={barColor:"#222222",trackColor:"#E1E1E3",scaleColor:"#e1e1e3",scaleLength:0,lineCap:"round",lineWidth:15,size:152,rotate:0,animate:1e3,easing:function(e,t,n,a,i){return t/=i/2,1>t?a/2*t*t+n:-a/2*(--t*(t-2)-1)+n},onStart:function(){},onStep:function(){},onStop:function(){}};if("undefined"!=typeof t)a.renderer=t;else{if("undefined"==typeof SVGRenderer)throw new Error("Please load either the SVG- or the CanvasRenderer");a.renderer=SVGRenderer}var i={},r=0,o=function(){this.el=e,this.options=i;for(var t in a)a.hasOwnProperty(t)&&(i[t]=n&&"undefined"!=typeof n[t]?n[t]:a[t],"function"==typeof i[t]&&(i[t]=i[t].bind(this)));i.easing="string"==typeof i.easing&&"undefined"!=typeof jQuery&&jQuery.isFunction(jQuery.easing[i.easing])?jQuery.easing[i.easing]:a.easing,this.renderer=new i.renderer(e,i),this.renderer.draw(r),e.dataset&&e.dataset.percent?this.update(parseFloat(e.dataset.percent)):e.getAttribute&&e.getAttribute("data-percent")&&this.update(parseFloat(e.getAttribute("data-percent")))}.bind(this);this.update=function(e){return e=parseFloat(e),i.animate?this.renderer.animate(r,e):this.renderer.draw(e),r=e,this}.bind(this),o()};e.fn.easyPieChart=function(t){return this.each(function(){e.data(this,"easyPieChart")||e.data(this,"easyPieChart",new n(this,t))})}}),$(".u213").easyPieChart({easing:"easeOutBounce",barColor:"#222222",rackColor:"#E1E1E3",scaleColor:"#e1e1e3",scaleLength:0,lineCap:"square",lineWidth:5,size:152,onStep:function(e,t,n){$(this.el).find(".percent").text(Math.round(n))}});        </script>
		

        <script>
!function(e,t){"object"==typeof exports?module.exports=t(require("jquery")):"function"==typeof define&&define.amd?define("EasyPieChart",["jquery"],t):t(e.jQuery)}(this,function(e){var t=function(e,t){var n,a=document.createElement("canvas");"undefined"!=typeof G_vmlCanvasManager&&G_vmlCanvasManager.initElement(a);var i=a.getContext("2d");a.width=a.height=t.size,e.appendChild(a);var r=1;window.devicePixelRatio>1&&(r=window.devicePixelRatio,a.style.width=a.style.height=[t.size,"px"].join(""),a.width=a.height=t.size*r,i.scale(r,r)),i.translate(t.size/2,t.size/2),i.rotate((-0.5+t.rotate/180)*Math.PI);var o=(t.size-t.lineWidth)/2;t.scaleColor&&t.scaleLength&&(o-=t.scaleLength+2),Date.now=Date.now||function(){return+new Date};var s=function(e,t,n){n=Math.min(Math.max(0,n||1),1),i.beginPath(),i.arc(0,0,o,0,2*Math.PI*n,!1),i.strokeStyle=e,i.lineWidth=t,i.stroke()},h=function(){var e,n,a=24;i.lineWidth=1,i.fillStyle=t.scaleColor,i.save();for(var a=24;a>0;--a)a%6===0?(n=t.scaleLength,e=0):(n=.6*t.scaleLength,e=t.scaleLength-n),i.fillRect(-t.size/2+e,0,n,1),i.rotate(Math.PI/12);i.restore()},d=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}(),l=function(){t.scaleColor&&h(),t.trackColor&&s(t.trackColor,t.lineWidth)};this.clear=function(){i.clearRect(t.size/-2,t.size/-2,t.size,t.size)},this.draw=function(e){t.scaleColor||t.trackColor?i.getImageData&&i.putImageData?n?i.putImageData(n,0,0):(l(),n=i.getImageData(0,0,t.size*r,t.size*r)):(this.clear(),l()):this.clear(),i.lineCap=t.lineCap;var a;a="function"==typeof t.barColor?t.barColor(e):t.barColor,e>100?s(a,t.lineWidth,e/1e3):s(a,t.lineWidth,e/100)}.bind(this),this.animate=function(e,n){var a=Date.now();t.onStart(e,n);var i=function(){var r=Math.min(Date.now()-a,t.animate),o=t.easing(this,r,e,n-e,t.animate);this.draw(o),t.onStep(e,n,o),r>=t.animate?t.onStop(e,n):d(i)}.bind(this);d(i)}.bind(this)},n=function(e,n){var a={barColor:"#222222",trackColor:"#E1E1E3",scaleColor:"#e1e1e3",scaleLength:0,lineCap:"round",lineWidth:15,size:152,rotate:0,animate:1e3,easing:function(e,t,n,a,i){return t/=i/2,1>t?a/2*t*t+n:-a/2*(--t*(t-2)-1)+n},onStart:function(){},onStep:function(){},onStop:function(){}};if("undefined"!=typeof t)a.renderer=t;else{if("undefined"==typeof SVGRenderer)throw new Error("Please load either the SVG- or the CanvasRenderer");a.renderer=SVGRenderer}var i={},r=0,o=function(){this.el=e,this.options=i;for(var t in a)a.hasOwnProperty(t)&&(i[t]=n&&"undefined"!=typeof n[t]?n[t]:a[t],"function"==typeof i[t]&&(i[t]=i[t].bind(this)));i.easing="string"==typeof i.easing&&"undefined"!=typeof jQuery&&jQuery.isFunction(jQuery.easing[i.easing])?jQuery.easing[i.easing]:a.easing,this.renderer=new i.renderer(e,i),this.renderer.draw(r),e.dataset&&e.dataset.percent?this.update(parseFloat(e.dataset.percent)):e.getAttribute&&e.getAttribute("data-percent")&&this.update(parseFloat(e.getAttribute("data-percent")))}.bind(this);this.update=function(e){return e=parseFloat(e),i.animate?this.renderer.animate(r,e):this.renderer.draw(e),r=e,this}.bind(this),o()};e.fn.easyPieChart=function(t){return this.each(function(){e.data(this,"easyPieChart")||e.data(this,"easyPieChart",new n(this,t))})}}),$(".u229").easyPieChart({easing:"easeOutBounce",barColor:"#222222",rackColor:"#E1E1E3",scaleColor:"#e1e1e3",scaleLength:0,lineCap:"square",lineWidth:5,size:152,onStep:function(e,t,n){$(this.el).find(".percent").text(Math.round(n))}});        </script>
		
   </body>
</html>
