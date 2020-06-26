<?php
$entryDataFound = isset($entryData);

if(isset($_POST) && !empty($_FILES['image']['name'])){
	$name = $_FILES['image']['name'];
	list($txt, $ext) = explode(".", $name);
	$image_name = time().".".$ext;
	$tmp = $_FILES['image']['tmp_name'];

	if(move_uploaded_file($tmp, '../../img/cars/'.$image_name)){	

		echo "<img width='100%' height='100%' src='../../img/cars/".$image_name."'>";   
        echo "<input type='hidden' id='GetImage'   value='img/cars/".$image_name."'>";  
		?><script type='text/javascript'>
			
			//var img = $("#GetImage").val;
			parent.incomingValue("<?php echo "img/cars/".$image_name; ?> ");
			//parent.document.getElementById('img1').value = img;
		</script>
  <?php

	}else{
		echo "image uploading failed";

	}
}




?>