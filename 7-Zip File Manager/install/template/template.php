<html>
<head>
	<link rel="stylesheet" href="../../../script/tocas/tocas.css">
	<script src="../../../script/tocas/tocas.js"></script>
	<script src="../../../script/jquery.min.js"></script>
	<script src="../../../script/ao_module.js"></script>
	<style>
	body {
		overflow-y:hidden;
	}
	.header{
		position: absolute;
		font-size: 20px;
		top: 30%;
		left: 5%;
	}
	.subheader{
		position: absolute;
		top: 50%;
		left: 5%;
	}
	</style>
</head>
<body>
	<div class="ts grid">
		<div class="sixteen wide column" style="height:16%;overflow:hidden">
			<img src="background.png" style="height:auto;width:100%">
			<div class="header">7-Zip File Manager</div>
			<div class="subheader">Powered by ArOZ</div>
		</div>
		<div class="sixteen wide column" style="height:60%;overflow:hidden">
			<div style="width:90%;left:5%">
				<table class="ts sortable large table">
					<thead>
						<tr>
							<th>Item</th>
							<th>Value</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Package name</td>
							<td>7-Zip File Manager</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		</div>
		<div id="menubar" style="overflow:hidden;position: absolute;bottom: 3%;width:100%">
			<div class="ts section divider"></div>
			<div class="ts separated buttons" style="float: right;right:5%">
				<button class="ts positive basic button">Next</button>
				<button class="ts negative basic button">Cancel</button>
			</div>
		</div>
</body>
<script>
if(ao_module_virtualDesktop){
	$("#menubar").css("bottom","8%");
}
</script>
</html>