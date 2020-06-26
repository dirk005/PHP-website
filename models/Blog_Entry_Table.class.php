<?php
//Check Database of add remove select ...

include_once "models/Table.class.php";
class Blog_Entry_Table extends Table {

	//save record
	public function saveEntry($title,$make, $milage,$model,$year,$transmission,$price,$extraDetail,$img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9 ) {
		$entrySQL = "INSERT INTO cars ( Title, Make, Mileage,Model,Year,Transmission,Price,Details,img1,img2,img3,img4,img5,img6,img7,img8,img9 )VALUES ( ?, ?, ? , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		//$entryStatement = $this -> db -> prepare($entrySQL);
		$formData = array($title,$make, $milage,$model,$year,$transmission,$price,$extraDetail,$img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9);
		$entryStatement = $this -> makeStatement($entrySQL, $formData);		
		return $this -> db -> lastInsertId();
	}

	//get all records
	public function getAllEntries() {
		$sql = "SELECT Car_id, Title, Make, Mileage,Model,Year,Transmission,Price,Details,img1,img2,img3,img4,img5,img6,img7,img8,img9 FROM cars ORDER BY Price";
		$statement = $this -> makeStatement($sql, $data = NULL);
		return $statement;
	}

	//get record
	public function getEntry($id) {
		$sql = "SELECT Car_id, Title, Make, Mileage,Model,Year,Transmission,Price,Details,img1,img2,img3,img4,img5,img6,img7,img8,img9  FROM cars WHERE Car_id = ?";
		$data = array($id);
		$statement = $this -> makeStatement($sql, $data);
		$model = $statement -> fetchObject();
		return $model;
	}

	//delete record
	public function deleteEntry($id) {
		
		$sql = "DELETE FROM cars WHERE Car_id = ?";
		$data = array($id);
		$statement = $this -> makeStatement($sql, $data);
	}
	public function updateEntry($id, $title, $make, $milage, $model, $year, $transmission, $price, $extraDetail,$img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9) {
		$sql = "UPDATE cars	SET Title = ?,	Make = ?,	Mileage = ?,	Model = ?,	Year = ?,	Transmission = ?,	Price = ?,	Details = ? , img1 = ?, img2 = ?, img3 = ?, img4 = ?, img5 = ?, img6 = ?, img7 = ?, img8  = ?, img9  = ? WHERE Car_id = ?";
		$data = array( $title, $make, $milage, $model, $year, $transmission, $price, $extraDetail,$img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9, $id);
		$statement = $this -> makeStatement($sql, $data);
		return $statement;
	}

	public function searchEntry($searchTerm) {
		$sql = "SELECT entry_id, title FROM blog_entry WHERE title LIKE ? OR entry_text LIKE ?";
		$data = array("%$searchTerm%", "%$searchTerm%");
		$statement = $this -> makeStatement($sql, $data);
		return $statement;
	}

}
