<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct($connection_string)
	{
		// Set up the database source name (DSN)
		$dsn = $connection_string;
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, '', '', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 //echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "Error! Unable to connect with the database. <br><br>";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE coke (Id INTEGER PRIMARY KEY, propertyName TEXT, propertyValue TEXT)");
			$this->dbhandle->exec("CREATE TABLE fanta (Id INTEGER PRIMARY KEY, propertyName TEXT, propertyValue TEXT)");
			$this->dbhandle->exec("CREATE TABLE sprite (Id INTEGER PRIMARY KEY, propertyName TEXT, propertyValue TEXT)");
			return "All tables successfully created inside cocacola.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		
		try{
			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (1, 'heading', '1<span>oke</span>');");
	
			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (2, 'description', 'The taste of the classic Coca-Cola has remained unchanged for more than 135 years. Bringing all of us together. Nothing beats the taste of classic Coca-Cola. It is designed to go with everything.'); ");
	
			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (3, 'foreground', 'assets/images/coke.png'); ");

			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (4, 'background', 'assets/images/coke_back.jpg');");
	
			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (5, 'thumbnail-img-1', 'assets/images/thumbnails/coke1.png'); ");
	
			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (6, 'thumbnail-img-2', 'assets/images/thumbnails/coke2.jpg'); ");

			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (7, 'gallery-img-1', 'assets/images/coke1.png');");
	
			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (8, 'gallery-img-2', 'assets/images/coke2.png'); ");
	
			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (9, 'model-heading', '1<span>oke</span> 3D Model'); ");

			$this->dbhandle->exec("INSERT INTO coke (Id, propertyName, propertyValue) 
				VALUES (10, 'model-description', 'This X3D model of the coke can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.');");

			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (1, 'heading', 'FANTA');");
	
			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (2, 'description', 'It is a classic iconic flavor inspiration in a bottle passion for life share every moment because embracing what makes you unique makes you cool thing.'); ");
	
			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (3, 'foreground', 'assets/images/fanta.png'); ");

			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (4, 'background', 'assets/images/fanta_back.jpg');");
	
			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (5, 'thumbnail-img-1', 'assets/images/thumbnails/fanta1.jpg'); ");
	
			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (6, 'thumbnail-img-2', 'assets/images/thumbnails/fanta2.jpg'); ");

			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (7, 'gallery-img-1', 'assets/images/fanta1.png');");
	
			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (8, 'gallery-img-2', 'assets/images/fanta2.png'); ");
	
			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (9, 'model-heading', 'Fanta 3D Model'); ");

			$this->dbhandle->exec("INSERT INTO fanta (Id, propertyName, propertyValue) 
				VALUES (10, 'model-description', 'This X3D model of the fanta can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.');");

			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (1, 'heading', 'Sprite');");
	
			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (2, 'description', 'Clear out all the pressure of the week with Sprite’s clear, crisp lemon-lime flavour. Sprite’s crisp taste with hit of lemon-lime flavour gives you that unmatched cut-through refreshment.'); ");
	
			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (3, 'foreground', 'assets/images/sprite.png'); ");

			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (4, 'background', 'assets/images/sprite_back.jpg');");
	
			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (5, 'thumbnail-img-1', 'assets/images/thumbnails/sprite1.jpg'); ");
	
			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (6, 'thumbnail-img-2', 'assets/images/thumbnails/sprite2.jpg'); ");

			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (7, 'gallery-img-1', 'assets/images/sprite1.jpg');");
	
			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (8, 'gallery-img-2', 'assets/images/sprite2.jpg'); ");
	
			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (9, 'model-heading', 'sprite 3D Model'); ");

			$this->dbhandle->exec("INSERT INTO sprite (Id, propertyName, propertyValue) 
				VALUES (10, 'model-description', 'This X3D model of the sprite can has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online.');");

			return "All tables populated successfully!";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbGetData($table_name){
		try{
			// Prepare a statement to get all records from the Model_3D table
			$sql = 'SELECT * FROM '. $table_name;
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['x3dModelTitle'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$data['propertyName']] = $data['propertyValue'];
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return json_encode($result);
	}
	
}
?>