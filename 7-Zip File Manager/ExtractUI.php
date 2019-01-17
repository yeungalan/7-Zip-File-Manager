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
						<label>Extract to:</label>
						<input type="text">
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
						<label>Password:</label>
						<input type="password">
					</div>
				</div>
			</div>
			
			<div class="sixteen wide column">
				<div class="ts form">
					 <div class="ts checkbox">
						<input id="agree" type="checkbox">
						<label for="agree">Eliminate duplication of root folder</label>
					</div>
				</div>
			</div>

			
			<div class="eight wide column">
				<div class="ts form">
					<div class="inline field">
						<label>Overwrite mode:</label>
						  <select name="mode">
							<option value="">Overwrite without prompt</option>
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