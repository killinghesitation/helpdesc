<!DOCTYPE html>
<html lang="en">
<head>
	<title>Transform MAC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	@import url('https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900');
	</style>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<!--
	<header>
		<h1> Type in the MAC-address</h1>
	</header>
	<main>
		<input type="text" name="inputMac" id="inputMac" maxlength="12" autocomplete="off">
		<!-- 
		<span class="radio-input"><input type="radio" name="toUp" id="toUp" checked="">to upper case</span>
		<span class="radio-input"><input type="radio" name="toLow" id="toLow">to lower case</span>
		
		<div class="transform-result"> 1q2e3a4d5b6e</div>
		<button id="copy">Copy</button>
		<button id="clear">Clear</button>
	</main>

<!--
google adaptive grid
-->
	<div class="grid-cont">
		<section class="grid_outer-chapter"> 
			<h1 class="chapter-title">Type in the <span class="bolder">MAC-address</span></h1>
			<div class="chapter-content">
				<div class="article-content">
					<input type="text" name="inputMac" id="inputMac" maxlength="12" autocomplete="off" onkeyup="transformMac()">
					<div class="transform-result" id="transform-result"> </div>
					<div><button id="copy">Copy</button></div>
					<div><button id="clear">Clear</button></div>
				</div>
			</div>
		</section>
	</div>
<script>
    function transformMac() {
        var macadd = document.getElementById("inputMac").value;
        macadd = macadd.toUpperCase();
        macadd.split();
        var result;
        switch (macadd.length) {
            case 0:
                result = "";
                break;
            case 1:
                result = macadd[0];
                break;
            case 2:
                result = macadd[0] + macadd[1];
                break;
            case 3:
                result = macadd[0] + macadd[1] + ':' + macadd[2];
                break;
            case 4:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3];
                break;
            case 5:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3] + ':' + macadd[4];
                break;
            case 6:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3] + ':' + macadd[4] + macadd[5];
                break;
            case 7:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3] + ':' + macadd[4] + macadd[5] + ':' + macadd[6];
                break;
            case 8:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3] + ':' + macadd[4] + macadd[5] + ':' + macadd[6] + macadd[7];
                break;
            case 9:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3] + ':' + macadd[4] + macadd[5] + ':' + macadd[6] + macadd[7] + ':' + macadd[8];
                break;
            case 10:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3] + ':' + macadd[4] + macadd[5] + ':' + macadd[6] + macadd[7] + ':' + macadd[8] + macadd[9];
                break;
            case 11:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3] + ':' + macadd[4] + macadd[5] + ':' + macadd[6] + macadd[7] + ':' + macadd[8] + macadd[9] + ':' + macadd[10];
                break;
            case 12:
                result = macadd[0] + macadd[1] + ':' + macadd[2] + macadd[3] + ':' + macadd[4] + macadd[5] + ':' + macadd[6] + macadd[7] + ':' + macadd[8] + macadd[9] + ':' + macadd[10] + macadd[11];
                break;
        }
        document.getElementById("transform-result").innerHTML = result;
    }
</script>
</body>
</html>
