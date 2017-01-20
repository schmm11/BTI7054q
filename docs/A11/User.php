<?php
class User {
	private $id, $username, $name, $first_name, $street, $street_number, $postal_code, $city, $mailaddress, $password;


	public function getId() {
		return $this->id;
	}
	public function getUserName(){
		return $this->username;
	}
	public function getName(){
		return $this->name;
	}
	public function getFirstName(){
		return $this->first_name;
	}
	public function getStreet(){
		return $this->street;
	}
	public function getStreetNumber(){
		return $this->street_number;
	}
	public function getPostalCode(){
		return $this->postal_code;
	}
	public function getCity(){
		return $this->city;
	}
	public function getMail(){
		return $this->mailaddress;
	}
	public function getPassword(){
		return $this->password;
	}

	public function __toString(){
		return $this->username;
	}


static public function getUserByName($username) {
		$username =  $username; // NEEDS to get Safe => Injection
		$res = DB::doQuery("SELECT
			users.id AS id,
			users.username AS username,
			users.name AS name,
			users.first_name AS first_name,
			users.street AS street,
			users.street_number AS street_number,
			users.postal_code AS postal_code,
			users.city AS city,
			users.mail as mailadress,
			users.password_hash AS password
			FROM users
			WHERE username = '".$username."';
			"
		);
	if (!$res) return null;
		return $res->fetch_object(get_class());
}

	static public function createUserByName($username, $password)
	{
		$password_hash = password_hash($password, PASSWORD_BCRYPT);
		return DB::doQuery("INSERT INTO users (id, username, name, first_name, street, street_number, postal_code, city, mail, password_hash) VALUES (
			NULL, '$username', 'Mustermann', 'Max', 'Musterweg', 42, 3000, 'Bern', 'max.mustermann@be.ch', '$password_hash');");
	}
}