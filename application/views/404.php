
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>404 HTML Template by Rsm Monaem</title>
<style>
	* {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}

body {
  padding: 0;
  margin: 0;
}

#notfound {
  position: relative;
  height: 100vh;
}

#notfound .notfound {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.notfound {
  max-width: 520px;
  width: 100%;
  line-height: 1.4;
}

.notfound .notfound-404 {
  position: absolute;
  left: 0;
  top: 0;
  height: 150px;
  width: 200px;
  z-index: -1;
}

.notfound .notfound-404 h1 {
  font-family: 'Poppins', sans-serif;
  font-size: 238px;
  font-weight: 700;
  margin: 0px;
  color: #e3e3e3;
  text-transform: uppercase;
  letter-spacing: 7px;
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50% , -50%);
      -ms-transform: translate(-50% , -50%);
          transform: translate(-50% , -50%);
}

.notfound h2 {
  font-family: 'Poppins', sans-serif;
  font-size: 28px;
  font-weight: 400;
  text-transform: uppercase;
  color: #222;
  margin-top: 12px;
  margin-bottom: 15px;
}

.notfound .notfound-search {
  position: relative;
  padding-right: 123px;
  width: 100%;
  margin: 30px 0px 20px;
}

.notfound .notfound-search input {
  font-family: 'Poppins', sans-serif;
  width: 100%;
  height: 40px;
  padding: 3px 15px;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  background: #fff;
  border: 2px solid rgba(21, 23, 35, 0.2);
  -webkit-transition: 0.2s all;
  transition: 0.2s all;
}

.notfound .notfound-search input:focus {
  border-color: #57a3f8;
}

.notfound .notfound-search button {
  font-family: 'Poppins', sans-serif;
  position: absolute;
  right: 0px;
  top: 0px;
  width: 120px;
  height: 40px;
  text-align: center;
  border: none;
  background: #57a3f8;
  cursor: pointer;
  padding: 0;
  color: #fff;
  font-weight: 700;
  font-size: 18px;
}

.notfound a {
  font-family: 'Poppins', sans-serif;
  display: inline-block;
  font-weight: 700;
  border-radius: 15px;
  text-decoration: none;
  color: #57a3f8;
}

.notfound a:hover {
  color: #57a3f8;
}

.notfound a>.arrow {
  position: relative;
  top: -2px;
  border: solid #57a3f8;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  -webkit-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
          transform: rotate(135deg);
}

@media only screen and (max-width: 767px) {
  .notfound .notfound-404 {
    height: 110px;
    line-height: 110px;
  }

  .notfound .notfound-404 h1 {
    font-size: 170px;
  }

  .notfound h2 {
    font-size: 24px;
  }

  .notfound .notfound-search {
    margin: 10px 0px 20px;
  }
}

@media only screen and (max-width: 480px) {
  .notfound .notfound-404 {
    left: 40px;
  }

  .notfound .notfound-404 h1 {
    font-size: 120px;
  }

  .notfound h2 {
    font-size: 18px;
  }
}
</style>
<style id="" media="all">/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJbecnFHGPezSQ.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B09;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* devanagari */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+20F0, U+25CC, U+A830-A839, U+A8E0-A8FF, U+11B00-11B09;
}
/* latin-ext */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2) format('woff2');
  unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Poppins';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>

<link type="text/css" rel="stylesheet" href="css/style.css" />


<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<meta name="robots" content="noindex, follow">
<script nonce="60b6216e-984c-4b3c-bf2e-4db0074765f2">try{(function(w,d){!function(du,dv,dw,dx){du[dw]=du[dw]||{};du[dw].executed=[];du.zaraz={deferred:[],listeners:[]};du.zaraz.q=[];du.zaraz._f=function(dy){return async function(){var dz=Array.prototype.slice.call(arguments);du.zaraz.q.push({m:dy,a:dz})}};for(const dA of["track","set","debug"])du.zaraz[dA]=du.zaraz._f(dA);du.zaraz.init=()=>{var dB=dv.getElementsByTagName(dx)[0],dC=dv.createElement(dx),dD=dv.getElementsByTagName("title")[0];dD&&(du[dw].t=dv.getElementsByTagName("title")[0].text);du[dw].x=Math.random();du[dw].w=du.screen.width;du[dw].h=du.screen.height;du[dw].j=du.innerHeight;du[dw].e=du.innerWidth;du[dw].l=du.location.href;du[dw].r=dv.referrer;du[dw].k=du.screen.colorDepth;du[dw].n=dv.characterSet;du[dw].o=(new Date).getTimezoneOffset();if(du.dataLayer)for(const dH of Object.entries(Object.entries(dataLayer).reduce(((dI,dJ)=>({...dI[1],...dJ[1]})),{})))zaraz.set(dH[0],dH[1],{scope:"page"});du[dw].q=[];for(;du.zaraz.q.length;){const dK=du.zaraz.q.shift();du[dw].q.push(dK)}dC.defer=!0;for(const dL of[localStorage,sessionStorage])Object.keys(dL||{}).filter((dN=>dN.startsWith("_zaraz_"))).forEach((dM=>{try{du[dw]["z_"+dM.slice(7)]=JSON.parse(dL.getItem(dM))}catch{du[dw]["z_"+dM.slice(7)]=dL.getItem(dM)}}));dC.referrerPolicy="origin";dC.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(du[dw])));dB.parentNode.insertBefore(dC,dB)};["complete","interactive"].includes(dv.readyState)?zaraz.init():du.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body>
<div id="notfound">
<div class="notfound">
<div class="notfound-404">
<h1>404</h1>
</div>
<h2>Oops, The Page you are looking for can't be found!</h2>
<form class="notfound-search">
<input type="text" placeholder="Search...">
<button type="button">Search</button>
</form>
<a href="javascript:history.back()">
    <span class="arrow"></span>Go Back
</a>
</div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8622029c1972ba4d","version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>
</body>
</html>
