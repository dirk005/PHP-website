<?php
//complete code for views/admin/entries-html.php
if (isset($allEntries) === false) {
	trigger_error('templates/showroom.php needs $allEntries');
}
?>
<div class="container-fluid">
    <div class="text-center intro-text ">
    	<br>
    	<br>
        <h1>Show room</h1>
    </div>
	
   <div class="row">
	   <?php
              while ($entry = $allEntries -> fetchObject()) {
            //add page and id to href
             $href = "index.php?page=view&amp;id=$entry->Car_id";        
         ?>
 			
            <div class="col-md-12">
                <div class=" container-fluid jumbotron ">
                    <div class="col-md-3">
                        <div class="thumbnail">
                             <img src='<?php echo $entry->img1 ?>'>
                        </div>
                    </div>
                    <div class="caption" >
                    	<div class="col-md-4" >
                        <h3> <?php echo $entry->Title ?></h3>
                       
                           <h4>  Make  : <small><?php echo $entry->Make ?></small></h4>
                           <h4>  Mileage  : <small><?php echo $entry->Mileage ?></small></h4>
                           <h4>  Model  : <small><?php echo $entry->Model ?></small></h4>
                           <h4>  Year  : <small><?php echo $entry->Year ?></small></h4>
                           <h4>  Price  : <small>R<?php echo $entry->Price ?></small></h4>                         
                           
                           </div>                           
                           <div class="col-md-4" >
                           	<br>
                          <h4>  Extra Detials : <small> <?php echo $entry->Details ?></small></h4>
                        </div>
                        <p class="col-md-12">
                            <a href="<?php echo $href ?>" class="btn btn-primary" style="width: 100%;">Read More</a>
                        </p>
                    </div>
                </div>
            </div>	
	   <?php
	}
         ?> <!-- end while -->
    </div>
</div>