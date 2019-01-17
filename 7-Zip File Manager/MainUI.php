<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<script src="../script/jquery.min.js"></script>
    <link rel="stylesheet" href="../script/tocas/tocas.css">
	<script type='text/javascript' src="../script/tocas/tocas.js"></script>
	<script type='text/javascript' src="../script/ao_module.js"></script>
	<title>7z File Manager</title>
	<style>
	body{
		background-color:white;
		-webkit-user-select: none; /* Safari */        
		-moz-user-select: none; /* Firefox */
		-ms-user-select: none; /* IE10+/Edge */
		user-select: none; /* Standard */
	}
	tr:hover { 
		background-color: #fafafa;
	}
	@media (max-width: 767px){
		.ts.bottom.right.snackbar.active{
			width: 100% !important;
			bottom: 0px !important;
			right: 0px !important;
		}
		.ts.snackbar:not(.inline) .content {
		    margin-bottom: 7px;
		}
	}
	</style>
</head>
<body>
<div class="ts labeled icon menu" style="box-shadow: 0px 0px 0px 0 #000000 !important;">
    <a class="item" onclick="msgbox('Error: Operation is not supported','red','white')">
        <i class="plus icon"></i> Add
    </a>
    <a class="item" onclick="functionbar_extract();">
        <i class="minus icon"></i> Extract
    </a>
    <a class="item" onclick="msgbox('Warning: Not implemented','yellow','Black')">
        <i class="chevron down icon"></i> Test
    </a>
    <a class="item" onclick="functionbar_extract();">
        <i class="copy icon"></i> Copy
    </a>
	<a class="item" onclick="functionbar_extract();">
        <i class="move icon"></i> Move
    </a>
	<a class="item"  onclick="msgbox('Error: Operation is not supported','red','white')">
        <i class="remove icon"></i> Delete
    </a>
	<a class="item" onclick="functionbar_info();">
        <i class="notice icon"></i> Info
    </a>
</div>
<div class="ts breadcrumb" style="left: 20px;" id="breadcrumb">
	<button class="ts icon mini basic button" path="" attr="Dir" id="returnBtn" onclick="load(this)">
		<i class="level up icon"></i>
	</button>
		<p href="#!" class="section"><?php echo $_GET["file"] ?></p>
</div>
<table class="ts borderless table">
    <thead>
        <tr id="thead">
        </tr>
    </thead>
    <tbody id="tbody">
    </tbody>
</table>

<!-- use for displaying dialog , for VDI user , use VDI module instead -->
<div class="ts modals dimmer">
    <dialog id="modal" class="ts basic modal" style="background-color: white;color: black!important" open>
        <div class="content" id="modaldata">
        </div>
    </dialog>
</div>

<div class="ts bottom right snackbar">
    <div class="content"></div>
</div>
</body>
<script>
//Global variable
var random = Math.floor((Math.random() * 10000) + 1000);
var file = "<?php echo $_GET["file"] ?>";

//for load data into table
load($(returnBtn));

function onsingleclick(htmlelement){
	$("tr").removeAttr("style");
	$(htmlelement).attr("style","background-color: #e9e9e9;");
}

function load(htmlelement){
	if($(htmlelement).attr("attr") == "Dir"){
		$("#breadcrumb").html('<button class="ts icon mini basic button" disabled><i class="level up icon"></i></button>&nbsp;<p class="section"><i class="loading circle notched icon"></i>Fetching..</p>');
		//for load data into table
		$.get("opr.php?method=l&rand=" + random + "&file=" + file + "&dir=" + $(htmlelement).attr("path"), function( raw ) {
			//clear table for pepare load data into table
			$("#thead").html("");
			$("#tbody").html("");
			var data = JSON.parse(raw); //parse it
			var header = data["Header"]; 
			//create thead
			$(data["Header"]).each(function( key, value ) {
			  $("#thead").append("<th>" + value + "</th>");//create header (thead) first
			});
			//create tbody
			$(data["Information"]).each(function( a, value ) {
				//to check if attr not exists, if not exists, assume it is an file.
				if(typeof value["Attributes"] === 'undefined'){
					var attr = "File";
				}else{
					if(value["Attributes"].includes("D")){
						var attr = "Dir";
					}else{
						var attr = "File";
					}
				}
				//create HTML structure
				var tmp = "";
				tmp = tmp + '<tr path="' + value["Path"] + '" attr="' + attr + '" ondblclick="load(this)" onclick="onsingleclick(this)">'
				$.each(data["Header"], function( a, key ) {
					if(typeof value[key] !== 'undefined'){
						tmp = tmp + "<td>" + value[key].replace(new RegExp($(htmlelement).attr("path") + "/"),"") + "</td>";
					}else{
						tmp = tmp + "<td></td>";
					}
				});
				$("#tbody").append(tmp + "</tr>");
			});
			
			//process for Prev button 
			var path = $(htmlelement).attr("path").split("/");
			var previousPath = $(htmlelement).attr("path").replace(/([^\/]+)$/, '').slice(0, -1);
			if(previousPath == $(htmlelement).attr("path")){
				previousPath = "";
			}
			console.log(previousPath);
			$("#breadcrumb").html('<button class="ts icon mini basic button" currPath="' + $(htmlelement).attr("path") + '" path="' + previousPath + '" attr="Dir" id="returnBtn" onclick="load(this)"><i class="level up icon"></i></button>&nbsp;<p href="#!" class="section">' + file +'</p><div class="divider">/</div>');
			if($(htmlelement).attr("path").length > 1){
				$.each(path, function( a, key ) {
					$("#breadcrumb").append('<p href="#!" class="section"><i class="folder icon"></i>' + key + '</p><div class="divider">/</div>');
				});
			}
		});
	}else{
		//if it was file, show it.
		showDialog("ProgressUI.php?method=e&rand=" + random + "&file=" + file + "&dir=" + $(htmlelement).attr("path"));
		random = Math.floor((Math.random() * 10000) + 1000);
	}
}

function functionbar_extract(){
	//extract files or dir , if file then pass method=e , if dir then pass method=x
	if($("[style='background-color: #e9e9e9;']").attr("attr") == "Dir"){
		showDialog("CopyNMoveUI.php?method=x&rand=" + random + "&file=" + file + "&dir=" + $($("[style='background-color: #e9e9e9;']")).attr("path"));
	}else if($("[style='background-color: #e9e9e9;']").attr("attr") == "File"){
		showDialog("CopyNMoveUI.php?method=e&rand=" + random + "&file=" + file + "&dir=" + $("[style='background-color: #e9e9e9;']").attr("path"));
	}else{
		showDialog("CopyNMoveUI.php?method=x&rand=" + random + "&file=" + file + "&dir=" + $("#returnBtn").attr("currPath"));
	}
	//generate new number for next extraction
	random = Math.floor((Math.random() * 10000) + 1000);
}

function functionbar_info(){
	showDialog("infoUI.php?file=" + file);
}

function showDialog(href){
	if(ao_module_virtualDesktop){
		ao_module_newfw('7-Zip File Manager/' + href,'7-Zip','file outline','7-ZipProgressUI');
	}else{
		$.get( href, function( data ) {
			$( "#modaldata" ).html( data );
			ts('#modal').modal("show");
		});
	}
}

function msgbox(content,bgcolor,fontcolor){
	$(".snackbar").attr("style",'background-color: ' + bgcolor + ';color:' + fontcolor);
	ts('.snackbar').snackbar({
		content: content,
		onAction: () => {
			$(".snackbar").removeAttr("style");
		}
	});
}
</script>
</html>