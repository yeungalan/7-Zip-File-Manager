<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<script src="../script/jquery.min.js"></script>
    <link rel="stylesheet" href="../script/tocas/tocas.css">
	<script type='text/javascript' src="../script/tocas/tocas.js"></script>
	<title>7z File Manager</title>
	<style>
	body{
		background-color:white
	}
	.ts.form .inline.field label {
		min-width: 50%;
	}
	.ts.basic.dropdown, .ts.form select {
		max-width: 50%;
	}
	</style>
</head>
<body>
	<div class="ts container">
		<div class="ts grid">
			<div class="sixteen wide column">
			<br>
				<div class="ts form">
					<div class="field">
						<label>Archive: %path%</label>
						<input type="text">
					</div>
				</div>
			</div>
			
			<div class="eight wide column">
				<div class="ts form">
					<div class="inline field">
						<label>Archive format:</label>
						  <select name="format">
							<option value="7z">7z</option>
							<option value="tar">tar</option>
							<option value="zip">zip</option>
						  </select>
					</div>
				</div>
			</div>
			<div class="eight wide column">
				<div class="ts form">
					<div class="inline field">
						<label>Update mode:</label>
						  <select name="mode">
							<option value="">Add and replace files</option>
							<option value="">Update and add files</option>
							<option value="">Freshen existing files</option>
							<option value="">Synchronize files</option>
						  </select>
					</div>
				</div>
			</div>
			
			<div class="eight wide column">
				<div class="ts form">
					<div class="inline field">
						<label>Compression level:</label>
						  <select name="level">
							<option value="">Store</option>
							<option value="">Fastest</option>
							<option value="">Fast</option>
							<option value="">Normal</option>
							<option value="">Maximum</option>
							<option value="">Ultra</option>
						  </select>
					</div>
				</div>
			</div>
			<div class="eight wide column">
				<div class="ts form">
					<div class="inline field">
						<label>Path mode:</label>
						  <select name="pathmode">
							<option value="">Relative pathnames</option>
							<option value="">Full pathnames</option>
							<option value="">Absolute pathnames</option>
						  </select>
					</div>
				</div>
			</div>
			
			<div class="eight wide column">
				<div class="ts form">
					<div class="inline field">
						<label>Compression method:</label>
						  <select name="method">
							<option value="">LZMA2</option>
							<option value="">LZMA</option>
							<option value="">PPMd</option>
							<option value="">BZip2</option>
						  </select>
					</div>
				</div>
			</div>
			<div class="eight wide column"></div>

			<div class="eight wide column"></div>
			<div class="eight wide column">
				<button class="ts basic button" style="width:45%">OK</button>
				&nbsp;&nbsp;&nbsp;&nbsp;
				<button class="ts basic button" style="width:45%">Cancel</button>
			</div>
		</div>
	</div>
</body>
</html>