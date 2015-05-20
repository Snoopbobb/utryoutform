<<<<<<< HEAD
<?php 
class Data {
	private $name;
	private $email;
	private $city;
	private $state;
	private $sport;
	private $site_launch;
	private $site_updates;

	/***************************************************
		Constructor method to create new data row
	***************************************************/
	public function __construct($name, $email, $city, $state, $sport, $site_launch, $site_updates) {
		$this->name = $name;
		$this->email = $email;
		$this->city = $city;
		$this->state = $state;
		$this->sport = $sport;
		$this->site_launch = $site_launch;
		$this->site_updates = $site_updates;

		// Insert new data row
		$sql = "
			INSERT INTO data_collected (
				name, email, city, state, sport, site_launch, site_updates
			) VALUES (
				:name, :email, :city, :state, :sport, :site_launch, :site_updates
			)
			";

		$sql_values = [
			':name' => $this->name,
			':email' => $this->email,
			':city' => $this->city,
			':state' => $this->state,
			':sport' => $this->sport,
			':site_launch' => $this->site_launch,
			':site_updates' => $this->site_updates
		];

		// Make a PDO statement
		$statement = DB::prepare($sql);

		// Execute
		DB::execute($statement, $sql_values);
	
	}

	/***************************************************
			Method to retrieve all customers
	***************************************************/
	public function getByID($id, $table, $pk) {
		$q = 'select * from ' . $table . ' where ' . $pk . '= :id';
		$stmt = $this->db->prepare($q);
		$stmt->execute(['id'=> $id]);
		$results = $stmt->fetch();
		return $results;
	}

	public function getAll($table) {
		$q = "select * from $table";
		$stmt = $this->db->prepare($q);
		$stmt->execute();
		$results = $stmt->fetchAll();
		return $results;
		
	}

	// public function getAll(){
	// 	$sql = "
	// 		SELECT *
	// 		FROM customer
	// 		";

	// 	// Make a PDO statement
	// 	$statement = DB::prepare($sql);

	// 	// Execute
	// 	DB::execute($statement);

	// 	// Get all the results of the statement into an array
	// 	$results = $statement->fetchAll();

	// 	// Loop array to get each row
	// 	$template = '';
	// 	foreach ($results as $heading => $row) {
	// 		$template .=
	// 				'<tr>
	// 					<td>' . ucfirst($row['first_name'])  . '</td>
	// 					<td>' . ucfirst($row['last_name']) . '</td>
	// 					<td>' . $row['email'] . '</td>
	// 					<td>' . '<a href="invoice_details.php?id=' . $row['id'] . '">New Invoice</a></td>
	// 					<td>' . '<a href="edit_customer.php?id=' . $row['id'] . '">Edit</a></td>
	// 					<td>' . '<a href="delete_customer.php?id=' . $row['id'] . '">Remove</a></td>
	// 				</tr>';
	// 	}
	// 	return $template;
	// }

	/***************************************************
		Method to retrieve customer name by ID
	***************************************************/
	public function getCustomerNameByID($id){
		$sql = "
			SELECT CONCAT(c.first_name, ' ', c.last_name) AS customer_name
			FROM customer AS c
			WHERE id = $id
			";

		// Make a PDO statement
		$statement = DB::prepare($sql);

		// Execute
		DB::execute($statement);

		// Get all the results of the statement into an array
		$results = $statement->fetchAll();

		return $results[0]['customer_name'];
	}

	/****************************************************************
		Method to update customer also creates form for new customer
	*****************************************************************/
	public function update(){
		// Initialize SQL statement and template for viewing and editing individual customer
		if(isset($_GET['id'])){
			if($_GET['id'] === "") {
				header('Location: customers.php');
			} 
			$sql = "
				SELECT *
				FROM customer
				WHERE id = :id
				";

			$prepare_values = [
				':id' => $_GET['id']
				];

			// Make a PDO statement
			$statement = DB::prepare($sql);

			// Execute
			DB::execute($statement, $prepare_values);

			// Get all the results of the statement into an array
			$results = $statement->fetchAll();

			// Get the first result as a row
			$row = $results[0];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$email = $row['email'];
			$id = $row['id'];

			// Set up template for viewing 
			$template = "
			$message
			<form method=\"POST\" action=\"update_customer.php?id=$id\">
				<label>First Name</label>
				<input type=\"text\" name=\"first_name\" value=\"$first_name\">
				<label>Last Name</label>
				<input type=\"text\" name=\"last_name\" value=\"$last_name\">
				<label>Email Name</label>
				<input type=\"email\" name=\"email\" value=\"$email\">
				<select name=\"gender\">
					<option value=\"male\">Male</option>
					<option value=\"female\">Female</option>
				</select>
				<button>Update</button>
			</form>";
		} else  {
			// This will initialize template for new customer
			$template = '
			<form method="POST" action="new_customer.php">
				<label>First Name</label>
				<input type="text" name="first_name" value="">
				<label>Last Name</label>
				<input type="text" name="last_name" value="">
				<label>Email Name</label>
				<input type="email" name="email" value="">
				<select name="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				<button>ADD</button>
			</form>';
		}
		return $template;
	}

	/***************************************************
			Method to delete customer by ID
	***************************************************/
	public function deleteByID($id){ 
		$sql = "
			DELETE
			FROM customer
			WHERE id =$id";

		// Make a PDO statement
		$statement = DB::prepare($sql);

		// Execute
		DB::execute($statement);
	}
}
=======
<?php 
class Data {
	private $name;
	private $email;
	private $city;
	private $state;
	private $sport;
	private $site_launch;
	private $site_updates;

	/***************************************************
		Constructor method to create new data row
	***************************************************/
	public function __construct($name, $email, $city, $state, $sport, $site_launch, $site_updates) {
		$this->name = $name;
		$this->email = $email;
		$this->city = $city;
		$this->state = $state;
		$this->sport = $sport;
		$this->site_launch = $site_launch;
		$this->site_updates = $site_updates;

		// Insert new data row
		$sql = "
			INSERT INTO data_collected (
				name, email, city, state, sport, site_launch, site_updates
			) VALUES (
				:name, :email, :city, :state, :sport, :site_launch, :site_updates
			)
			";

		$sql_values = [
			':name' => $this->name,
			':email' => $this->email,
			':city' => $this->city,
			':state' => $this->state,
			':sport' => $this->sport,
			':site_launch' => $this->site_launch,
			':site_updates' => $this->site_updates
		];

		// Make a PDO statement
		$statement = DB::prepare($sql);

		// Execute
		DB::execute($statement, $sql_values);
	
	}
>>>>>>> 98542174f11297244f0950f67204c40645ffc1ff
