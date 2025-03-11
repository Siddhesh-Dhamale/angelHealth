<?php /*?><?php
ob_start("minifier");
function minifier($code) {
    $search = array(
          
        // Remove whitespaces after tags
        '/\>[^\S ]+/s',
          
        // Remove whitespaces before tags
        '/[^\S ]+\</s',
          
        // Remove multiple whitespace sequences
        //'/(\s)+/s',
          
        // Removes comments
       //'/<!--(.|\s)*?-->/'
    );
    $replace = array('>', '<', '\\1');
    $code = preg_replace($search, $replace, $code);
    return $code;
};
?><?php */?>
<!doctype html>

<html lang="en-US" prefix="og: https://ogp.me/ns#">
<head>
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Meta -->
<meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, user-scalable=yes">
<meta name="referrer" content="origin-when-crossorigin">
<!-- Favicon -->
<link rel="shortcut icon" href="assets/templates/img/favicon.png">	
<link rel="shortcut icon" href="assets/templates/img/favicon.png" type="image/x-icon">
<link rel="icon" href="assets/templates/img/favicon.png" type="image/x-icon">
	<!-- Meta Pixel Code -->
<!--<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1636011903871779');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1636011903871779&ev=PageView&noscript=1"
/></noscript>-->
<!-- End Meta Pixel Code -->
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16475801570"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'AW-16475801570');
</script>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MN4GRLKQDG"></script>

<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'G-MN4GRLKQDG');
</script>
	
	
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PC5LRRZM');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T5GS4BPC');</script>
<!-- End Google Tag Manager -->
