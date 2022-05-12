<?php if (!($_SERVER["HTTPS"])) {
  $redirect = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
  header("HTTP/1.1 301 Moved Permanently");
  header("Location: $redirect");
} ?>

<?php
  $remote_ip = $_SERVER["REMOTE_ADDR"];
  $ch = curl_init("http://ip-api.com/json/$remote_ip");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $data = fread($ch);
  $ip_data = json_decode(curl_exec($ch), true);
?>

<html>
<head>
<title>Isaac Diamond</title>

<style>a {font-size: 1.1em}</style>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
 Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-72992612-1', 'auto');
ga('send', 'pageview');

</script>
</head>

<body style="padding: 25px;">
<div>
<h1> It works! Welcome to Isaac's website. </h1>

<h2> The current time is: <?php echo(date("g:i:s a")); ?>, GMT.
  <?php date_default_timezone_set('America/Los_Angeles');
  echo(date("g:i:s a")); ?>, PST</h2>
<h2> You are visiting from: <?php echo($_SERVER["REMOTE_ADDR"])?>. My guess is
that's <?php echo $ip_data["org"] ?> in <?php echo $ip_data["city"] ?>,
<?php echo $ip_data["country"]
?>.</h2>

<a href="https://www.facebook.com/isaac.diamond.5">Facebook</a>

<a href="https://linkedin.com/in/isaacdiamond">LinkedIn</a>

<a href="https://twitter.com/isaacinthesky">Twitter</a>

<a href="https://github.com/isaacd9/">GitHub</a>

<a href="https://blog.isaac.diamonds">Blog</a>

<a href="https://idd.photography">Photos</a>

<a href="https://keybase.io/idiamond">Keybase</a>

<a href="resume.pdf">Resume</a>

<a href="pubkey.php">PGP</a>

<br>
<br>


<span style="font-size: .5em">
Copyright (c) 2017 Isaac Diamond. Verbatim copying and distribution of this
entire article are permitted worldwide, without royalty, in any medium,
provided this notice is preserved.
</span>

<br>
<br>

<a href="https://www.eff.org/files/2016/11/01/2017mb.png"><img height=20px
src="https://www.eff.org/files/2016/11/01/2017mb.png" /></a>

<a href="aclu.png"><img height=20px src="aclu.png" /></a>

</div>
</body>
</html>

