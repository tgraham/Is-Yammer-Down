<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Is Yammer Down?</title>
<style type="text/css">
#container {
  width: 850px;
  height: 400px;
  padding-top: 200px;
  margin: auto;
}

h1 {
  font-size: 500%;
  color: #333333;
  text-align: center;
}
</style>
</head>
<body>
<?php
  $homepage = file_get_contents('https://www.yammer.com/login');
?>
<div id="container">
<?php
  if($http_response_header[0] == "HTTP/1.1 200 OK") { $reply = "All Systems Are GO!!"; } else { $reply = "Something seems awry!!"; }
?>
  <h1><?php echo $reply; ?></h1>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-4735560-2");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>