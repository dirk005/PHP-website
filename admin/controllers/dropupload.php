<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>

		<!-- Google web fonts -->
		<link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

		<!-- The main CSS file -->
		<link href="assets/css/style.css" rel="stylesheet" />
	</head>

	<body>

	<?php
//check if required data is available
$entryDataFound = isset($entryData);
if ($entryDataFound === false) {
    //default values for an empty editor
    $entryData = new StdClass();
    $entryData -> Car_id = 0;
    $entryData -> Title = "";
    $entryData -> Make = "";
    $entryData -> Mileage = "";
    $entryData -> Model = "";
    $entryData -> Year = "";
    $entryData -> Transmission = "";
    $entryData -> Price = "";
    $entryData -> Details = "";
    $entryData -> img1 = "";
    $entryData -> img2 = "";
    $entryData -> img3 = "";
    $entryData -> img4 = "";
    $entryData -> img5 = "";
    $entryData -> img6 = "";
    $entryData -> img7 = "";
    $entryData -> img8 = "";
    $entryData -> img9 = "";
    $entryData -> message = "";
}
?>
		<form id="upload" method="post" action="upload.php" enctype="multipart/form-data" onsubmit="return Getimage()">

			<div class="form-group drop">
				<label class="control-label col-sm-2" >Upload Images</label>
				<div class="col-sm-3">
					<input class="btn" type='file' name='image' accept='image/jpeg/png/gif' onchange="document.getElementById('submitImage').click();"/>
				</div>
				<div class="col-md-7">
					<button class="btn btn-default" type='submit' value='Add' name='new-image' id="submitImage"  hidden>
						Add
					</button>
				</div>
			</div>
			
			<!-- <div id="drop">

			<a>Browse</a>
			<input type="file" name="upl" multiple />
			</div>

			<ul>
			<!-- The file uploads will be shown here
			</ul>-->

		</form>

		<!-- JavaScript Includes
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/jquery.knob.js"></script>-->

		<!-- jQuery File Upload Dependencies
		<script src="assets/js/jquery.ui.widget.js"></script>
		<script src="assets/js/jquery.iframe-transport.js"></script>
		<script src="assets/js/jquery.fileupload.js"></script>
		-->
		<!-- Our main JS file -->
		<script src="assets/js/script.js"></script>
		
	</body>

</html>