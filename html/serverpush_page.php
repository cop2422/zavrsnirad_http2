

<?php

function imageLoad($imagehtml) {
    return <<<HTML
{$imagehtml}
<br/>
</table>
HTML;
}
function pushImage($uri) {
    header("Link: <{$uri}>; rel=preload; as=image", false);
    return <<<HTML
<img src="{$uri}" style="width:400px;height:200px;">
HTML;
}
$image1 = pushImage("/pictures/planet.jpg");
$image2 = pushImage("/pictures/doge.jpg");

?>


<html>
<head>
	<title>demo server</title>
</head>
<body>
	
<h1>Primjer Server push-a </h1>


<p> Nalazite se na web stranici otvorenoj <b>HTTP/1.1</b> vezom.<br><br>

<br>Za bolji dojam prednosti koje server push pruza potrebno je otvoriti razvojne alate unutar zadanog web preglednika <br>
te pogledati zaglavlja zahtjeva za dohvat slika. Kod HTTP/2 veze zaglavlja tih zahtjeva ne postoje jer ne <br>
postoji ni sami zahtjevi, dok se kod HTTP/1.1 veze prikazuju puna zaglavlja.

</p><br>

<div id="divImages">
		<?php  
		echo imageLoad($image1);
		echo imageLoad($image2);

		?>
</div>
<br><hr>
<button onclick="reload();">Ponovno ucitaj</button>
<button onclick="goBack();">Natrag</button>
&nbsp &nbsp &nbsp &nbsp 
<button class="button" onclick="loadhttp2();">Prijedi na HTTP/2</button>


<br>
</body>
<script type="text/javascript">
	function goBack() {
		location.href = "https://localhost/index.html";
	}
	function reload() {
		location.reload();
	}
	function loadhttp2() {
					location.href = 'https://localhost/serverpush_page.php';
				}
</script>
<style type="text/css">		
	.button {
		outline: black solid thick;
		}
	</style>
</html>
