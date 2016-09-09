<html >
<title>demo server</title>
<head>
<script type="text/javascript">
		
				function goBack() {
					location.href = 'https://localhost/serverpush_page.php';
				}
				function reload() {
					location.reload();
				}
		</script>
		<b>Zahtjev se salje na adresu https://localhost/serverpush_page.php <br>Odgovor od strane HTTP/2 servera (<i>response headers</i>):</b><hr>
    
<body> 
<div id="headerInfo"><p>
	<pre>
<?php 

$url = 'https://localhost/serverpush_page.php';

print_r(get_headers($url));
?>
</pre>
</p><br></div>
<div>
<hr>
<button class="button" onclick="reload();">Reload</button>
<button class="button" onclick="goBack();">Go back</button>
<div>
	<br><br>
	


</body>
</html>
