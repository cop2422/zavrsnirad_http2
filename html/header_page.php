<html >
<title>demo server</title>
<head>
<script type="text/javascript">
		
				function goBack() {
					location.href = 'https://localhost/index.html';
				}
				function reload() {
					location.reload();
				}
		</script>
	<b><i>Informacije prikupljene iz zaglavlja:</i></b>
	<hr>
	</head>	
<body> 

<div id="headerInfo">
	<p>
<?php 
$indicesServer = array(
'PHP_SELF', 
'REQUEST_METHOD',
'SERVER_PROTOCOL', 
'SERVER_ADDR', 
'SERVER_NAME', 
'SERVER_SOFTWARE', 
'DOCUMENT_ROOT', 
'HTTP_ACCEPT', 
'HTTP_ACCEPT_ENCODING', 
'HTTP_ACCEPT_LANGUAGE', 
'HTTP_CONNECTION', 
'HTTP_HOST', 
'HTTP_REFERER', 
'HTTP_USER_AGENT', 
'HTTPS', 
'REMOTE_ADDR',   
'SCRIPT_FILENAME', 
'SERVER_ADMIN', 
'SERVER_PORT', 
'SERVER_SIGNATURE', 
'REQUEST_URI', 
'GATEWAY_INTERFACE', 
'REQUEST_TIME', 
'REQUEST_TIME_FLOAT', 
'PHP_AUTH_DIGEST', 
'PHP_AUTH_USER', 
'PHP_AUTH_PW', 
'AUTH_TYPE', 
'PATH_INFO', 
'ORIG_PATH_INFO') ; 

echo '<table cellpadding="2">' ; 
foreach ($indicesServer as $arg) { 
    if (isset($_SERVER[$arg])) { 
        echo '<tr><td>'.$arg.'</td><td>' . $_SERVER[$arg] . '</td></tr>' ; 
    } 
    else { 
        echo '<tr><td>'.$arg.'</td><td>-</td></tr>' ; 
    } 
} 
echo '</table>' ; 

?>
</p></div>
<div>
<hr>
<button class="button" onclick="reload();">Ponovno ucitaj</button>
<button class="button" onclick="goBack();">Natrag</button>
<div>
	<br><br>
	


</body>
</html>
