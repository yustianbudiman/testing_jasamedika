<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset("css/app.css")); ?>">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<body>
<div id="app">
  <example></example>
</div>
<script src=<?php echo e(asset("js/app.js")); ?>></script>
</body>
</html>

