<?php

if (isset($allEntries) === false) {
	trigger_error('templates/latestCars.php needs $allEntries');
}
?>
<section id="LatestCars">
	<div class="text-center intro-text ">
		<h1>LATEST CARS</h1>
	</div>
	<div class="container">

		<div class="row">
			<?php
			$counter = 0;
			$max = 3;
              while ($entry = $allEntries -> fetchObject() and ($counter < $max)) {
            //add page and id to href
             $href = "index.php?page=View&amp;id=$entry->Car_id";        

			?>

			<div class="col-md-4">
				<div class="thumbnail">
					 <img style="height: 200px;" src='<?php echo $entry->img1 ?>'>
					<div class="caption">
						<h3> <?php echo $entry->Title ?></h3>
						 <h4>  Make  : <small><?php echo $entry->Make ?></small></h4>
                           <h4>  Mileage  : <small><?php echo $entry->Mileage ?></small></h4>
                           
                           
                           <h4>  Price  : <small>R<?php echo $entry->Price ?></small></h4> 
						<p>
							<a href="<?php echo $href ?>" class="btn btn-primary" style="width: 45%;">Read More</a>
						
							<a href="index.php?page=showroom" class="btn btn-primary" style="width: 45%;">Showroom</a>
						</p>
					</div>
				</div>
			</div>
			<?php
			$counter++; //count number to display
			}
		?>
			<!-- end while -->
			
		</div>
	</div>
</section>