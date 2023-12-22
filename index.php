<!DOCTYPE html>
<html>
<head>
	<title>Jayss3 - CSS Framework</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="dist/main.css">
	<link rel="stylesheet" type="text/css" href="dist/jayss-size.css?v=<?=time()?>">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<style type="text/css">
		div{
			/*background: pink;*/
			margin: 1em;
		}
	</style>
	
	<script type="text/javascript">
		size = [0,'px','xs','vs','s','m','rm','l','vl','xl','2xl','3xl','4xl','5xl','6xl'];
	</script>

	<div id="thePadding"></div>
	<hr>
	<script type="text/javascript">
		html = ``
		for(let i of size){
			html += `
			<div class='padding-${i}' style="background:palegreen">
			padding-${i}
			</div>
			`
		}
		thePadding.innerHTML = html
	</script>

	<div id="thePaddingHzt"></div>
	<hr>
	<script type="text/javascript">
		html = ``
		for(let i of size){
			html += `
			<div class='padding-${i}-hzt' style="background:paleturquoise">
			padding-${i}-hzt
			</div>
			`
		}
		thePaddingHzt.innerHTML = html
	</script>

	<div id="thePaddingVtc"></div>
	<hr>
	<script type="text/javascript">
		html = ``
		for(let i of size){
			html += `
			<div class='padding-${i}-vtc' style="background:pink">
			padding-${i}-vtc
			</div>
			`
		}
		thePaddingVtc.innerHTML = html
	</script>

	<!-- Margin -->
	<div id="the_margin"></div>
	<hr>
	<script type="text/javascript">
		html = ``
		for(let i of size){
			html += `
			<div class='margin-${i}' style="background:palegreen">
			padding-${i}
			</div>
			`
		}
		the_margin.innerHTML = html
	</script>

	<div id="the_margin_hzt"></div>
	<hr>
	<script type="text/javascript">
		html = ``
		for(let i of size){
			html += `
			<div class='margin-${i}-hzt' style="background:paleturquoise">
			margin-${i}-hzt
			</div>
			`
		}
		the_margin_hzt.innerHTML = html
	</script>

	<div id="the_margin_vtc"></div>
	<hr>
	<script type="text/javascript">
		html = ``
		for(let i of size){
			html += `
			<div class='margin-${i}-vtc' style="background:pink">
			margin-${i}-vtc
			</div>
			`
		}
		the_margin_vtc.innerHTML = html
	</script>

	<!-- height -->
	<div id="the_height"></div>
	<hr>
	<script type="text/javascript">
		html = ``
		for(let i of size){
			html += `
			<div class='h-${i}' style="background:violet">
			h-${i}
			</div>
			`
		}
		the_height.innerHTML = html
	</script>

	<!-- Box -->

	<pre id="box"></pre>
	<script type="text/javascript">
		html = ``
		for(let i of size){
			html += `
			.h-${i}{
				--jss-height:var(--jsz-ab-${i});
			}
			`
		}
		box.innerHTML = html
	</script>
</body>
</html>