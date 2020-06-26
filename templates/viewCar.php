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

<div class="container jumbotron">
				
			<div class="form-group">
				
				<div class="col-sm-10">
					 <h3> <?php echo $entryData->Title ?></h3>					
				</div>
			</div>
			<div class="col-sm-12">
				<span class="req-into"> Vehicle Details</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="make"></label>
				<div class="col-sm-10">
					<h4>  Make  : <small><?php echo $entryData->Make ?></small></h4>
					
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="mileage"></label>
				<div class="col-sm-10">
					<h4>  Mileage  : <small><?php echo $entryData->Mileage ?></small></h4>
					
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="model"></label>
				<div class="col-sm-10">
					<h4>  Model  : <small><?php echo $entryData->Model ?></small></h4>
					
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="Year"></label>
				<div class="col-sm-10">
					<h4>  Year  : <small><?php echo $entryData->Year ?></small></h4>
					
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="transmission"> </label>
				<div class="col-sm-10">
					<h4>  Transmission  : <small><?php echo $entryData->Transmission ?></small></h4>
					
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="price"></label>
				<div class="col-sm-10">
					<h4>  Price  : <small>R<?php echo $entryData->Price ?></small></h4>
					
				</div>
			</div>		
				
			<div class="form-group">
				<label class="control-label col-sm-2" for="ExtraDetails"> </label>
				<div class="col-sm-10">
					<h4> Additional Details <small><?php echo $entryData->Details ?></small></h4>
					
				</div>
			</div>
		
 <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; visibility: hidden; background-color: #24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 356px; overflow: hidden;">
            <?php
				if ($entryData -> img1 != '') {
			?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img1 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img1 ?>" />
            </div>
            <?php
			}
			if ($entryData -> img2 != '') {
		?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img2 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img2 ?>" />
            </div>
            <?php
			}
			if ($entryData -> img3 != '') {
		?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img3 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img3 ?>" />
            </div>
            <?php
			}
			if ($entryData -> img4 != '') {
		?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img4 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img4 ?>" />
            </div>
            <?php
			}
			if ($entryData -> img5 != '') {
		?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img5 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img5 ?>" />
            </div>
            <?php
			}
			if ($entryData -> img6 != '') {
		?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img6 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img6 ?>" />
            </div>
            <?php
			}
			if ($entryData -> img7 != '') {
		?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img7 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img7 ?>" />
            </div>
            <?php
			}
			if ($entryData -> img8 != '') {
		?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img8 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img8 ?>" />
            </div>
            <?php
			}
			if ($entryData -> img9 != '') {
		?>
            <div data-p="144.50" style="display: none;">
                <img data-u="image" src="<?php echo $entryData->img9 ?>" />
                <img data-u="thumb" src="<?php echo $entryData->img9 ?>" />
            </div>
            <?php
			}
		?>
            
            
        
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01" style="position:absolute;left:0px;bottom:0px;width:800px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:8px;width:40px;height:40px;"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;"></span>
    </div>
			 <script>
				jssor_1_slider_init();
    </script>
    <br>
    
    <p class="col-md-12">
                            <a href="index.php?page=showroom" class="btn btn-primary" style="width: 100%;">Back To Showroom</a>
                        </p>
   	
   		</div>

			