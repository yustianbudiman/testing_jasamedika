<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div id="app">
  <example></example>
</div>
<script src={{ asset("js/app.js") }}></script>
</body>
</html>

