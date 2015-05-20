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