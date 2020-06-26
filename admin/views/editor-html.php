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

<div class="container">
		<form  class="form-horizontal " role="form" method='post' action='admin.php?page=editor' id='editor' >
			<div class="form-header">
				<span class="req-into"> Vehicle Details</span>
			</div>
			<input type='hidden' name='id' value='<?php echo $entryData->Car_id ?>'/>
			<div class="form-group">
				<label class="control-label col-sm-2" for="title">Title</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="title" id="title" placeholder="Enter Title " value='<?php echo $entryData->Title ?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="make">Make</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="make" id="make" placeholder="Enter Make" value='<?php echo $entryData->Make ?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="mileage">Mileage</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="mileage" id="mileage" placeholder="Enter Mileage" value='<?php echo $entryData->Mileage ?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="model">Model</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="model" id="model" placeholder="Enter Model" value='<?php echo $entryData->Model ?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="Year">Year</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="Year" id="Year" placeholder="Enter Year" value='<?php echo $entryData->Year ?>'>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="transmission">Transmission </label>
				<div class="col-sm-10">
					<select class="form-control" name="transmission" id="transmission" >
						<option  <?php
						if ($entryData -> Transmission == 'Manual') {echo("selected");
						}
                    ?> >Manual</option>
						<option <?php
						if ($entryData -> Transmission == 'Automatic') {echo("selected");
						}
                        ?> >Automatic</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="price">Price</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="price" id="price" placeholder="Enter Price" value='<?php echo $entryData->Price ?>' >
				</div>
			</div>			
			<div class="form-group">
				<label class="control-label col-sm-2" for="ExtraDetails">Additional Details </label>
				<div class="col-sm-10">
					<textarea class="form-control" rows="5" name="ExtraDetails" id="ExtraDetails" > <?php echo $entryData->Details ?> </textarea>
				</div>
			</div>
			
			
   	
   	 <div class="row">
<?php
if ($entryData -> img1 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img1 ?> " >
	</div>

<?php
} else{
?>
        	<iframe id="iframe1" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0"  scrolling="no"></iframe>
        	<?php
			}
 ?>
 <?php
if ($entryData -> img2 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img2 ?> " >
	</div>

<?php
} else{
?>
        	<iframe id="iframe2" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0" scrolling="no" ></iframe>
        	   	<?php
				}
 ?>
 <?php
if ($entryData -> img3 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img3 ?> ">
	</div>

<?php
} else{
?>
    
        	<iframe  id="iframe3" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0" scrolling="no" ></iframe>
  	        	   	<?php
						}
 ?>
 <?php
if ($entryData -> img4 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img4 ?> " >
	</div>

<?php
} else{
?>
  
        	<iframe id="iframe4" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0" scrolling="no" ></iframe>
        	        	   	<?php
							}
 ?>
 <?php
if ($entryData -> img5 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img5 ?> " >
	</div>

<?php
} else{
?>
  
        	<iframe id="iframe5" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0" scrolling="no" ></iframe>
        	        	   	<?php
							}
 ?>
 <?php
if ($entryData -> img6 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img6 ?> " >
	</div>

<?php
} else{
?>
  
        	<iframe id="iframe6" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0" scrolling="no" ></iframe>
        	        	   	<?php
							}
 ?>
 <?php
if ($entryData -> img7 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img7 ?> " >
	</div>

<?php
} else{
?>
  
        	<iframe id="iframe7" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0" scrolling="no" ></iframe>
        	        	   	<?php
							}
 ?>
 <?php
if ($entryData -> img8 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img8 ?> " >
	</div>

<?php
} else{
?>
  
        	<iframe id="iframe8" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0" scrolling="no" ></iframe>
        	        	   	<?php
							}
 ?>
 <?php
if ($entryData -> img9 != '') {

?>
 	<div class="thumbnail col-lg-3 col-md-5 col-sm-12" frameborder="0" scrolling="no">
	   
		<img src="<?php echo $entryData->img9 ?> " >
	</div>

<?php
} else{
?>
  
       	 	<iframe id="iframe9" class="col-lg-3 col-md-5 col-sm-12" src="admin/controllers/dropupload.php" frameborder="0" scrolling="no" ></iframe>
       	 	  	        	   	<?php
										}
 ?>
		</div>


   		  
   		    <!-- set images for database -->
   		    <input type="hidden" class="form-control" name="img1" id="img1"  value='<?php echo $entryData->img1 ?>'>
   		     <!--<input type="hidden" class="form-control" name="img1" id="img1"  value='<?php echo $entryData->img1 ?>'>-->
   		    <input type="hidden" class="form-control" name="img2" id="img2"  value='<?php echo $entryData->img2 ?>'>
   		    <input type="hidden"  class="form-control" name="img3" id="img3"  value='<?php echo $entryData->img3 ?>'>
   		    <input type="hidden" class="form-control" name="img4" id="img4"  value='<?php echo $entryData->img4 ?>'>
   		    <input type="hidden" class="form-control" name="img5" id="img5"  value='<?php echo $entryData->img5 ?>'>
   		    <input type="hidden" class="form-control" name="img6" id="img6"  value='<?php echo $entryData->img6 ?>'>
   		    <input type="hidden" class="form-control" name="img7" id="img7"  value='<?php echo $entryData->img7 ?>'>
   		    <input type="hidden" class="form-control" name="img8" id="img8"  value='<?php echo $entryData->img8 ?>'>
   		    <input type="hidden" class="form-control" name="img9" id="img9"  value='<?php echo $entryData->img9 ?>'>
   		    		
			<div class="form-group">
				<label class="control-label col-sm-2" for="SaveCar"></label>
				<div class="col-sm-10">

					<button type="submit"  name='action' id="SaveCar" class="btn btn-primary" value='save'  >
						Save
					</button>
					<button type="submit"  name='action' id="DeleteCar" class="btn btn-primary" value='delete' >
						Delete
					</button>
					<p id='editor-message'><?php echo $entryData->message ?></p>
				</div>
			</div>
		</form>
		
	
    
       
    </div>

<script type='text/javascript' src='js/tinymce/js/tinymce/tinymce.min.js'></script>
<script type='text/javascript'>
	function incomingValue(val) {
		var imgage1 = $("#img1").val();
		var imgage2 = $("#img2").val();
		var imgage3 = $("#img3").val();
		var imgage4 = $("#img4").val();
		var imgage5 = $("#img5").val();
		var imgage6 = $("#img6").val();
		var imgage7 = $("#img7").val();
		var imgage8 = $("#img8").val();
		var imgage9 = $("#img9").val();

		if (imgage1 == "") {
			$("#img1").val(val);
		} else if (imgage2 == "") {
			$("#img2").val(val);
		} else if (imgage3 == "") {
			$("#img3").val(val);
		} else if (imgage4 == "") {
			$("#img4").val(val);
		} else if (imgage5 == "") {
			$("#img5").val(val);
		} else if (imgage6 == "") {
			$("#img6").val(val);
		} else if (imgage7 == "") {
			$("#img7").val(val);
		} else if (imgage8 == "") {
			$("#img8").val(val);
		} else if (imgage9 == "") {
			$("#img9").val(val);
		} else {
			alert("Can't add more images");
		}

	}


	tinymce.init({
		selector : 'textarea',
		plugins : 'image',
		setup : function(editor) {
			editor.on('change', function(e) {
				updateEditorMessage();
			});
		}
	});
</script>